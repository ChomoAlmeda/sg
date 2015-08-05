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
	<!--<div class="row">
	    <div class="formulario" >
			<?=form_open('Admin/captura')?>
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
	</div>!-->
	<!--<div class="row">
		<?=form_open('Admin/buscar')?>
			<table class="table table-bordered">
				<tr>
					<th colspan='2'><?=form_input($buscar)?></th><td><center><?=form_input($botonB)?></center></td>
				</tr>
			</table>
		<?=form_close()?>
	</div>!-->
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

	<!--
	    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
	    	<div class="row">
	        	<div class="col-md-12">
	        		<?=form_open_multipart('Admin/agregarD')?>
	        		<center><h3>Documentos en tramite </h3></center>

	        		<div class="formulario">
		        		<table class="table table-bordered">
		        			<tr><th>Hora:</th><td><?=form_input($hora)?></td></tr>
		        			<tr><th>Fecha:</th><td><?=form_input($fechaD)?></td></tr>
		        			<tr><th>Tramite:</th><td><?=form_input($tramite)?></td></tr>
		        			<tr><th>Observacion:</th><td><?=form_input($observacion)?></td></tr>
		        			<tr><th>Quien envia:</th><td><select name="Quien" class="form-control"><?

		        										if($areas -> num_rows() > 0){
																
															foreach($areas ->result() as $row){
																	echo "<option value=".$row->IdArea.">".$row->Area."</option>";
																}
															
														}?>
		        										</select></td>
		        			</tr>
		        			<tr>
								<th>Documento:</th>
								<td><?=form_upload($doc)?></td>
							</tr>
		        			<tr>
		        				<th colspan="2">
		        					<center><?=form_input($botonD)?></center>
		        				</th>
		        			</tr>
		        		</table>
	        		</div>
					<?=form_close()?>
	        	</div>
	        </div>
	    	<div class="row">
	    		<div class="col-sm-12">
						<?=form_open('Admin/buscarD')?>
							<table class="table table-bordered">
								<tr>
									<th colspan='2'><?=form_input($buscarD)?></th><td><center><?=form_input($botonBD)?></center></td>
								</tr>
							</table>
						<?=form_close()?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered">
						<tr>
							<th></th><th>Hora</th><th>Fecha</th><th>Area</th><th>Tramite</th><th>Observacion</th>
						</tr>
						<?php
							if($documentos -> num_rows() > 0){
								foreach($documentos -> result() as $row){
									echo "<tr><td><a href='".base_url()."includes/docs/".$row->Doc."' target = '_self'><span class='glyphicon glyphicon-eye-open'></span></a></td><td>".$row->Hora."</td><td>".$row->Fecha."</td><td>".$row->Area."</td><td>".$row->Tramite."</td><td>".$row->Observacion."</td></tr>";
								}
							}
						?>
						<tr></tr>
					</table>
				</div>
			</div>
			
	    </div>
	</div>
  


