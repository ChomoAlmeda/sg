<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct() {
		parent::__construct();

	}
   	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

   	//index() pide usuario y contraseña para poder entrar al sistema
	public function index()
	{		
		if($_POST){
			$nombre = $this->input->post('Nombre');
			$contra = $this->input->post('Contra');
			$consulta = $this->Inicio_model->comprobar($nombre, $contra);
				if($consulta->num_rows() > 0){
					foreach($consulta->result() as $row){
						$usuario_data = array(
			               'id' => $row->IdUsuario,
			               'nombre' => $row->Nombre,
			               'tipo'	=> $row->Tipo,
			               'logueado' => TRUE
			            );
				        $this->session->set_userdata($usuario_data);
				        $a = $this->session->userdata('tipo');
					        switch($a){
					        	case 0:
					        		$datos['direccion'] = 'Consulta/inicio';
					        		$this->load->view('redirect', $datos);
					        	break;
					        	case 1: 
					        		$datos['direccion'] = 'Inicio/captura';
					        		$this->load->view('redirect', $datos);
					        }
			    	}
				}else{
					echo "No hay usuarios con esos datos";
				}
		}else{
			$this->load->view('estructura/head1');
			$this->load->view('usuarios/inicio');
			$this->load->view('estructura/foot1');
		}
	}
	//captura() se utiliza para mostrar la seccion de capturas
	public function captura()
	{
		$hoy = date('Y-m-d');
		if($_POST){
			$evento = $this->input->post('Evento');
			$lugar	= $this->input->post('Lugar');
			$fecha	= $this->input->post('Fecha');
			$hora	= $this->input->post('Hora');
			$this->Inicio_model->agregar_agenda($evento, $lugar,$fecha, $hora);
		}
		$manana = date('Y-m-d', strtotime($hoy . ' + 1 day'));		
		
		$datos['agenda'] = $this->Consulta_model->agenda($hoy);
		$datos['manana'] = $this->Consulta_model->manana($manana);
		$this->load->view('estructura/head');
		$this->load->view('usuarios/captura', $datos);
		$this->load->view('estructura/foot');
	}
}
