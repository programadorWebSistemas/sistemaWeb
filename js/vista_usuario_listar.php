<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("../EntrarAlSistemaContraseñaMed.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Mediacion | Panel de Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plantilla/plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plantilla/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plantilla/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../plantilla/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plantilla/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li>
		 <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../Sistema_tramite/index.php" class="nav-link">Sistema Documentario</a>
      </li>
    </ul>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../administradores/cerrarsession.php" class="nav-link">Cerrar Sesion</a>
      </li>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
       
      </li>
     
      
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../img/logos/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de Mediacion</span>
    </a>
	  
	  
	  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
		 <!-- Sidebar -->
    <div class="sidebar">
		
		<!-- Sesion usuario -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../img/usuarios/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
			 <a href="#" class="d-block"><h6>Bienvenido: <?php echo $_SESSION['usu'] ?></h6></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="../../vista/index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de Control
              </p>
            </a>
           
          <li class="nav-item">
			 
            <a href="" class="nav-link">
				
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Usuarios
              </p>
            </a>
            
          </li>
			
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
			
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Empresa
              </p>
            </a>
          <li class="nav-item">
            <a href="../solicitudMediacion/solicitud_mediacion_llenar.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Solicitud de Mediacion
              </p>
            </a>
              </li>
		  </ul>
		</nav>
		</div>
	  </div>
	</aside>
	</div>
	
	
	
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
		<div class="row" id="contenido_principal">
		<div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title" _msthash="2764749" _msttexthash="112515">Control Usuario</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" _msthash="2392117" _msttexthash="415961"> USUARIO </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	  </section>
	</div>
	</body>
</html>


    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="">Sistema de Mediacion Pasaje 2021</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

	




<!-- ./wrapper -->

<!-- jQuery -->
		<script src="../../plantilla/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="../../plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="../../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="../../plantilla/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="../../plantilla/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="../../plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="../../plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="../../plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="../../plantilla/plugins/moment/moment.min.js"></script>
		<script src="../../plantilla/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="../../plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="../../plantilla/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="../../plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../../plantilla/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="../../plantilla/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="../../plantilla/dist/js/pages/dashboard.js"></script>
			  
			  <script>
			  function cargar_contenido(contenedor,contenido){
			  $("#"+contenedor).load(contenido);
			  }
			  
			  </script>
	
	
	
         
    
 

		
		
 

