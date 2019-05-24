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

    /*public function agregar(){
        $dato ['cliente']= array(Array('id' => '',
                                        'razon_social' => '',
                                        'regimen_fiscal'=>'',
                                        'rfc'=>'',
                                        'telefono' => '',
                                        'direccion'=> '',
                                        'correo'=>''));
        $this->load->view('base/head');
        $this->load->view('cliente/clienteForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function editar(){
        $id = $this->input->post('editar');
        $dato['cliente']= $this->cliente_model->obtenerValor($id);

        $this->load->view('base/head');
        $this->load->view('cliente/clienteForm', $dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function valor()
    {
        $actualizar =  $this->input->post('1');
        $insertar =  $this->input->post('2'); 

        $datos  = array(
            'id' =>  $this->input->post('id'),    
            'razon_social'     =>  $this->input->post('razon_social'),
            'regimen_fiscal'    =>  $this->input->post('regimen_fiscal'), 
            'rfc'    =>  $this->input->post('rfc'),
            'telefono'    =>  $this->input->post('telefono'),
            'direccion'    =>  $this->input->post('direccion'),
            'correo'    =>  $this->input->post('correo')
        );

           if($actualizar == '1'){ 
                $this->cliente_model->updateClient($datos);
                echo '<script language="javascript">alert("Cliente actualizado exitosamente");</script>';
            } else if ($insertar == '2') {
                $this->cliente_model->insertClient($datos);
                echo '<script language="javascript">alert("Cliente agregado exitosamente");</script>';
            }

            redirect(base_url().'Cliente', 'refresh');
    }

    public function eliminar(){
        $id = $this->input->post('eliminar');
        $this->cliente_model->delete($id);
        echo '<script language="javascript">alert("Cliente eliminado exitosamente");</script>';
        redirect(base_url().'Cliente', 'refresh');
    }*/
}
