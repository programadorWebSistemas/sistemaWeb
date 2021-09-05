<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("EntrarAlSistemaContraseñaMed.php");
    die();
}

include ('funcs/conexion.php');
    $usuarios="select * from registrodeusuario";


?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista usuarios</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="../funcs/conexionList.php">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
                    
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    
					<figcaption class="roboto-medium text-center">
                        
                        <h6>Bienvenido: <?php echo $_SESSION['usu'] ?></h6>
                        
						<br><small class="roboto-condensed-light">SISTEMA DE MEDIACION</small>
                        
                        
					</figcaption>
				</figure>
                <!--rayas para el menu principal-->
				<div class="full-box nav-lateral-bar"></div>
                
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="SistemaMenuPrincipal.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp;MENU PRINCIPAL</a>
						</li>
                            <!--rayas para el menu principal-->
                            <div class="full-box nav-lateral-bar"></div>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Solicitud de Mediacion <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Descargar</a>
								</li>
								<li>
									<a href="solicitudDeMediacion.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Ingrear Datos</a>
								</li>
								
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Reglamento <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Descargar</a>
								</li>
								
								
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Nueva Entrada <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo </a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; nueva</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp;nueva</a>
								</li>
								<li>
									<a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; nueva</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								
								<li>
									<a href="listaDeUsuariosEmpresa.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				 <a href="cerrarsession.php">Salir del  Sistema</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
				</h3>
				<p class="text-justify">
					Lista de los usuarios de la Empresa
				</p>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					
					<li>
						<a class="active" href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
					</li>
					<li>
						<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							
    <!--=============================================
	=            grid para presentar usuarios          =
	==============================================-->     
                            
                 <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>ID</th>
								<th>USUARIO</th>
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
                                <td><?php echo $row["nombreUsu"];?></td>
                                <td><?php echo $row["cedula"];?></td>
                                <td><?php echo $row["nombres"];?></td>
                                <td><?php echo $row["apellidos"];?></td>
								<td><?php echo $row["correo"];?></td>
                                <td><?php echo $row["numeroTelf"];?></td>
                            
                            <td>
 									<a href="actualizarUserEmpresa.php" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
                                    
								</td>
								<td>
                                    
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
                            
                            
                                <?php }?>
                            
								
                            
                            
					</table>
					 </div>
							</div>
						</thead>
					</table>
				</div>
			</div>
			
		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
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
</body>
</html>