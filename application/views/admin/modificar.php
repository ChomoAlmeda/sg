<?php
	if($consulta -> num_rows() > 0){
		foreach($consulta -> result() as $row){
			$id = array(
				'name' => 'Id', 
				'id'	=> 'Id', 
				'type' => 'hidden',
				'class'	=> 'form-control', 
				'value'  => $row->IdDocumentos
					);
			$hora = array(
				'name' => 'Hora', 
				'id'	=> 'Hora', 
				'class'	=> 'form-control', 
				'value'  => $row->Hora
					);
			$fechaD = array(
					'name' => 'FechaD', 
					'id'	=> 'FechaD', 
					'class'	=> 'form-control',
					'value'  => $row->Fecha
				);

			$tramite = array(
					'name' => 'Tramite', 
					'id'	=> 'tags', 
					'class'	=> 'form-control',
					'value'  => $row->Tramite
				);

			$observacion = array(
					'name' => 'Observacion', 
					'id'	=> 'Observacion', 
					'class' => 'form-control',
					'value'  => $row->Observacion
				);
			$quien = array(
					'name'	=> 'Quien', 
					'id'	=> 'Quien', 
					'class'	=> 'form-control', 
					'value'  => $row->Quien
				);
			$area = array(
					'name'	=> 'Area', 
					'id'	=> 'Area', 
					'class'	=> 'form-control', 
					'value'  => $row->Area
				);
			$folio = array(
					'name'	=> 'Folio', 
					'id'	=> 'Folio', 
					'class'	=> 'form-control', 
					'value'  => $row->Folio
				);
			$doc = array(
					'name'	=> 'Doc', 
					'id'	=> 'Doc',
					'value'	=> $row->Doc,
					'type' 	=> 'input'
				);
			$botonD = array(
					'id' => 'boton', 
					'name' => 'boton', 
					'type' => 'submit', 
					'value' => 'Modificar', 
					'class' => 'btn btn-success'
				);


			?>
			<div class="row">
	        	<div class="col-md-12">
	        		<?=form_open_multipart()?>
	        		<center><h3>Documentos en tramite </h3></center>

	        		<div class="formulario">
		        		<table class="table table-bordered">
		        			<tr><th>Folio:</th><td><?=form_input($folio)?></td></tr>
		        			<tr><th>Hora:</th><td><?=form_input($hora)?></td></tr>

		        			<tr><th>Fecha:</th><td><?=form_input($fechaD)?></td></tr>
		        			<tr><th>Tramite:</th><td><?=form_input($tramite)?></td></tr>
		        			<tr><th>Observacion:</th><td><?=form_input($observacion)?></td></tr>
		        			<tr>
		        				<th>Area: </th>
		        				<td>
		        					<?=form_input($area)?>
		        				</td>
		        			</tr>
		        			<tr>
		        				<th>Quien envia:</th>
		        				<td><?=form_input($quien)?></td>
		        			</tr>
		        			<tr>
		        				<th>Documento</th>
		        				<td><a href="<?=base_url()?>includes/docs/<?=$row->Doc?>" target="_blank">Ver</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="modificar">Modificar</a></td>
		        			</tr>
		        			<tr id="docTable">
		        				<th colspan="2">
		        					<center>Archivo nuevo</center>
		        				</th>
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

		<?}
	}
?>