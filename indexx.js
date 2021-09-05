$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'cargarProvincias.php',
   
  })
  .done(function(listas_rep){
    $('#provinciasUs').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar ListaMateria')
  })

  $('#provinciasUs').on('change', function(){
    var id = $('#provinciasUs').val()
    $.ajax({
      type: 'POST',
      url: 'cargarCantones.php',
      data: {'id': id}
    })
	  
	  
	  
	  
    .done(function(listas_rep){
      $('#cantones').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar cargarFamilia')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#materia option:selected').text() +
    ' Video elegido: ' + $('#materia1 option:selected').text()

    $('#resultado1').html(resultado)
  })

})