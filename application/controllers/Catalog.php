<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Catalog/catalog_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $dato ['automoviles']= $this->catalog_model->getAutomoviles();

        $this->load->view('base/head');
        $this->load->view('Catalog/CatalogView',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
	}
}