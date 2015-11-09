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
					'value'	=> set_value('Doc'),
					'type' 	=> 'file'
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
		        					<select name="Area" class="form-control" value='<?=$row->Area?>'>
		        						<? 
		        							if($areas -> num_rows() > 0){
		        								foreach($areas->result() as $area){
		        									echo "<option value='".$area->IdArea."'>".$area->Area."</option>";	
		        								}
		        							}else{
		        								echo "No hay valores";
		        							}
		        						?>
		        					</select>
		        				</td>
		        			</tr>
		        			<tr><th>Quien envia:</th><td><?=form_input($quien)?></td>
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

		<?}
	}
?>