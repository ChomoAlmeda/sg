<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();

	}

	public function principal(){
	
		
		$datos['areas'] = $this->Consulta_model->areas();
		$datos['agenda'] = $this->Consulta_model->agenda($hoy);
		$datos['manana'] = $this->Consulta_model->manana($manana);
		$datos['documentos']	= $this->Consulta_model->documentos();
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
			$datos['direccion'] = "Admin/principal";
			$datos['alerta'] = "<script>alert('Evento Agendado');</script>";
			$this->load->view('redirect', $datos);
		}
		
	}
	public function agregarD(){
		$hora = $this->input->post('Hora');
		$fechaD = $this->input->post('FechaD');
		$tramite = $this->input->post('Tramite');
		$observacion = $this->input->post('Observacion');
		$quien = $this->input->post('Quien');
		$doc = $this->input->post('Doc');

			$nom_doc =substr(md5(uniqid(rand())),0,6);
			$config['file_name'] = $nom_doc;
			$config['upload_path'] = './includes/docs/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '10000';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('Doc')){
				echo $this->upload->display_errors('<p>', '</p>');
			}

			$upload_data = $this->upload->data();
			$nom_doc = $nom_doc.$upload_data['file_ext'];
			echo $nom_doc;

		$this->Consulta_model->agregarD($hora, $fechaD, $tramite, $observacion, $quien, $nom_doc);
		$datos['direccion'] = 'Admin/principal';
		$this->load->view('redirect', $datos);
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