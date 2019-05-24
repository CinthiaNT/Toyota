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

    function insertClient($datos){
        $result = $this->db->query("insert into cliente values(null,'".$datos['razon_social']."','".$datos['regimen_fiscal']."','".$datos['rfc']."','".$datos['telefono']."','".$datos['direccion']."','".$datos['correo']."');");
    }

    function obtenerValor($id){
        $resultado = $this->db->query("select * from cliente where id = ".$id.";");       
        return $resultado->result_array();
    }

    function updateClient($datos){
        $result = $this->db->query("update cliente set razon_social = '".$datos['razon_social']."', regimen_fiscal = '".$datos['regimen_fiscal']."', rfc = '".$datos['rfc']."', telefono = '".$datos['telefono']."', direccion = '".$datos['direccion']."', correo = '".$datos['correo']."' where id = ".$datos['id'].";");
    }

    function delete($id){
        $resultado = $this->db->query("delete from cliente where id = '".$id."'");
    }
}