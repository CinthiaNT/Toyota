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
        								'fecha' => '',
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

        $dato['vendedores'] = $this->cotizacion_model->getVendedores();
        $dato['numVendedores'] = $this->cotizacion_model->getNumVendedores();

        $dato['clientes'] = $this->cotizacion_model->getClientes();
        $dato['numClientes'] = $this->cotizacion_model->getNumClientes();

        $dato['automoviles'] = $this->cotizacion_model->getAutomoviles();
        $dato['numAutomoviles'] = $this->cotizacion_model->getNumAutomoviles();

        $this->load->view('base/head');
        $this->load->view('cotizacion/cotizacionForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    function editar(){
    	$id = $this->input->post('editar');
    	$dato['cotizacion']= $this->cotizacion_model->obtenerValor($id);

    	$dato['vendedores'] = $this->cotizacion_model->getVendedores();
        $dato['numVendedores'] = $this->cotizacion_model->getNumVendedores();

        $dato['clientes'] = $this->cotizacion_model->getClientes();
        $dato['numClientes'] = $this->cotizacion_model->getNumClientes();

        $dato['automoviles'] = $this->cotizacion_model->getAutomoviles();
        $dato['numAutomoviles'] = $this->cotizacion_model->getNumAutomoviles();

    	$this->load->view('base/head');
        $this->load->view('cotizacion/cotizacionForm',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function valor(){
    	$oculto = $this->input->post('oculto');
    	$plazo = $this->input->post('plazo');
    	$abono = $this->input->post('mensualidad_sin_interes');
    	$interes = $this->input->post('interes');
    	$mensualidad = $this->input->post('mensualidad_con_interes');
    	$id = $this->input->post('id');

    	$datos  = array(
            'id' =>  $this->input->post('id'),    
            'fecha'     =>  $this->input->post('fecha'),
            'estatus' => 'cotizacion',
            'descuento'    =>  $this->input->post('descuento'), 
            'comision'    =>  $this->input->post('comision'),
            'precio_neto'    =>  $this->input->post('precio_neto'),
            'enganche'    =>  $this->input->post('enganche'),
            'tasa'    =>  $this->input->post('tasa'),
            'plazo'    =>  $this->input->post('plazo'),
            'precio_final'    =>  $this->input->post('precio_final'),
            'mensualidad_sin_interes'    =>  $this->input->post('mensualidad_sin_interes'),
            'interes'    =>  $this->input->post('interes'),
            'mensualidad_con_interes'    =>  $this->input->post('mensualidad_con_interes'),
            'mensualidades_pagadas' => 0,
            'id_vendedor'    =>  $this->input->post('id_vendedor'),
            'id_cliente'    =>  $this->input->post('id_cliente'),
            'id_automovil'    =>  $this->input->post('id_automovil')
        );

        if($oculto == '1'){
        	//Actualizar
        	$this->cotizacion_model->updateCotizacion($datos);
        	echo '<script language="javascript">alert("Cotización actualizada exitosamente");</script>';
        }else if($oculto == '2'){
        	//Realizar venta
        	$this->cotizacion_model->realizarVenta($id);
        	echo '<script language="javascript">alert("Venta realizada exitosamente");</script>';
        	redirect(base_url().'Cotizacion', 'refresh');
        }else if($oculto == '3') {
        	//Guardar
        	$this->cotizacion_model->insertCotizacion($datos);
        	echo '<script language="javascript">alert("Cotización agregada exitosamente");</script>';
        }

        if($oculto == '1' || $oculto == '3'){
	        $this->cotizacion_model->vaciarAmortizacion();

	        for ($i=0; $i < $plazo; $i++) {
	        	$data = array(
	        		'numero' => ($i+1),
	        		'fecha' => $this->input->post('fecha'.($i+1)),
	        		'concepto' => 'Abono de mensualidad',
	        		'abono' => $abono,
	        		'interes' => $interes,
	        		'mensualidad' => $mensualidad,
	        		'saldo' => $this->input->post('saldo'.($i+1))
	        	);

	        	$this->cotizacion_model->insertAmortizacion($data);
	        }

	        $datas['amortizacion'] = $this->cotizacion_model->getAmortizacion();

	        if($oculto == '1'){
	        	$datas['datos'] = $this->cotizacion_model->getCotizacionEspecifica($id);
	        }else if($oculto == '3'){
	        	$datas['datos'] = $this->cotizacion_model->getUltimaCotizacion();
	        }

	        $this->load->view('cotizacion/cotizacionReporte', $datas);
    	}
    }

    public function eliminar(){
        $id = $this->input->post('eliminar');
        $this->cotizacion_model->delete($id);
        echo '<script language="javascript">alert("Cotización eliminada exitosamente");</script>';
        redirect(base_url().'Cotizacion', 'refresh');
    }
}