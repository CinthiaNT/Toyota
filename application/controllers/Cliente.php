<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cliente extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Cliente/cliente_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $data['clients'] = $this->cliente_model->getClients();

        $this->load->view('base/head');
        $this->load->view('cliente/clienteTabla', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
	}
}
