

<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("inicioSesionCliente.php");
    die();
	}
include ('../../../SISTEMA/funcs/conexion.php');
$ced=$_SESSION['usu'];
$consulta="SELECT nombres,apellidos,correo FROM registroclientes WHERE cedula='$ced'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
while ($row=$resultado->fetch_array()){
$nombres=$row['nombres'];
$apellidos=$row['apellidos'];
$correo=$row['correo'];
}
}

// control para juridica
$ruc=$_SESSION['usu'];
$consulta="SELECT nombre,correo FROM personajuridica WHERE ruc='$ruc'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($resultado>0){
while ($row=$resultado->fetch_array()){
$nombre=$row['nombre'];
$correo=$row['correo'];
}
}
// control para abogado
$cedula=$_SESSION['usu'];
$consulta="SELECT nombresApellidos,correo FROM regabogado WHERE cedula='$cedula'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($resultado>0){
while ($row=$resultado->fetch_array()){
$nombresApellidos=$row['nombresApellidos'];
$correo=$row['correo'];
}
}

?>

<!DOCTYPE html>
<html lang="en">
	
<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Mediacion | Panel Cliente</title>

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
	
	
	<!-- css tabla -->
			
	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="../../../css/bootstrap.min.css">
	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../../../js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../../../css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="../../../css/style.css">

				<link rel="stylesheet" href="../../vista/usuario/elegant-icons-style.css">
	
	

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
        <a href="../clientesExternos/indexClientes.php" class="nav-link" _msthash="783497" _msttexthash="59059">Inicio</a>
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
				<a href="#" class="d-block"><h6>Bienvenido: <?php echo $nombres, $apellidos?></h6></a> 
              <a href="#" class="d-block"><h6> <?php echo $nombre ?></h6></a>
              <a href="#" class="d-block"><h6> <?php echo $nombresApellidos ?></h6></a>
          </li>
          <!-- Menu Body -->
         
          <!-- Menu Footer-->
          <li class="user-footer" _msthidden="2">
            <a href="#" class="btn btn-default btn-flat" _msthash="1257347" _msttexthash="94315" _msthidden="1">Perfil</a>
            <a href="../../controlador/cerrarsessionEspecialesClientes.php" class="btn btn-default btn-flat float-right" _msthash="1257464" _msttexthash="98553" _msthidden="1">Cerrar Sesion</a>
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
  
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
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
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="../clientesExternos/indexClientes.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de Control
              </p>
            </a>
           
          
           
          

          <li class="nav-item">
            <a href="../clientesExternos/registroSolicitudMed.php" class="nav-link">
<!--                icono de titulo -->
             
              <p>
                REGISTRAR SOLICITUD DE MEDIACION
               
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
                <h3 class="card-title" _msthash="2764749" _msttexthash="112515">FORMULARIO DE CARGA DE ARCHIVOS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" _msthash="2392117" _msttexthash="415961">En este Formulario Ud va a poder subir la Solicitud de Mediacion 
				en un archivo pdf escaneado y Firmado.</div>
				
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
		</div>
		
		  <form class="form-horizontal" action="../../controlador/subirArchivos.php" method="post" enctype="multipart/form-data"> 
		<div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="file" class="form-control"  name="archivo" id="archivo"  >
                  </div>
					<div class="col-2">
                    <input type="text" class="form-control"  name="descripcion" id="descripcion" placeholder="descripcion"required >
                  </div>
					<div class="col-2">
                    <input type="text" class="form-control"  name="expediente" id="correo" placeholder="Nro expediente"required >
                  </div>
                  <div class="col-2">
                   <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Nro de Cedula o Ruc"  required >
                  </div>
                 <div class="col-2">
                    <input type="text" class="form-control" name="nomApellidos" id="nomApellidos" placeholder="Nombres completos" required>
                  </div>
                </div>
              </div>
			  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="direccion" id="direccion" placeholder="Direccion"required >
                  </div>
					<div class="col-2">
                    <input type="text" class="form-control"  name="correo" id="correo" placeholder="Correo"required >
                  </div>
					
                  <div class="col-2">
                    <input type="text" class="form-control"  name="telefono" id="telefono" placeholder="Telefono"required >
                  </div>
					 <div class="col-2">
                    <input type="date" class="form-control"  name="fecha" id="fecha" placeholder="Fecha"required >
                  </div>
                </div>
              </div>
			<div class="card-footer">
               <button type="submit" class="btn btn-primary" _msthash="3655366" _msttexthash="76830">Subir Archivo de Solicitud</button>
             </div>
		</form>
		<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
				<thead>
					<tr class="text-center roboto-medium">
						<th>ARCHIVO</th>
						<th>DESCRIPCION</th>
						<th>NRO EXPEDIENTE</th>
						<th>CEDULA O RUC</th>
						<th>NOMBRES COMPLETOS</th>
						<th>DIRECCION</th>
						<th>TELEFONO</th>
						<th>FECHA</th>
						<th>ABRIR</th>
						<th>ELIMINAR</th>
					</tr>
				</thead>
			<?php
				
					$ced=$_SESSION['usu'];
				include("../../funcs/conexion.php");
				$usuarios="SELECT * FROM archivos WHERE cedula='$ced'";
			  $resultado=mysqli_query($conexion,$usuarios);
					
				while($row=mysqli_fetch_assoc($resultado)){ ?>
					<tr class="text-center" >
							<td><?php echo $row["archivo"];?></td>
							<td><?php echo $row["descripcion"];?></td>
							<td><?php echo $row["expediente"];?></td>
							<td><?php echo $row["cedula"];?></td>
							<td><?php echo $row["nomApellidos"];?></td>
							<td><?php echo $row["direccion"];?></td>
							<td><?php echo $row["telefono"];?></td>
							<td><?php echo $row["fecha"];?></td>
									<td>
                    <!-- visualizar el archivo subido-->
									<a href="../../../Public/<?php echo $row['archivo']; ?>" class="btn btn-success" target="_blank">
	  									<i class="fas fa-sync-alt"></i>	
									</a>						  
								</td>
                <!-- eliminar el archivo de la base de datos el archivo subido-->
								<td>
									<a href="../../controlador/eliminarArhivosCienteExt.php? expediente=<?php echo $row["expediente"];?>" class="btn btn-danger" >
									<i class="far fa-trash-alt"></i>
									</a>
                </td>
					</tr>
						<?php }?>
	    </table>
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

	




<!-- .scrip para la cargar de archivos -->
<script src="../../js/dropzone.js"></script>
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
	
	
	
         
    
 

		
		
 

