<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();

	}

	public function principal(){
		$hoy = date('Y-m-d');
		$manana = date('Y-m-d', strtotime($hoy . ' + 1 day'));	
		
		$datos['agenda'] = $this->Consulta_model->agenda($hoy);
		$datos['manana'] = $this->Consulta_model->manana($manana);
		$datos['docs']	= $this->Consulta_model->documentos();
		$datos['bread']	= 11;
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/principal', $datos);
		$this->load->view('estructura/foot');
	}

	public function captura()
	{
		$hoy = date('Y-m-d');
		if($_POST){
			$evento = $this->input->post('Evento');
			$lugar	= $this->input->post('Lugar');
			$fecha	= $this->input->post('Fecha');
			$hora	= $this->input->post('Hora');
			$this->Consulta_model->agregar_agenda($evento, $lugar,$fecha, $hora);
		}
		$manana = date('Y-m-d', strtotime($hoy . ' + 1 day'));
		echo $manana;
		$datos['bread'] = 12;
		$datos['agenda'] = $this->Consulta_model->agenda($hoy);
		$datos['manana'] = $this->Consulta_model->manana($manana);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/principal', $datos);
		$this->load->view('estructura/foot');
	}

	public function buscar(){
		$datos['bread']	= 13;
		$buscar = $this->input->post('buscar');
		$datos['consulta'] = $this->Inicio_model->buscar($buscar);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscar', $datos);
		$this->load->view('estructura/foot');
	}
}