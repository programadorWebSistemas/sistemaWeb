$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controlCargaSelect/cargarProvinciasIn.php',
   
  })
  .done(function(listas_rep){
    $('#provinciasIn').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar provIn')
  })

  $('#provinciasIn').on('change', function(){
    var id = $('#provinciasIn').val()
    $.ajax({
      type: 'POST',
      url: '../controlCargaSelect/cargarCantonesIn.php',
      data: {'id': id}
    })
	  
	  
	  
	  
    .done(function(listas_rep){
      $('#cantonesIn').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar cantonesIn')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#materia option:selected').text() +
    ' Video elegido: ' + $('#materia1 option:selected').text()

    $('#resultado1').html(resultado)
  })

}) 

