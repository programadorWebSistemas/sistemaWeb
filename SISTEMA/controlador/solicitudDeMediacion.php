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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Sistema de Mediacion | Panel de Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plantilla/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plantilla/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plantilla/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

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
          <img src="../img/usuarios/admin.png" class="user-image img-circle elevation-2" alt="Imagen de usuario" _mstalt="290654">
			
          
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" _msthidden="8">
          <!-- User image -->
          <li class="user-header bg-primary" _msthidden="3">
            <img src="../img/usuarios/admin.png" class="img-circle elevation-2" alt="User Image" _msthidden="A" _msthiddenattr="1155908" _mstalt="128609">
				<a href="#" class="d-block"><h6>Bienvenido: <?php echo $_SESSION['usu'] ?></h6></a> 
          </li>
          <!-- Menu Body -->
         
          <!-- Menu Footer-->
          <li class="user-footer" _msthidden="2">
            <a href="#" class="btn btn-default btn-flat" _msthash="1257347" _msttexthash="94315" _msthidden="1">Perfil</a>
            <a href="../../administradores/cerrarsession.php" class="btn btn-default btn-flat float-right" _msthash="1257464" _msttexthash="98553" _msthidden="1">Cerrar Sesion</a>
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
    <a href="index3.html" class="brand-link">
      <img src="../img/logos/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          <img src="../img/usuarios/admin.png" class="img-circle elevation-2" alt="User Image">
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
          <a href="../index.php" class="nav-link active">
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
              <a href="./usuario/vista_usuario_nuevo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="./usuario/vista_usuario_listar.php" class="nav-link">
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
              <a href="./clientes/vista_cliente_nuevo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Cliente</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="./clientes/vista_cliente_listar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista Cliente</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                SOLICITUD DE MEDIACION
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="../vista/solicitudDeMediacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva Solicitud </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="./solicitudDeMediacion_listar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista Solicitud</p>
                </a>
              </li>
            </ul>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" _msthash="2764749" _msttexthash="112515">Solicitud de Mediacion</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" _msthash="2392117" _msttexthash="415961"> Ingreso </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
			
			
		</div>
		<div class="full-box page-header">
			<div class="col-md-12">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; SOLICITUD DE MEDIACION
				</h3>
				
		
		
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" _msthash="2698059" _msttexthash="256854">Ingrese los datos pedidos a continuacion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form class="form-horizontal" action="../../administradores/cGuardarSol.php" method="post">  
                <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="number" class="form-control"  name="cedula" id="cedula" placeholder="numero de cedula" required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                  </div>
					<div class="col-3">
                    <input type="email" class="form-control"  name="correo" id="correo" placeholder="Correo" required>
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="numeroTelfC" id="numeroTelfC" placeholder="Celular" required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"name="telfCasa" id="telfCasa" placeholder="Telefono Casa">
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="provinciasUs"name="provinciasUs"required>
                          <option value="">Seleccione la Provincia</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="cantones"  name="cantones"required>
                          <option value="">Seleccione el Canton</option>
                    </select> 
					</div>
					</div>
                </div>
               
				  <div class="card-body">
                <div class="row">
                 <div class="col-3">
                    <input type="text" class="form-control" name="parroquia" id="parroquia" placeholder="Parroquia donde vive">
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="domicilio" id="domicilio" placeholder="Direccion domiciliaria"required>
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="genero"name="genero"required>>
                          <option value="">Seleccione el genero</option>
					  	 <option value="Masculino">MASCULINO</option>
						 <option value="Femenino">FEMENINO</option>
                    </select>
						 </div>
				  <div class="col-3">
                    <input type="text" class="form-control"  name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad"required>
                  </div> 
					</div>
                </div>
				 
				
				 
				 
				<div class="card-body">
                <div class="row">
                 <div class="col-3">
					<select class="form-control" id="grupoEtnico"name="grupoEtnico"required>>
                          <option value="">Seleccione su grupo etnico</option>
						<option value="AFRO">AFRO</option>
						<option value="MESTIZO">MESTIZO</option>
						<option value="BLANCO">BLANCO</option>
						<option value="INDIGENA">INDIGENA</option>
						<option value="MONTUBIO">MONTUBIO</option>
						<option value="OTROS">OTROS</option>
                    </select>
						 </div>
					 <div class="col-3">
					<select class="form-control" id="atencionPrioritaria"name="atencionPrioritaria"required>>
                         <option value="">Seleccione el grupo de atencion prioritaria</option>
							<option value="ADULTO MAYOR">ADULTO MAYOR</option>
							<option value="CAPACIDADES ESPECIALES">CAPACIDADES ESPECIALES</option>
							<option value="MUJER EMBARAZADA">MUJER EMBARAZADA</option>
							<option value="NIÑO, NIÑA, ADOLESCENTE">NIÑO, NIÑA, ADOLESCENTE</option>
							<option value="PPL">PPL</option>
							<option value="OTROS">OTROS</option>
							<option value="NINGUNAS DE LAS OPCIONES">NINGUNA DE LAS OPCIONES</option>
                    </select>
						</div> 
					
				<div class="col-3">
                    <input type="text" class="form-control"  name="personaJuridica" id="personaJuridica" placeholder="persona juridica">
                  </div> 
				  <div class="col-3">
                    <input type="text" class="form-control"  name="repLegal" id="repLegal" placeholder="representante Legal">
                  </div>  
					</div>
                </div>
				 
				 
				 
				 <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="nombreAbo" id="nombreAbo" placeholder="Nombre Abogado de haberlo">
                  </div>
                  <div class="col-3">
                     <input type="text" class="form-control"  name="telfOficinaAb" id="telfOficinaAb" placeholder="Telefono casa del abogado de haberlo">
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="telfCelularAb" id="telfCelularAb" placeholder="Telefono celular del abogado de haberlo">
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="casilla" id="casilla" placeholder="Casilla Judicial Electronica">
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="cuantia" id="cuantia" placeholder="Cuantia en caso que aplique">
                  </div>
                 
                </div>
              </div>
				
				 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" _msthash="2698059" _msttexthash="256854">Formulario Registro Datos del Invitado</h3>
              </div>
				 </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="number" class="form-control"  name="cedulaIn" id="cedulaIn" placeholder="numero de cedula" required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="nombresIn" id="nombresIn" placeholder=" nombres" required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="apellidosIn" id="apellidosIn" placeholder="Apellidos"required>
                  </div>
					<div class="col-3">
                    <input type="email" class="form-control"  name="correoIn" id="correoIn" placeholder="Correo"required>
                  </div>
                </div>
              </div>
				 
				 
				 <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="number" class="form-control"  name="numeroTelfCIn" id="numeroTelfCIn" placeholder="Celular"required>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="telfCasaIn" id="telfCasaIn" placeholder="Telefono Casa">
                  </div>
                  <div class="col-3">
					<select class="form-control" id="provinciasIn"name="provinciasIn"required>>
                          <option value="">Seleccione la Provincia</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="cantonesIn"  name="cantonesIn"required>
                          <option value="">Seleccione el Canton</option>
                    </select> 
					</div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                 <div class="col-3">
                    <input type="text" class="form-control" name="parroquiaIn" id="parroquiaIn" placeholder="Parroquia donde vive">
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="direccioDomIn" id="direccioDomIn" placeholder="Direccion domiciliaria"required>
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="generoIn"name="generoIn"required>
                          <option value="">Seleccione el genero</option>
					  	 <option value="Masculino">MASCULINO</option>
						 <option value="Femenino">FEMENINO</option>
                    </select>
						 </div>
				  <div class="col-3">
                    <input type="text" class="form-control"  name="nacionalidadIn" id="nacionalidadIn" placeholder="Nacionalidad"required>
                  </div> 
					</div>
                </div>
				 
				 
				 <div class="card-body">
                <div class="row">
                 <div class="col-3">
					<select class="form-control" id="etnicoIn"name="etnicoIn"required>>
                          <option value="">Seleccione su grupo etnico</option>
						<option value="AFRO">AFRO</option>
						<option value="MESTIZO">MESTIZO</option>
						<option value="BLANCO">BLANCO</option>
						<option value="INDIGENA">INDIGENA</option>
						<option value="MONTUBIO">MONTUBIO</option>
						<option value="OTROS">OTROS</option>
                    </select>
						 </div>
					 <div class="col-3">
					<select class="form-control" id="atencionPrioritariaIn"name="atencionPrioritariaIn"required>>
                         <option value="">Seleccione el grupo de atencion prioritaria</option>
							<option value="ADULTO MAYOR">ADULTO MAYOR</option>
							<option value="CAPACIDADES ESPECIALES">CAPACIDADES ESPECIALES</option>
							<option value="MUJER EMBARAZADA">MUJER EMBARAZADA</option>
							<option value="NIÑO, NIÑA, ADOLESCENTE">NIÑO, NIÑA, ADOLESCENTE</option>
							<option value="PPL">PPL</option>
							<option value="OTROS">OTROS</option>
							<option value="NINGUNAS DE LAS OPCIONES">NINGUNA DE LAS OPCIONES</option>
                    </select>
						</div> 
					
				<div class="col-3">
                    <input type="text" class="form-control"  name="personaJuridicaIn" id="personaJuridicaIn" placeholder="persona juridica">
                  </div> 
				  <div class="col-3">
                    <input type="text" class="form-control"  name="repLegalIn" id="repLegalIn" placeholder="representante Legal">
                  </div>  
					</div>
                </div>
				 
				 
				 
				 <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="nombreAboIn" id="nombreAboIn" placeholder="Nombre Abogado de haberlo">
                  </div>
                  <div class="col-3">
                     <input type="text" class="form-control"  name="telefOficinaInAb" id="telefOficinaInAb" placeholder="Telefono casa del abogado de haberlo">
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="telfCelularInAb" id="telfCelularInAb" placeholder="Telefono celular del abogado de haberlo">
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="casillaIn" id="casillaIn" placeholder="Casilla Judicial Electronica">
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="cuantiaIn" id="cuantiaIn" placeholder="Cuantia en caso que aplique">
                  </div>
                 
                </div>
              </div>
				 
				  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" _msthash="2698059" _msttexthash="256854">MATERIAS DE MEDIACION</h3>
              </div>
				 </div>
				 
				 
				 
				   <div class="card-body">
                <div class="row">
					 <div class="col-3">
					<select class="form-control" id="materia"name="materia"required>>
                         <option value="">Seleccione un Caso de Mediación</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="materia1"  name="materia1"required>
                         <option value="">Seleccione un Caso de Mediación</option>
                    </select> 
					</div>
					<div class="col-3">
                    <input type="date" class="form-control"  name="fecha" id="fecha" placeholder="Fecha">
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"name="numeroEpxSolicitud" id="numeroEpxSolicitud" placeholder="Numero de Expediente">
                  </div>
					</div>
                </div>
				 
				 
			<div class="card-body">
                <div class="row">
                 	<label for="inputDescription">Breve determinación del Conflicto</label>
                	<textarea id="conflictoBreveDes" name="conflictoBreveDes" class="form-control" rows="4"></textarea>
              	</div>
              </div>
              
				 
				   <div class="card-body">
					   <label for="inputDescription">Informo que respecto al asunto que describo en la presente solicitud, existe juicio pendiente:</label>
                <div class="row">
                  <div class="col-3">
					<select class="form-control" id="opcion"name="opcion"required>>
                         <option value="">Seleccione una Opcion</option>
							<option value="Si Unidad Judicial">Si Unidad Judicial</option>
							<option value="No">No</option>
                    </select> 
					</div>
					  <div class="col-3">
                    <input type="text" class="form-control"  name="numJuicio" id="numJuicio" placeholder="Numero de Juicio">
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
					   <label for="inputDescription">Informo que respecto al asunto que describo en la presente solicitud, existe examen especial o de auditoría realizado por la Contraloría General del Estado:</label>
                <div class="row">
                  <div class="col-3">
					<select class="form-control" id="opcion1"name="opcion1"required>>
                         <option value="">Seleccione una Opcion</option>
							  <option value="Si o Auditoria">Si o Auditoria</option>
							  <option value="No">No</option>
                    </select> 
					</div>
					  <div class="col-3">
                    <input type="text" class="form-control"  name="exaEsp" id="exaEsp" placeholder="Numero de Examen Especial">	
                  </div>
                </div>
              </div>
				 
				 
				 <div class="card-body">
					   <label for="inputDescription"> Informo que respecto al asunto que describo en la presente solicitud, existe proceso arbitral:</label>
                <div class="row">
                  <div class="col-3">
					<select class="form-control" id="opcion2"name="opcion2"required>>
                          <option value="">Seleccione una Opcion</option>
							  <option value="Si">Si</option>
							  <option value="No">No</option>
                    </select> 
					</div>
					  <div class="col-3">
                    <input type="text" class="form-control"  name="nroPrcArv" id="nroPrcArv" placeholder="Numero de Prceso Arbitral">
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
					   <label for="inputDescription"> Informo que respecto al asunto que describo en la presente solicitud, existe un acta de mediación suscrita con anterioridad a la presente solicitud:</label>
                <div class="row">
                  <div class="col-3">
					<select class="form-control" id="actaMediacion"name="actaMediacion"required>>
                          <option value="">Seleccione una Opcion</option>
							  <option value="Si Centro de Mediacion">Si Centro de Mediacion</option>
							  <option value="No">No</option>
                    </select> 
					</div>
					
					 <div class="col-3">
                    	<input type="text" class="form-control"  name="ano" id="ano" placeholder="Año">
                     </div>
					 <div class="col-3">
                    	<input type="text" class="form-control" name="nroActa" id="nroActa" placeholder="Numero de acta">
                     </div>
					<div class="col-3">
                    	<input type="text" class="form-control" name="nroExp" id="nroExp" placeholder="Numero de Expediente">
                     </div>
              </div>
				 <div class="card-body">
					   <label for="inputDescription"> ¿Cómo conocio el Sevicio de Mediación?</label>
                <div class="row">
                  <div class="col-3">
					<select class="form-control" id="conocioMediacion"name="conocioMediacion"required>>
                         <option value="">Seleccione una Opcion</option>
								<option value="TELEVISION, RADIO,PRENSA">TELEVISION, RADIO,PRENSA</option>
								<option value="AMIGO/CONOCIDO">AMIGO/CONOCIDO</option>
								<option value="STAND INFORMATIVOS, EVENTOS O FERIAS">STAND INFORMATIVOS, EVENTOS O FERIAS</option>
								<option value="INTERNET">INTERNET</option>
								<option value="VOLANTEO">VOLANTEO</option>
								<option value="REDES SOCIALES">REDES SOCIALES</option>
								<option value="ABOGADO">ABOGADO</option>
								<option value="INVITACION">INVITACION</option>
								<option value="OTROS">OTROS</option>
                    </select> 
					</div>
                </div>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" _msthash="3655366" _msttexthash="76830">Enviar</button>
                </div>
				 </div>
              </form>
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
		<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="../plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="../plantilla/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="../plantilla/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="../plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="../plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="../plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="../plantilla/plugins/moment/moment.min.js"></script>
		<script src="../plantilla/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="../plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="../plantilla/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="../plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../plantilla/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="../plantilla/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="../plantilla/dist/js/pages/dashboard.js"></script>
			  <script>
			  function cargar_contenido(contenedor,contenido){
			  $("#"+contenedor).load(contenido);
			  }
			  
			  </script>
	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/indexInv.js"></script>		
	<script type="text/javascript" src="../js/indexx.js"></script>
         
    
 

		
		
 

