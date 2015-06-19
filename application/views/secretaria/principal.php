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
?>

<div class="row">
	<div class="col-sm-12">
		<?=form_open('Secretaria/buscar')?>
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
</div>
<div class="row">
	<div class="col-sm-12">
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
</div>