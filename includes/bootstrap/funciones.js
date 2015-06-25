$('#agregar').click(function(){
   $( ".formulario" ).toggleClass( "mostrar" );
   return false;
});

$('#agregarDocs').click(function(){
   $( ".formularioDocs" ).toggleClass( "mostrarDocs" );
   return false;
});

$('#Fecha').datepicker({dateFormat: "yy-mm-dd"});

$('#buscar').datepicker({dateFormat: "yy-mm-dd"});

$('#imprimir').click(function (){
	window.print();
});


  




