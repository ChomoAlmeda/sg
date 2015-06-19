<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretaria extends CI_Controller {
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
   	public function principal(){
		$hoy = date('Y-m-d');
		if($_POST){

		}else{
			$manana = date('Y-m-d', strtotime($hoy . ' + 1 day'));		
			$datos['agenda'] = $this->Consulta_model->agenda($hoy);
			$datos['manana'] = $this->Consulta_model->manana($manana);
			$datos['bread']	= 1;
			$this->load->view('estructura/head', $datos);
			$this->load->view('secretaria/principal', $datos);
			$this->load->view('estructura/foot');
		}
	}
	//captura() se utiliza para mostrar la seccion de capturas
	

	public function buscar(){
		$datos['bread']	= 2;
		$buscar = $this->input->post('buscar');
		$datos['consulta'] = $this->Inicio_model->buscar($buscar);
		$this->load->view('estructura/head', $datos);
		$this->load->view('secretaria/buscar', $datos);
		$this->load->view('estructura/foot');
	}
}