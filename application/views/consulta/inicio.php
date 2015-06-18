<?php
	$buscar = array(
			'placeholder'	=> 'Seleccionar Fecha',
			'id'			=> 'buscar', 
			'name'			=> 'buscar',
			'class'			=> 'form-control'
		);

	$boton = array(
			'type'	=> 'submit', 
			'class'	=> 'btn btn-success',
			'id'	=> 'boton', 
			'value'	=> 'Buscar'
		);

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
?>

<div class="row">
	<div class="formulario" >
		<?=form_open('Consulta/captura')?>
		<table class="table table-bordered">
			<tr>
				<th colspan="2">
					<center>Agregar Evento</center>
				</th>
			</tr>
			<tr>
				<th>Nombre:</th>
				<td><?=form_input($evento)?></td>
			</tr>
			<tr>
				<th>Lugar:</th>
				<td><?=form_input($lugar)?></td>
			</tr>
			<tr>
				<th>Fecha:</th>
				<td><?=form_input($fecha)?></td>
			</tr>
			<tr>
				<th>Hora:</th>
				<td><?=form_input($hora)?></td>
			</tr>
			<tr>
				<th colspan='2'>
					<center><?=form_input($boton)?></center>
				</th>
			</tr>
		</table>
		<?=form_close()?>
	</div>
	<div class="col-sm-12">
		<?=form_open('Consulta/buscar')?>
		<table class="table table-bordered">
			<tr>
				<th colspan='2'><?=form_input($buscar)?></th><td><center><?=form_input($boton)?></center></td>
			</tr>
		</table>
		<?=form_close()?>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-bordered">
			<tr>
				<th colspan="4">
					<center>
						<h1>Agenda del Dia <a href="#" id="agregar"><span class="glyphicon glyphicon-plus"></span></a></h1>
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
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-bordered">
			<tr>
				<th colspan="4">
					<center>
						<h1>Agenda del Dia de Mañana</h1>
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
						echo "<tr><th colspan='4'><center>No hay Ningun Evento para el dia de Mañana</center></th></tr>";
					}
				?>
		</table>

	</div>
</div>