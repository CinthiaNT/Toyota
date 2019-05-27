<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class reporte_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function mejorVendedor() {
        $result = $this->db->query("select max(contador) as ventas, name, ap from(select v.nombre as name, v.apellidos as ap, c.estatus as e,
                                    count(c.id_vendedor) as contador 
                                    from compracotizacion as c join vendedor v on c.id_vendedor = v.id 
                                    group by id_vendedor) as t where e = 'venta';");
        return $result->result_array();    
    }
    function mejorCliente() {
        $result = $this->db->query("select max(contar) as compras,rs from(select cl.razon_social as rs,c.estatus as es, count(c.id_cliente) as contar 
                                    from compracotizacion as c join cliente cl
                                    on c.id_cliente = cl.id
                                    where estatus = 'venta' group by id_cliente) as t;");
        return $result->result_array();    
    }
    function mejorAuto(){
    $result = $this->db->query("select m as modelo, max(contar) as cantidad from
                                (select a.modelo as m, count(a.modelo) as contar 
                                from compracotizacion as c join automovil as a 
                                on c.id_automovil = a.id where c.estatus = 'venta' 
                                group by a.modelo) as t;");
        return $result->result_array();   
    }

    
}