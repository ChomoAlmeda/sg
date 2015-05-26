<?php
	if($usuarios->num_rows() > 0){

?>
<div class="row">
	<nav class="navbar navbar-default" id="navUsuario">
	    <div class="navbar-header">
	         <a class="navbar-brand" href="<?=base_url()?>index.php/inicio/principal/<?=$usuario?>">Requisiciones de Almacen</a>
	    </div>
	    <div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">            
			<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Requisiciones <span class="caret"></span></a>
			    <ul class="dropdown-menu" role="menu">
				
			    	<li><a href="<?=base_url()?>index.php/requisiciones/nueva" id="generarnueva">Generar Nueva</a></li>
				</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Datos de Usuario <span class="caret"></span></a>
		    <ul class="dropdown-menu" role="menu">
		        <li><a href="#">Revisar</a></li>
		        <li><a href="#">Cambiar</a></li>
	        </ul>
	        </li>
	        <?php
	           	if($tipo == 3){?>
	        <li class="dropdown">
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Revisar Requisicion de:<span class="caret"></span></a>
	         <ul class="dropdown-menu" role="menu">
		    
	           		<?foreach($usuarios->result() as $lista){?>
		           		<li><a href="<?=base_url()?>index.php/admin/revisar/<?=$lista->IdUsuario?>"><?=$lista->Nombre?></a></li>
	        <?	}
	        	}?>
	    	</ul>
	       
        </ul>
        </div>

        <!--/.nav-collapse -->
			      
	</nav>
</div>
<?}?>