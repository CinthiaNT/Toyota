<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class automovil_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
    function getAutos() {
        $result = $this->db->query("select * from automovil;");
        return $result->result_array();    
    }
} 