$('#agregar').click(function(){
   $( ".formulario" ).toggleClass( "mostrar" );
});
$('#Fecha').datepicker({dateFormat: "yy-mm-dd"});

$('#buscar').datepicker({dateFormat: "yy-mm-dd"});

$('#imprimir').click(function (){
	window.print();
});

  




