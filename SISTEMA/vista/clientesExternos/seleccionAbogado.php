 <html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Sistema de Mediación</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plantilla/plugins/fontawesome-free/css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../plantilla/dist/css/adminlte.min.css">
</head>
<body class="register-page" style="min-height: 542px;">
    <form action="../../controlador/registroPersonaJuridica.php" method="post">
        <div class="register-box">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h4">
                   <a href="#" class="" data-toggle="">
          <img src="../../img/logos/logoIni.png" class="" alt="Imagen de usuario" _mstalt="2">
			
          
        </a>
                  <b><br>
                      CENTRO DE MEDIACION</b></a>
            </div>
            <div class="card-body">
                        <div class="row">
                         <div class="col-12">
                            <select class="form-control" id="seleccionMul"name="seleccionMul"required>>
                                  <option value="Seleccione una Opcion">Seleccione una Opcion</option>
                                <option value="PERSONA NATURAL">PERSONA NATURAL</option>
                                <option value="PERSONA JURIDICA">PERSONA JURIDICA</option>
                                <option value="ABOGADO">ABOGADO</option>

                            </select>
                             <?php
                             
                             ?>
                                 </div> 
                      </div>
                  </div>

                  <!-- /.col -->
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
                  </div>
                  <!-- /.col -->
            </div>
            </div>
      </form>
    </body>
</html>

<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../plantilla/dist/js/adminlte.min.js"></script>

