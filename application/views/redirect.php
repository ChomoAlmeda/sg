<?php
	if(empty($alerta)){
		$ruta = "<script>location.href='".base_url() ."index.php/".$direccion."';</script>";
 		echo $ruta;
	}else{
		echo $alerta;
		$ruta = "<script>location.href='".base_url() ."index.php/".$direccion."';</script>";
 		echo $ruta;
	}
	
?>