<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Automovil extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Automovil/automovil_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $autos = $this->automovil_model->getAutos();
        $data['autos'] = $autos;
        $this->load->view('base/head');
        $this->load->view('automovil/automovilTabla',$data);
        $this->load->view('base/js');
    }
}
