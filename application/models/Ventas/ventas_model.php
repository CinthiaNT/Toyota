<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class ventas_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getVentas() {
        $result = $this->db->query("select *, cc.id as idCV from compracotizacion as cc 
                                                            join vendedor as ven on cc.id_vendedor = ven.id
                                                            join cliente as cli on cc.id_cliente = cli.id
                                                            join automovil as auto on cc.id_automovil = auto.id
                                                            where cc.estatus = 'venta';");
                                    return $result->result_array();    
    }
    function delete($id){
        $resultado = $this->db->query("delete from compracotizacion where id = '".$id."'");
    }
}