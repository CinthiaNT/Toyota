<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vendedor extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Vendedor/vendedor_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $data['vendedores'] = $this->vendedor_model->getVendedores();

        $this->load->view('base/head');
        $this->load->view('vendedor/vendedorTabla', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
	}

    public function agregar(){
        $dato ['vendedor']= array(Array('id' => '',
                                        'nombre' => '',
                                        'apellidos'=>'',
                                        'correo'=>''));
        $this->load->view('base/head');
        $this->load->view('vendedor/vendedorForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function editar(){
        $id = $this->input->post('editar');
        $dato['vendedor']= $this->vendedor_model->getValue($id);

        $this->load->view('base/head');
        $this->load->view('vendedor/vendedorForm', $dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function valor()
    {
        $actualizar =  $this->input->post('1');
        $insertar =  $this->input->post('2'); 

        $datos  = array(
            'id' =>  $this->input->post('id'),    
            'nombre'     =>  $this->input->post('nombre'),
            'apellidos'    =>  $this->input->post('apellidos'), 
            'correo'    =>  $this->input->post('correo')
        );

           if($actualizar == '1'){ 
                $this->vendedor_model->update($datos);
                echo '<script language="javascript">alert("Vendedor actualizado exitosamente");</script>';
            } else if ($insertar == '2') {
                $this->vendedor_model->insert($datos);
                echo '<script language="javascript">alert("Vendedor agregado exitosamente");</script>';
            }

            redirect(base_url().'Vendedor', 'refresh');
    }

    public function eliminar(){
        $id = $this->input->post('eliminar');
        $this->vendedor_model->delete($id);
        echo '<script language="javascript">alert("Vendedor eliminado exitosamente");</script>';
        redirect(base_url().'Vendedor', 'refresh');
    }
}
