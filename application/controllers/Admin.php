<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();

	}

	public function principal(){
		$hoy = date('Y-m-d');
		$manana = date('Y-m-d', strtotime($hoy . ' + 1 day'));	
		
		$datos['areas'] = $this->Consulta_model->areas();
		$datos['agenda'] = $this->Consulta_model->agenda($hoy);
		$datos['manana'] = $this->Consulta_model->manana($manana);
		$datos['documentos']	= $this->Consulta_model->documentos();
		$datos['bread']	= 11;
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/principal', $datos);
		$this->load->view('estructura/foot');
	}

	public function agenda(){
		$datos['tipo'] = $this->session->userdata('tipo');
	
			$fecha     = $this->input->post('Fecha');
			$hora      = $this->input->post('Hora');
			$evento    = $this->input->post('Evento');
			$lugar     = $this->input->post('Lugar');
			$evidencia = $this->input->post('Evidencia');
			
			
			$nom_doc =substr(md5(uniqid(rand())),0,6);
			$config['file_name'] = $nom_doc;
			$config['upload_path'] = './includes/docs/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '10000';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('Evidencia')){
				echo $this->upload->display_errors('<p>', '</p>');
			}

			$upload_data = $this->upload->data();
			$nom_doc = $nom_doc.$upload_data['file_ext'];
			echo $nom_doc;

		$this->Consulta_model->agregar_agenda($evento, $lugar, $fecha, $hora, $nom_doc);
		$datos['direccion'] = 'Admin/principal';
		$this->load->view('redirect', $datos);
	}

	public function agregarD(){
		$area = $this->input->post('Area');
		$folio = $this->input->post('Folio');
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

		$this->Consulta_model->agregarD($area, $folio, $hora, $fechaD, $tramite, $observacion, $quien, $nom_doc);
		$datos['direccion'] = 'Admin/principal';
		$this->load->view('redirect', $datos);
	}

	public function buscarD(){
		$datos['bread']	= 13;
		$buscar = $this->input->post('buscarD');
		$datos['consulta'] = $this->Inicio_model->buscarD($buscar);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscarD', $datos);
		$this->load->view('estructura/foot');
	}

	public function buscar(){
		$datos['bread']	= 13;
		$buscar = $this->input->post('buscar');
		$datos['consulta'] = $this->Inicio_model->buscarA($buscar);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscar', $datos);
		$this->load->view('estructura/foot');
	}

	public function buscarFolio(){
		$datos['bread']	= 13;
		$buscarFolio = $this->input->post('buscarFolio');
		$datos['consulta'] = $this->Inicio_model->buscarFolio($buscarFolio);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscarFolio', $datos);
		$this->load->view('estructura/foot');
	}

	public function buscarArea(){
		$datos['bread']	= 13;
		$buscarArea = $this->input->post('buscarArea');
		$datos['consulta'] = $this->Inicio_model->buscarArea($buscarArea);
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscarArea', $datos);
		$this->load->view('estructura/foot');
	}

	public function modificar($id){
		$datos['bread']	= 13;
		$datos['consulta'] = $this->Inicio_model->buscarModificar($id);
		$datos['areas'] = $this->Consulta_model->areas();
		if($_POST){
			$hora = $this->input->post('Hora');
			$folio = $this->input->post('Folio');
			$fechaD = $this->input->post('FechaD');
			$tramite = $this->input->post('Tramite');
			$observacion = $this->input->post('Observacion');
			$area = $this->input->post('Area');
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
				echo $nom_doc.$id;
			$this->Consulta_model->modificarDoc($id, $folio, $hora, $fechaD, $tramite, $observacion,$area, $quien, $nom_doc);
			$datos['direccion'] = 'Admin/principal';
			$this->load->view('redirect', $datos);
		}else{
			$this->load->view('estructura/head', $datos);
			$this->load->view('admin/modificar', $datos);
			$this->load->view('estructura/foot');
		}
	}


	public function borrar($id){
		$this->Consulta_model->borrar($id);
		$datos['direccion'] = 'Admin/principal';
		$this->load->view('redirect', $datos);
	}
}