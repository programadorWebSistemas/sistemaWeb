
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de Sesion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/plugins/fontawesome-free/css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../SISTEMA/plantilla/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Inicio de Sesion</b>Sistema de Mediacion</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus datos para iniciar sesion</p>

      <form action="../controlador/controlValidarAbogado.php" method="get">
		  
		  <div class="input-group mb-3">
          <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Ingrese el numero de Cedula"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		  
		  
        <div class="input-group mb-3">
          <input type="email" id="correo" name="correo" class="form-control" placeholder="Email"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="clave" name="clave" class="form-control" placeholder="Password"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">Olvide mi contaseña</a>
      </p>
     
		<p class="mb-0">
        <a href="../../../index.php" class="text-center">Volver al Inicio</a>
		  
      </p>
    </div>
    <!-- validar usuario-->
	  
	  
	  
	  
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../SISTEMA/plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../SISTEMA/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../SISTEMA/plantilla/dist/js/adminlte.min.js"></script>
</body>
</html>
