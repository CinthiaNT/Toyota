<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class cobranza_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getCobranzas($id_compra){
        $resultado = $this->db->query("select *, cob.id as idCob, cob.fecha as fechaCob from cobranza as cob
        														join compracotizacion as cc on cob.id_compra = cc.id
        														where cob.id_compra = ".$id_compra.";");       
        return $resultado->result_array();
    }

    function getDatosVenta($id_compra){
        $resultado = $this->db->query("select * from compracotizacion where id = ".$id_compra.";");       
        return $resultado->result_array();
    }

    function insertCobranza($datos){
        $result = $this->db->query("insert into cobranza values(null,'".$datos['fecha']."','".$datos['mensualidades_abonadas']."','".$datos['id_compra']."');");
    }

    function getPagadas($id_compra){
        $resultado = $this->db->query("select mensualidades_pagadas from compracotizacion where id = ".$id_compra.";");       
        return $resultado->result_array();
    }

    function updatePagadas($id_compra,$actualizadas){
        $result = $this->db->query("update compracotizacion set mensualidades_pagadas = ".$actualizadas." where id = ".$id_compra.";");
    }
}