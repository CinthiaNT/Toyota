<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reporte extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Reporte/reporte_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        /*$autos = $this->automovil_model->getAutos();
        $data['autos'] = $autos;*/
        $this->load->view('base/head');
        $this->load->view('reporte/reporteView');
        $this->load->view('base/js');
    }
    public function vendedor()
	{
        $vendedor = $this->reporte_model->mejorVendedor();
        $data['vendedor'] = $vendedor;
        $this->load->view('reporte/reporteMejorVendedor',$data);
    }
    public function cliente()
	{
        $cliente = $this->reporte_model->mejorCliente();
        $data['cliente'] = $cliente;
        $this->load->view('reporte/reporteMejorCliente',$data);
    }
    public function auto()
	{
        $auto = $this->reporte_model->mejorAuto();
        $data['auto'] = $auto;
        $this->load->view('reporte/reporteMejorAuto',$data);
    }
}
