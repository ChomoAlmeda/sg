$(function() {
    var availableTags = [
      "GASTRO INTESTINALES", 
      "RESPIRATORIAS", 
      "CARDIOPATIAS Y/O DIABETES", 
      "TIROIDEA", 
      "HIPERTENSION", 
      "VARICOSAS", 
      "HEMORROIDES"
    ];
    $( "#eFrecuentes" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "PASTILLAS", 
      "INYECCION", 
      "DISPOSITIVO DIU", 
      "OPERACION", 
      "PRESERVATIVO"
    ];
    $( "#mPlanificacion" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "MOTRIZ", 
      "COGNITIVA",
      "LENGUAJE", 
      "ESFINTERES (niños mayores de 5)",
      "AUDITIVA"
    ];
    $( "#tipoDisc" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "INCINERACION", 
      "SE ENTIERRA",
      "RECOLECTOR", 
      "SE ARROJA AL RIO"
    ];
    $( "#basura" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "CATOLICA", 
      "CRISTIANA",
      "TESTIGOS DE JEHOVA", 
    ];
    $( "#religion" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "REVISTAS / PERIODICOS", 
      "LIBROS ESCOLARES",
      "AUTO AYUDA"
    ];
    $( "#tipoL" ).autocomplete({
      source: availableTags
   });
});

$(function() {
    var availableTags = [
      "PORQUE NO SE ACOSTUMBRA EN CASA", 
      "POR RELIGION",
      "POR MIEDO A TENER UN PROBLEMA", 
      "PORQUE NO LE LLAMA LA ATENCIÓN"
    ];
    $( "#bebidasRazon" ).autocomplete({
      source: availableTags
   });
});


$('#tabacoA').click(function(){
  $('#adiccionesTr').show();
});

$('#tabacoB').click(function(){
  $('#adiccionesTr').hide();
});

$('#bebidasA').click(function(){
  $('#bebidasTr').show();
});

$('#bebidasB').click(function(){
  $('#bebidasTr').hide();
});

$('#sustanciasA').click(function(){
  $('#sustanciasTr').show();
});

$('#sustanciasB').click(function(){
  $('#sustanciasTr').hide();
});

$('#discapacidadS').click(function(){
  $('#discapacidadTr').show();
});

$('#discapacidadN').click(function(){
  $('#discapacidadTr').hide();
});

$('#fiestasA').click(function(){
  $('#fiestasTr').show();
});

$('#fiestasB').click(function(){
  $('#fiestasTr').hide();
});

$('#lecturaA').click(function(){
  $('#lecturaTr').show();
});

$('#lecturaB').click(function(){
  $('#lecturaTr').hide();
});

$(function() {
    var availableTags = [
      "AMIGOS", 
      "PADRES, FAMILIARES",
      "PROFESORES"
    ];
    $( "#conocimientoD" ).autocomplete({
      source: availableTags
   });
});


