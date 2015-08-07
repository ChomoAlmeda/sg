<?php
//campos para la busqueda de eventos
	$buscar = array(
			'placeholder'	=> 'Seleccionar Fecha',
			'id'			=> 'buscar', 
			'name'			=> 'buscar',
			'class'			=> 'form-control'
		);

	$botonB = array(
			'type'	=> 'submit', 
			'class'	=> 'btn btn-success',
			'id'	=> 'botonB', 
			'value'	=> 'Buscar'
		);
//campos para la busqueda de Documentos

	$buscarD = array(
		'placeholder'	=> 'Seleccionar Fecha',
		'id'			=> 'buscarD', 
		'name'			=> 'buscarD',
		'class'			=> 'form-control'
	);

	$botonBD = array(
		'type'	=> 'submit', 
		'class'	=> 'btn btn-success',
		'id'	=> 'botonBD', 
		'value'	=> 'Buscar'
		);
//Campos para agregar eventos a la agenda
	$evento = array(
			'id' => 'Evento', 
			'name' => 'Evento', 
			'type' => 'text', 
			'class' => 'form-control'
		);
	$lugar = array(
			'id' => 'Lugar', 
			'name' => 'Lugar', 
			'type' => 'text', 
			'class' => 'form-control'
		);
	$fecha = array(
			'id' => 'Fecha', 
			'name' => 'Fecha', 
			'type' => 'text', 
			'class' => 'form-control'
		);
	$hora = array(
			'id' => 'Hora', 
			'name' => 'Hora', 
			'type' => 'text', 
			'class' => 'form-control'
		);
	$boton = array(
			'id' => 'boton', 
			'name' => 'boton', 
			'type' => 'submit', 
			'value' => 'Agendar', 
			'class' => 'btn btn-success'
		);
//Campos para agregar documentos en tramite
	$hora = array(
			'name' => 'Hora', 
			'id'	=> 'Hora', 
			'class'	=> 'form-control', 
		);
	$fechaD = array(
			'name' => 'FechaD', 
			'id'	=> 'FechaD', 
			'class'	=> 'form-control', 
		);

	$tramite = array(
			'name' => 'Tramite', 
			'id'	=> 'tags', 
			'class'	=> 'form-control'
		);

	$observacion = array(
			'name' => 'Observacion', 
			'id'	=> 'Observacion', 
			'class' => 'form-control'
		);
	$quien = array(
			'name'	=> 'Quien', 
			'id'	=> 'Quien', 
			'class'	=> 'form-control'
		);
	$doc = array(
			'name'	=> 'Doc', 
			'id'	=> 'Doc',
			'value'	=> set_value('Doc'),
			'type' 	=> 'file'
		);
	$botonD = array(
			'id' => 'boton', 
			'name' => 'boton', 
			'type' => 'submit', 
			'value' => 'Agregar', 
			'class' => 'btn btn-success'
		);
	
?>
	
	<div class="row">
		<section class="left">
			<h4>Bienvenido: <?=$usuario?></h4>
		</section>
	</div>
	<div class="row">
		<section class="boxFlex rowN">
			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime excepturi voluptates natus tenetur animi recusandae in harum reiciendis vero voluptatem, blanditiis tempora. Laudantium facere totam culpa dolorum nihil molestiae dignissimos!</article>
			<article>Alias magni ad praesentium qui inventore dicta, sit quaerat nulla eveniet! Unde praesentium ipsam dolorem impedit, dolore vitae quisquam laborum, voluptatem itaque in, enim magnam perspiciatis asperiores. Eum, officiis, necessitatibus.</article>
		</section>
	</div>
		<table class="table table-bordered">
			<tr>
				<th colspan="4">
					<center>
						<h1>Agenda del Dia</h1>
					</center>
				</th>
			</tr>
			<?
				if($agenda->num_rows() > 0){
					echo "<tr><th>Fecha</th><th>Evento</th><th>Hora</th><th>Lugar</th></tr>";
					foreach($agenda->result() as $row){
						echo "<tr><td>".$row->Fecha."</td><td>".$row->Evento."</td><td>".$row->Hora."</td><td>".$row->Lugar."</td></tr>";
					}
				}else{
					echo "<tr><th colspan='4'><center>No hay Ningun Evento para el dia de hoy</center></th></tr>";
				}
			?>
		</table>
	</div>
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<th colspan="4">
					<center>
						<h1>Agenda de Mañana</h1>
					</center>
				</th>
			</tr>
			<? 
				if($manana->num_rows() > 0){
					echo "<tr><th>Fecha</th><th>Evento</th><th>Hora</th><th>Lugar</th></tr>";
					foreach($manana->result() as $row){
						echo "<tr><td>".$row->Fecha."</td><td>".$row->Evento."</td><td>".$row->Hora."</td><td>".$row->Lugar."</td></tr>";
					}
				}else{
					echo "<tr><th colspan='4'><center>No hay Ningun Evento para el dia de hoy</center></th></tr>";
				}
			?>
		</table>
	</div>

	


