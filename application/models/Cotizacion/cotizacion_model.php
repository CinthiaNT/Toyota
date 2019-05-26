<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class cotizacion_model extends CI_Model{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getCotizaciones() {
        $result = $this->db->query("select *, cc.id as idCC from compracotizacion as cc 
                                                            join vendedor as ven on cc.id_vendedor = ven.id
                                                            join cliente as cli on cc.id_cliente = cli.id
                                                            join automovil as auto on cc.id_automovil = auto.id
                                                            where cc.estatus = 'cotizacion';");
        return $result->result_array();    
    }

    function getVendedores(){
        $resultado = $this->db->query("select * from Vendedor;");
        return $resultado->result_array();
    }

    function getNumVendedores(){
        $resultado = $this->db->query("select COUNT(*) as totalVendedores from Vendedor;");
        return $resultado->result_array();
    }

    function getClientes(){
        $resultado = $this->db->query("select * from Cliente;");
        return $resultado->result_array();
    }

    function getNumClientes(){
        $resultado = $this->db->query("select COUNT(*) as totalClientes from Cliente;");
        return $resultado->result_array();
    }

    function getAutomoviles(){
        $resultado = $this->db->query("select * from Automovil;");
        return $resultado->result_array();
    }

    function getNumAutomoviles(){
        $resultado = $this->db->query("select COUNT(*) as totalAutomoviles from Automovil;");
        return $resultado->result_array();
    }

    function insertCotizacion($datos){
        $result = $this->db->query("insert into compracotizacion values(null,'".$datos['fecha']."','".$datos['estatus']."','".$datos['descuento']."','".$datos['comision']."','".$datos['precio_neto']."','".$datos['enganche']."','".$datos['tasa']."','".$datos['plazo']."','".$datos['precio_final']."','".$datos['mensualidad_sin_interes']."','".$datos['interes']."','".$datos['mensualidad_con_interes']."','".$datos['mensualidades_pagadas']."','".$datos['id_vendedor']."','".$datos['id_cliente']."','".$datos['id_automovil']."');");
    }

    function vaciarAmortizacion(){
        $result = $this->db->query("truncate table amortizacion;");
    }

    function insertAmortizacion($data){
        $result = $this->db->query("insert into amortizacion values('".$data['numero']."','".$data['fecha']."','".$data['concepto']."','".$data['abono']."','".$data['interes']."','".$data['mensualidad']."','".$data['saldo']."');");
    }

    function getAmortizacion(){
        $result = $this->db->query("select * from amortizacion;");
        return $result->result_array();    
    }

    function getUltimaCotizacion(){
        $result = $this->db->query("select *, cc.id as idCC, ven.correo as correoVen from compracotizacion as cc 
                                                            join vendedor as ven on cc.id_vendedor = ven.id
                                                            join cliente as cli on cc.id_cliente = cli.id
                                                            join automovil as auto on cc.id_automovil = auto.id
                                                            where cc.estatus = 'cotizacion'
                                                            order by cc.id desc;");
        return $result->result_array();
    }

    function obtenerValor($id){
        $resultado = $this->db->query("select * from compracotizacion where id = ".$id.";");       
        return $resultado->result_array();
    }

    function updateCotizacion($datos){
        $result = $this->db->query("update compracotizacion set fecha = '".$datos['fecha']."', estatus = '".$datos['estatus']."', descuento = '".$datos['descuento']."', comision = '".$datos['comision']."', precio_neto = '".$datos['precio_neto']."', enganche = '".$datos['enganche']."', tasa = '".$datos['tasa']."', plazo = '".$datos['plazo']."', precio_final = '".$datos['precio_final']."', mensualidad_sin_interes = '".$datos['mensualidad_sin_interes']."', interes = '".$datos['interes']."', mensualidad_con_interes = '".$datos['mensualidad_con_interes']."', mensualidades_pagadas = '".$datos['mensualidades_pagadas']."', id_vendedor = '".$datos['id_vendedor']."', id_cliente = '".$datos['id_cliente']."', id_automovil = '".$datos['id_automovil']."' where id = ".$datos['id'].";");
    }

    function getCotizacionEspecifica($id){
        $result = $this->db->query("select *, cc.id as idCC, ven.correo as correoVen from compracotizacion as cc 
                                                            join vendedor as ven on cc.id_vendedor = ven.id
                                                            join cliente as cli on cc.id_cliente = cli.id
                                                            join automovil as auto on cc.id_automovil = auto.id
                                                            where cc.estatus = 'cotizacion' and cc.id = ".$id.";");
        return $result->result_array();
    }

    function realizarVenta($id){
        $result = $this->db->query("update compracotizacion set estatus = 'venta' where id = ".$id.";");
    }

    function delete($id){
        $resultado = $this->db->query("delete from compracotizacion where id = '".$id."'");
    }

    function getExistencia($id_automovil){
        $result = $this->db->query("select no_inventario from automovil where id = ".$id_automovil.";");
        return $result->result_array();
    }

    function disminuirExistencia($id_automovil,$cantidad){
        $result = $this->db->query("update automovil set no_inventario = ".$cantidad." where id = ".$id_automovil.";");
    }
}