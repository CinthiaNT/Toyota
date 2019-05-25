<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Automovil extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Automovil/automovil_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $autos = $this->automovil_model->getAutos();
        $data['autos'] = $autos;
        $this->load->view('base/head');
        $this->load->view('automovil/automovilTabla',$data);
        $this->load->view('base/js');
    }

    public function agregar(){
        $dato ['automovil']= array(Array('id' => '',
                                        'marca' => '',
                                        'modelo'=>'',
                                        'precio'=>'',
                                        'no_serie' => '',
                                        'clave_vehicular'=> '',
                                        'no_inventario'=>'',
                                        'tipo'=>'',
                                        'color_exterior'=>'',
                                        'color_interior'=>'',
                                        'no_motor'=>'',
                                        'tipo_motor'=>'',
                                        'procedencia'=>'',
                                        'no_cilindros'=>'',
                                        'estado_vehiculo'=>'',
                                        'transmision'=>'',
                                        'puertas'=>'',
                                        'tipo_auto'=>'',
                                        'capacidad'=>'',
                                        'combustible'=>''
                                    ));
        $this->load->view('base/head');
        $this->load->view('automovil/automovilCrud',$dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function editar(){
        $id = $this->input->post('editar');
        $dato['automovil']= $this->automovil_model->obtenerValue($id);
        $this->load->view('base/head');
        $this->load->view('automovil/automovilCrud', $dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }
    public function valor()
    {
        $actualizar =  $this->input->post('1');
        $insertar =  $this->input->post('2'); 

        $dato = array(
        'id' => $this->input->post('id'),
        'marca' => $this->input->post('marca'),
        'modelo'=>$this->input->post('modelo'),
        'precio'=>$this->input->post('precio'),
        'no_serie' => $this->input->post('nserie'),
        'clave_vehicular'=> $this->input->post('clave'),
        'no_inventario'=>$this->input->post('inventario'),
        'tipo'=>$this->input->post('tipo'),
        'color_exterior'=>$this->input->post('colorExt'),
        'color_interior'=>$this->input->post('colorInt'),
        'no_motor'=>$this->input->post('motor'),
        'tipo_motor'=>$this->input->post('tipoMotor'),
        'procedencia'=>$this->input->post('procedencia'),
        'no_cilindros'=>$this->input->post('cilindros'),
        'estado_vehiculo'=>$this->input->post('estado'),
        'transmision'=>$this->input->post('transmision'),
        'puertas'=>$this->input->post('puertas'),
        'tipo_auto'=>$this->input->post('tipoAuto'),
        'capacidad'=>$this->input->post('capacidad'),
        'combustible'=>$this->input->post('combustible'));
           if($actualizar == '1'){ 
                $this->automovil_model->update($dato);
                echo '<script language="javascript">alert("Automovil actualizado exitosamente");</script>';
            } else if ($insertar == '2') {
                $this->automovil_model->insert($dato);
                echo '<script language="javascript">alert("Automovil agregado exitosamente");</script>';
            }
            redirect(base_url().'Automovil', 'refresh');
    }
    public function eliminar()
    {
        $id = $this->input->post('eliminar');
        $this->automovil_model->delete($id);
        echo '<script language="javascript">alert("Automovil eliminado exitosamente");</script>';
        redirect(base_url().'Automovil', 'refresh');
    }
}
