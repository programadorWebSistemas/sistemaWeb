$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controlCargaSelect/cargarListaMateria.php',
   
  })
  .done(function(listas_rep){
    $('#materia').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar ListaMateria')
  })

  $('#materia').on('change', function(){
    var id = $('#materia').val()
    $.ajax({
      type: 'POST',
      url: '../controlCargaSelect/cargarFamilia.php',
      data: {'id': id}
    })
	  
	  
	  
	  
    .done(function(listas_rep){
      $('#materia1').html(listas_rep)
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