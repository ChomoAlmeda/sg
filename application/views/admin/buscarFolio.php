<?php
	if($consulta->num_rows() > 0){?>
		<table class="table table-bordered">
			<tr>
				<th colspan="4">
					<center>
						<h1>Resultados de la Busqueda</h1>
					</center>
				</th>
			</tr>
				<? 
					
						echo "<tr><th>Fecha</th><th>Evento</th><th>Hora</th><th>Lugar</th></tr>";
						foreach($consulta->result() as $row){
							echo "<tr><td>".$row->Fecha."</td><td>".$row->Evento."</td><td>".$row->Hora."</td><td>".$row->Lugar."</td></tr>";
				}

				
				?>

		</table>
		<center><a href="<?base_url()?>imprimir/agenda" class="btn btn-success">Version para Imprimir</a></center>
		
	<?}else{
		echo "<h1>No hay datos</h1>";
	}
?>