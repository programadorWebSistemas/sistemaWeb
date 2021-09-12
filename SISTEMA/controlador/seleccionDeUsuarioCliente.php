 <html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Sistema de Mediación</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/plugins/fontawesome-free/css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/dist/css/adminlte.min.css">
</head>
<body class="register-page" style="min-height: 542px;">
   
        <div class="register-box">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h4">
                   <a href="#" class="" data-toggle="">
          <img src="../../SISTEMA/img/logos/logoIni.png" class="" alt="Imagen de usuario" _mstalt="2">
			
          
        </a>
        <b><br>CENTRO DE MEDIACION</b></a>
                 <h6 aling="center">Selecciona un elemento de la lista</h6>
            </div>
             
               <form action="controlSeleccionDeUsuarioCliente.php" method="post">
            <div class="card-body">
                        <div class="row">
                         <div class="col-12">
                            <select class="form-control" id="seleccionMul"name="seleccionMul"placeholder="Selecciona un elemento de la lista"required>
                                  <option  value=""></option>
                                <option value="natural">PERSONA NATURAL</option>
                                <option value="juridica">PERSONA JURIDICA</option>
                                <option value="abogado">ABOGADO</option>

                            </select>
                            
                                 </div> 
                      </div>
                  </div>

                  <!-- /.col -->
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block" name="enviar" value="enviar">Enviar</button>
                  </div>
                  <!-- /.col -->
              </form>
                   </div>
              
            </div>
    
    </body>
</html>

<!-- /.register-box -->

<!-- jQuery -->
<script src="../../SISTEMA/plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../SISTEMA/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../SISTEMA/plantilla/dist/js/adminlte.min.js"></script>

