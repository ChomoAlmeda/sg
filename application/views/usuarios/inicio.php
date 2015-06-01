<?php
	$nombre = array(
		'id' 	=> 'Nombre', 
		'name' 	=> 'Nombre',
		'type' 	=> 'text', 
		'class' => "form-control"
		);

	$contra = array(
		'id' 	=> 'Contra', 
		'name' 	=> 'Contra',
		'type' 	=> 'password', 
		'class' => "form-control"
		);
	$boton = array(
		'id'  	=> 'Boton', 
		'name'	=> 'Boton', 
		'type'	=> 'Submit', 
		'class'	=> 'btn btn-success', 
		'value' => 'Accesar'
		);
?>	
	<div class="center-block">
		<?=form_open()?>
		<table class="table table-bordered">
			<tr>
				<th colspan="2">Inicio de Sesion</th>
			</tr>
			<tr>
				<th>Nombre: </th><td><?=form_input($nombre)?></td>
			</tr>
			<tr>
				<th>Contraseña: </th><td><?=form_input($contra)?></td>
			</tr>
			<tr>
				<td colspan="2"><center><?=form_input($boton)?></center></td>
		</table>
		<?=form_close()?>
	</div>