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
    function obtenerValue($id){
        $resultado = $this->db->query("select * from automovil where id = ".$id.";");       
        return $resultado->result_array();
    }
    function insert($dato){
        $result = $this->db->query("insert into automovil values(null,'".$dato['marca']."','".$dato['modelo']."',".$dato['precio'].",'".$dato['no_serie']."','".$dato['clave_vehicular']."',
        '".$dato['no_inventario']."','".$dato['tipo']."','".$dato['color_exterior']."','".$dato['color_interior']."','".$dato['no_motor']."','".$dato['tipo_motor']."','".$dato['procedencia']."',
        ".$dato['no_cilindros'].",'".$dato['estado_vehiculo']."','".$dato['transmision']."',".$dato['puertas'].",'".$dato['tipo_auto']."','".$dato['capacidad']."','".$dato['combustible']."');");
    }
    function delete($id){
        $resultado = $this->db->query("delete from automovil where id = '".$id."'");
    }
    function update($dato){
        $result = $this->db->query("update automovil set marca = '".$dato['marca']."', modelo = '".$dato['modelo']."',precio=".$dato['precio'].",no_serie='".$dato['no_serie']."',
        clave_vehicular='".$dato['clave_vehicular']."',no_inventario='".$dato['no_inventario']."',tipo='".$dato['tipo']."',color_exterior='".$dato['color_exterior']."',
        color_interior='".$dato['color_interior']."',no_motor=".$dato['no_motor'].",tipo_motor='".$dato['tipo_motor']."',procedencia='".$dato['procedencia']."',
        no_cilindros = ".$dato['no_cilindros'].", estado_vehiculo = '".$dato['estado_vehiculo']."',
        transmision='".$dato['transmision']."',puertas=".$dato['puertas'].",tipo_auto='".$dato['tipo_auto']."',capacidad = '".$dato['capacidad']."',combustible='".$dato['combustible']."'
        where id = ".$dato['id'].";");
    }
} 