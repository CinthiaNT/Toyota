<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class cliente_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getClients() {
        $result = $this->db->query("select * from cliente;");
        return $result->result_array();    
    }
}