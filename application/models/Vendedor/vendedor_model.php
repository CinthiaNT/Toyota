<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class vendedor_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getVendedores() {
        $result = $this->db->query("select * from vendedor;");
        return $result->result_array();    
    }

    function insert($datos){
        $result = $this->db->query("insert into vendedor values(null,'".$datos['nombre']."','".$datos['apellidos']."','".$datos['correo']."');");
    }

    function getValue($id){
        $resultado = $this->db->query("select * from vendedor where id = ".$id.";");       
        return $resultado->result_array();
    }

    function update($datos){
        $result = $this->db->query("update vendedor set nombre = '".$datos['nombre']."', apellidos = '".$datos['apellidos']."', correo = '".$datos['correo']."' where id = ".$datos['id'].";");
    }

    function delete($id){
        $resultado = $this->db->query("delete from vendedor where id = '".$id."'");
    }
}