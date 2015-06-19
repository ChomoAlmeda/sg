<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>| Secretaria General UJED |</title>
	    <!-- Bootstrap -->
	    <link href="<?=base_url()?>includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	    <link href="<?=base_url()?>includes/bootstrap/css/estilo.css" rel="stylesheet">
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
<body>
	<div class="container">
		<br>
		<div class="row-fluid">
			<div class="jumbotron">
				<h1>Secretaria General</h1>
			</div>
		</div>
<div class="row">
	<div class="col-sm-12">
		<ul class="breadcrumb">
			<?
				switch ($bread) {
					case 1:?>
						<li><a href="<?=base_url()?>index.php/Secretaria/principal/">Inicio</a></li>	
				  <?break;
					case 2:?>
						<li><a href="<?=base_url()?>index.php/Secretaria/principal/">Inicio</a> <span class="divider"> /</span> Buscar</li>
					<?break;
					case 21:?>
						<li><a href="<?=base_url()?>index.php/Consulta/inicio/">Inicio</a></li>	
					<?break;
				}
			?>
		
	      
	    </ul>
	</div>
</div>