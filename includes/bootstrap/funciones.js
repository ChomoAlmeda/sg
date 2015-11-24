$('#Fecha').datepicker({dateFormat: "yy-mm-dd"});
$('#FechaD').datepicker({dateFormat: "yy-mm-dd"});

$('#buscar').datepicker({dateFormat: "yy-mm-dd"});
$('#buscarD').datepicker({dateFormat: "yy-mm-dd"});

  

  $(function() {
    var availableTags = [
     	"Para su conocimiento", 
     	"Para certificacion", 
     	"Para firma", 
     	"Para tramite", 
     	"Invitacion"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });

  $('#docTable').hide();

  $('#modificar').click(function(){
    $('#docTable').show();
    return false
  });

