$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: './cargarNumeroExpediente.php.php',
     
    })
    .done(function(listas_rep){
      $('#numeroEpxSolicitud').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar ListaMateria')
    })
  
    $('#numeroEpxSolicitud').on('change', function(){
      var id = $('#numeroEpxSolicitud').val()
    })
  
    $('#enviar').on('click', function(){
      var resultado = 'Lista de reproducción: ' + $('#materia option:selected').text() +
      ' Video elegido: ' + $('#materia1 option:selected').text()
  
      $('#resultado1').html(resultado)
    })
  
  })