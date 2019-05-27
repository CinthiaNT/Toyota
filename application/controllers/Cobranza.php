<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cobranza extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Cobranza/cobranza_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
    	$id_compra = $this->input->get('id_compra');
        $data['cobranzas'] = $this->cobranza_model->getCobranzas($id_compra);
        $data['datosVenta'] = $this->cobranza_model->getDatosVenta($id_compra);

        $this->load->view('base/head');
        $this->load->view('cobranza/cobranzaTabla', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }
    public function reporte()
    {
        $id = $this->input->post('reporte');
        $data['cobranza'] = $this->cobranza_model->reporte($id);
        $this->load->view('cobranza/cobranzaReporte',$data);
    }

	public function agregar(){
		$id_compra = $this->input->post('agregar');

        $dato ['cobranza']= array(Array('id' => '',
        								'fecha' => '',
                                        'mensualidades_abonadas' => '',
                                        'id_compra' => $id_compra));

        $dato['datosVenta'] = $this->cobranza_model->getDatosVenta($id_compra);

        $this->load->view('base/head');
        $this->load->view('cobranza/cobranzaForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function valor(){
    	$id_compra = $this->input->post('id_compra');
    	$abonadas = $this->input->post('mensualidades_abonadas');

    	$datos  = array(
            'id' =>  $this->input->post('id'),    
            'fecha'     =>  $this->input->post('fecha'),
            'mensualidades_abonadas'    =>  $this->input->post('mensualidades_abonadas'), 
            'id_compra'    =>  $this->input->post('id_compra')
        );

        $actuales = $this->cobranza_model->getPagadas($id_compra);
        $pagadas = $actuales[0]['mensualidades_pagadas'];

        $actualizadas = $abonadas + $pagadas;

        $this->cobranza_model->insertCobranza($datos);
        $this->cobranza_model->updatePagadas($id_compra,$actualizadas);

        echo '<script language="javascript">alert("Abono realizado exitosamente");</script>';
        redirect(base_url().'Cobranza/?id_compra='.$id_compra, 'refresh');
    }
}