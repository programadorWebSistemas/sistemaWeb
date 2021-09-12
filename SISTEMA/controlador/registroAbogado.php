

<html lang="en"><head>
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
      <a href="#" class="h1"><b>Registrate</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Nuevo Registro</p>

      <form action="controlIngresoAbogado.php" method="post">
        <div class="input-group mb-3">
          <input type="number" class="form-control"id="cedula" name="cedula" placeholder="Cedula de Identidad" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
		  <div class="input-group mb-3">
          <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula Nro"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nombresApellidos" name="nombresApellidos" placeholder="Nombres y Apellidos Completos"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
		  
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="correo" name="correo" placeholder="Email"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		  <div class="input-group mb-3">
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Numero Telefonico"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="clave1" name="clave1" placeholder="Repita la Contraseña"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registro</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="../controlador/inicioDeSesionAbogado.php" class="text-center">Ya tengo una Cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../SISTEMA/plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../SISTEMA/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../SISTEMA/plantilla/dist/js/adminlte.min.js"></script>


</body></html>