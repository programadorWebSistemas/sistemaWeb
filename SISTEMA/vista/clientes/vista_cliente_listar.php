<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("EntrarAlSistemaContrase├▒aMed.php");
    die();
}
include ('../funcs/conexion.php');
$ced=$_SESSION['usu'];
$consulta="SELECT nombresApellidos,correo FROM registrodeusuario WHERE cedula='$ced'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($resultado>0){
while ($row=$resultado->fetch_array()){
$nombresApellidos=$row['nombresApellidos'];
$correo=$row['correo'];
}
}
include ('../../funcs/conexion.php');
    $usuarios="select * from registroclientes";


?>


<!DOCTYPE html>
<html lang="es">
	
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
  <link rel="stylesheet" href="../../../plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plantilla/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
			<div class="wrapper">

				
				<!-- css tabla -->
			
	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="../../../css/bootstrap.min.css">




	

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../../../js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../../../css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="../../../css/style.css">

				<link rel="stylesheet" href="../../../usuario/elegant-icons-style.css">
				
				
				
				
				  <!-- Preloader -->
				  <div class="preloader flex-column justify-content-center align-items-center">
					<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
				  </div>

				  <!-- MENU SUPERIOR  -->
				<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link" _msthash="783497" _msttexthash="59059">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" _msthash="783679" _msttexthash="114712">Contacto</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item" _msthidden="1">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block" _msthidden="1">
          <form class="form-inline" _msthidden="1">
            <div class="input-group input-group-sm" _msthidden="1">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" _msthidden="A" _msthiddenattr="1670279" _mstplaceholder="74607" _mstaria-label="74607">
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

      <!-- Messages Dropdown Menu alertas de mensajes  -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge" _msthash="1104376" _msttexthash="4641">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" _msthidden="13">
          <a href="#" class="dropdown-item" _msthidden="4">
            <!-- Message Start -->
            <div class="media" _msthidden="4">
              <img src="#" alt="User Avatar" class="img-size-50 mr-3 img-circle" _msthidden="A" _msthiddenattr="1476462" _mstalt="154167">
              <div class="media-body" _msthidden="3">
                <h3 class="dropdown-item-title" _msthidden="1"><font _mstmutation="1" _msthash="2028767" _msttexthash="148473" _msthidden="1">
                  Brad Diesel
                  </font><span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm" _msthash="1967277" _msttexthash="509925" _msthidden="1">Call me whenever you can...</p>
                <p class="text-sm text-muted" _msthidden="1"><i class="far fa-clock mr-1"></i><font _mstmutation="1" _msthash="1967394" _msttexthash="126035" _msthidden="1"> 4 Hours Ago</font></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
			
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" _msthidden="4">
            <!-- Message Start -->
            <div class="media" _msthidden="4">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" _msthidden="A" _msthiddenattr="1476904" _mstalt="154167">
              <div class="media-body" _msthidden="3">
                <h3 class="dropdown-item-title" _msthidden="1"><font _mstmutation="1" _msthash="2029443" _msttexthash="150696" _msthidden="1">
                  John Pierce
                  </font><span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm" _msthash="1967927" _msttexthash="390208" _msthidden="1">I got your message bro</p>
                <p class="text-sm text-muted" _msthidden="1"><i class="far fa-clock mr-1"></i><font _mstmutation="1" _msthash="1968044" _msttexthash="126035" _msthidden="1"> 4 Hours Ago</font></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" _msthidden="4">
            <!-- Message Start -->
            <div class="media" _msthidden="4">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" _msthidden="A" _msthiddenattr="1477346" _mstalt="154167">
              <div class="media-body" _msthidden="3">
                <h3 class="dropdown-item-title" _msthidden="1"><font _mstmutation="1" _msthash="2030119" _msttexthash="233610" _msthidden="1">
                  Nora Silvester
                  </font><span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm" _msthash="1968577" _msttexthash="383435" _msthidden="1">The subject goes here</p>
                <p class="text-sm text-muted" _msthidden="1"><i class="far fa-clock mr-1"></i><font _mstmutation="1" _msthash="1968694" _msttexthash="126035" _msthidden="1"> 4 Hours Ago</font></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" _msthash="1058473" _msttexthash="248742" _msthidden="1">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge" _msthash="1104922" _msttexthash="9971">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" _msthidden="8">
          <span class="dropdown-item dropdown-header" _msthash="1217229" _msttexthash="279942" _msthidden="1">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" _msthidden="2">
            <i class="fas fa-envelope mr-2"></i><font _mstmutation="1" _msthash="1058525" _msttexthash="204737" _msthidden="1"> 4 new messages
            </font><span class="float-right text-muted text-sm" _msthash="1425593" _msttexthash="59007" _msthidden="1">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" _msthidden="2">
            <i class="fas fa-users mr-2"></i><font _mstmutation="1" _msthash="1058759" _msttexthash="294593" _msthidden="1"> 8 friend requests
            </font><span class="float-right text-muted text-sm" _msthash="1426009" _msttexthash="90207" _msthidden="1">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" _msthidden="2">
            <i class="fas fa-file mr-2"></i><font _mstmutation="1" _msthash="1058993" _msttexthash="186329" _msthidden="1"> 3 new reports
            </font><span class="float-right text-muted text-sm" _msthash="1426425" _msttexthash="58474" _msthidden="1">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" _msthash="1059227" _msttexthash="411827" _msthidden="1">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="../../img/usuarios/admin.png" class="user-image img-circle elevation-2" alt="Imagen de usuario" _mstalt="290654">
			
          
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" _msthidden="8">
          <!-- User image -->
          <li class="user-header bg-primary" _msthidden="3">
            <img src="../../img/usuarios/admin.png" class="img-circle elevation-2" alt="User Image" _msthidden="A" _msthiddenattr="1155908" _mstalt="128609">
				<a href="#" class="d-block"><h6>Bienvenido: <?php echo $nombresApellidos?></h6></a> 
          </li>
          <!-- Menu Body -->
         
          <!-- Menu Footer-->
          <li class="user-footer" _msthidden="2">
            <a href="#" class="btn btn-default btn-flat" _msthash="1257347" _msttexthash="94315" _msthidden="1">Perfil</a>
            <a href="../../../administradores/cerrarsession.php" class="btn btn-default btn-flat float-right" _msthash="1257464" _msttexthash="98553" _msthidden="1">Cerrar Sesion</a>
          </li>
        </ul>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
				  <!-- /.MENU SUPERIOR  -->

				   <!-- Main Sidebar Container MENU LATERAL -->
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
							<!-- Sidebar user panel (optional) -->
							
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
								<a href="#" class="nav-link">
								  <i class="nav-icon fas fa-chart-pie"></i>
								  <p>
									USUARIO
									<i class="right fas fa-angle-left"></i>
								  </p>
								</a>
								<ul class="nav nav-treeview">
								  <li class="nav-item">
								  <a href="../../vista/usuario/vista_usuario_nuevo.php" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Nuevo Usuario</p>
									</a>
								  </li>
								  <li class="nav-item">
								  <a href="../../vista/usuario/vista_usuario_listar.php" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Lista Usuario</p>
									</a>
								  </li>
								</ul>
							  </li>
							  <li class="nav-item">
								<a href="#" class="nav-link">
								  <i class="nav-icon fas fa-chart-pie"></i>
								  <p>
									CLIENTE
									<i class="right fas fa-angle-left"></i>
								  </p>
								</a>
								<ul class="nav nav-treeview">
								  <li class="nav-item">
								  <a href="../clientes/vista_cliente_nuevo.php" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Nuevo Cliente</p>
									</a>
								  </li>
								  <li class="nav-item">
								  <a href="../clientes/vista_cliente_listar.php" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Lista Cliente</p>
									</a>
								  </li>
								</ul>
							  </li>

							   <li class="nav-item">
									<a href="#" class="nav-link">
											<!--icono de titulo -->
									  <i class="nav-icon fas fa-chart-pie"></i>
									  <p>
										SOLICITUD DE MEDIACION
										<i class="right fas fa-angle-left"></i>
									  </p>
									</a>
									<ul class="nav nav-treeview">
									  <li class="nav-item">
									  <a href="../../../solicitudDeMediacion.php" class="nav-link">
										  <i class="far fa-circle nav-icon"></i>
										  <p>Nueva Solicitud </p>
										</a>
									  </li>
									  <li class="nav-item">
									  <a href="../../vista/solicitudDeMediacion/solicitudDeMediacion_listar.php" class="nav-link">
										  <i class="far fa-circle nav-icon"></i>
										  <p>Lista Solicitud</p>
										</a>
									  </li>
										<li class="nav-item">
									  <a href="../../vista/solicitudDeMediacion/solicitudDeClientesScan.php" class="nav-link">
										  <i class="far fa-circle nav-icon"></i>
										  <p>Solicitudes Scaneadas</p>
										</a>
									  </li>
									</ul>
								</li>
							  </ul>
							</nav>
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
					

						
    <!--=============================================
	=            grid para presentar usuarios          =
	==============================================-->     
                            
                 <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
								<thead>
									<tr class="text-center roboto-medium">
										<th>ID</th>
										<th>CEDULA</th>
										<th>NOMBRES</th>
										<th>APELLIDOS</th>
										<th>CORREO</th>
										<th>TELEFONO</th>
										<th>ACTUALIZAR</th>
										<th>ELIMINAR</th>
									</tr>
								</thead>

								   <?php

										$resultado=mysqli_query($conexion,$usuarios);

									while($row=mysqli_fetch_assoc($resultado)){ ?>


								<tr class="text-center" >
										<td><?php echo $row["id"];?></td>
										<td><?php echo $row["cedula"];?></td>
										<td><?php echo $row["nombres"];?></td>
										<td><?php echo $row["apellidos"];?></td>
										<td><?php echo $row["correo"];?></td>
										<td><?php echo $row["telefono"];?></td>
									
									
									
									
									<td>
									<a href="#" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									
									
									<a href="../../controlador/eliminarRegistroCliente.php? cedula=<?php echo $row["cedula"];?>" class="btn btn-success" >
									
									<i class="far fa-trash-alt"></i>
									</a>
									
								
									
								
									
									

	


									
								</tr>
										<?php }?>
					</table>
					 </div>
							</div>
	 	
              
		<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>




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
		<script src="./plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
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
			  
			
	<!-- js tabla -->
	
         <!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
    
 <script src="../../js/confirmacion.js"></script>

		
		
 

