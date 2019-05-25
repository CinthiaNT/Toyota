<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cotizacion extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Cotizacion/cotizacion_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
	{
        $data['cotizaciones'] = $this->cotizacion_model->getCotizaciones();

        $this->load->view('base/head');
        $this->load->view('cotizacion/cotizacionTabla', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
	}

	public function agregar(){
        $dato ['cotizacion']= array(Array('id' => '',
                                        'estatus' => '',
                                        'descuento'=>'',
                                        'comision'=>'',
                                        'precio_neto' => '',
                                        'enganche'=> '',
                                        'tasa'=>'',
                                    	'plazo' => '',
                                        'precio_final'=>'',
                                        'mensualidad_sin_interes'=>'',
                                        'interes' => '',
                                        'mensualidad_con_interes'=> '',
                                    	'mensualidades_pagadas'=>'',
                                        'id_vendedor'=>'',
                                        'id_cliente' => '',
                                        'id_automovil'=> ''));
        $this->load->view('base/head');
        $this->load->view('cotizacion/cotizacionForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }
}