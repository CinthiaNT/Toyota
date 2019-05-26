<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ventas extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Ventas/ventas_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $data['ventas'] = $this->ventas_model->getVentas();

        $this->load->view('base/head');
        $this->load->view('ventas/ventasTabla', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
    }
    public function reporte()
    {
        $id = $this->input->post('reporte');
        $data['venta'] = $this->ventas_model->reporte($id);
        $this->load->view('ventas/factura',$data);
    }
    public function eliminar(){
        $id = $this->input->post('eliminar');
        $this->ventas_model->delete($id);
        echo '<script language="javascript">alert("Venta eliminada exitosamente");</script>';
        redirect(base_url().'Ventas', 'refresh');
    }
}
