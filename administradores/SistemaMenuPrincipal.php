<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("EntrarAlSistemaContraseñaMed.php");
    die();
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>MENU PRINCIPAL MEDIADORES</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="../css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="../css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="../css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="../css/style.css">


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
                    
					<img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    
					<figcaption class="roboto-medium text-center">
                        
                        <h6>Bienvenido: <?php echo $_SESSION['usu'] ?></h6>
                        
						<br><small class="roboto-condensed-light">SISTEMA DE MEDIACION</small>
                        
                        
					</figcaption>
				</figure>
                <!--rayas para el menu principal-->
				
				<nav class="full-box nav-lateral-menu">
					<ul>
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
				
                
				<a href="cerrarsession.php">Salir del  Sistema</a>
			</nav>
            
            
           <align=center></align>
                    
            

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; Menu de Inicio
				</h3>
				<p class="text-justify">
					Opciones De Tareas
				</p>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">

				<a href="isngresoSolicitusMediacion.php" class="tile">
					<div class="tile-tittle">CLIENTES</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p>DOCUMENTOS</p>
					</div>
				</a>

				<a href="item-list.html" class="tile">
					<div class="tile-tittle">CONSULTA </div>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p>PROCESOS DE MEDIACION</p>
					</div>
				</a>

				<a href="reservation-list.html" class="tile">
					<div class="tile-tittle">PERSONAL</div>
					<div class="tile-icon">
						<i class="fas fa-file-invoice-dollar fa-fw"></i>
						<p>WBF SOLUTION</p>
					</div>
				</a>

				<a href="user-list.html" class="tile">
					<div class="tile-tittle">TALLERES</div>
					<div class="tile-icon">
						<i class="fas fa-user-secret fa-fw"></i>
						<p>DE APRENDIZAJE</p>
					</div>
				</a>

				<a href="company.html" class="tile">
					<div class="tile-tittle">CONFIGURACION</div>
					<div class="tile-icon">
						<i class="fas fa-store-alt fa-fw"></i>
						<p>SISTEMA</p>
					</div>
				</a>
				
			</div>
			

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="../js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="../js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="../js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="../js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="../alertas/alerta%20para%20salir%20del%20sistema/main.js" ></script>
</body>
</html>