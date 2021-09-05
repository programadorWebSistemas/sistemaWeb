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
    
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>SOLICITUD DE MEDIACION</title>
    
    
    
    
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>MENU PRINCIPAL MEDIADORES</title>
    
    <!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../css/normalize.css">

	

	

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="../css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="../css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
	<!-- stilo de la Inicitud de mediacion -->
    <link rel="stylesheet" href="../css/styless.css">
    
    
	<!-- General Styles -->
	<link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
    <div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>	
	
	<div id="footer" class="footer">
		<div class="container">			
			
			<div class="row">					
				
			</div><!-- end row -->
			
		</div><!--End container -->
	</div>
	
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
                        
                        <h3>Bienvenido: <?php echo $_SESSION['usu'] ?></h3>
                        
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
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Solcitud de Mediacion <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Descargar</a>
								</li>
								<li>
									<a href="InicitudDeMediacion.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Ingrear Datos</a>
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
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-Inoice-dollar fa-fw"></i> &nbsp; Nueva Entrada <i class="fas fa-chevron-down"></i></a>
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
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; SOLICITUD DE MEDIACION
				</h3>
				<p class="text-justify">
					Ingrese los datos pedidos a continuacion
				</p>
			</div>
			
			
			
			
			
			
			
			
            
            <!-- inicio del formulario de Inicitud de mediacion -->
            
		<form class="form-horizontal" action="cGuardarSol.php" method="post">    
  			<section class="form-register">
    				<h4>Formulario Registro Datos del Solicitante</h4>

     				 <input class="controls" type="number" name="cedula" id="cedula" placeholder="numero de cedula" required>
					  <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombres" required>
					  <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
					  <input class="controls" type="email" name="correo" id="correo" placeholder="Correo"required>
       				  <input class="controls" type="number" name="numeroTelfC" id="numeroTelfC" placeholder="Celular"required>
					  <input class="controls" type="number" name="telfCasa" id="telfCasa" placeholder="Telefono Casa">
				
				<select id="provinciasUs" class="controls" name="provinciasUsu"required>
      						<option value="">Seleccione la Provincia</option>
    					</select>
						<select id="cantones" class="controls" name="cantones"required>
     						<option value="">Seleccione el Canton</option>
      					</select>
						  
						  <input class="controls" type="text" name="parroquia" id="parroquia" placeholder="Parroquia donde vive">

						  <input class="controls" type="text" name="domicilio" id="domicilio" placeholder="Direccion domiciliaria"required>

					<select id="genero" class="controls" name="genero"required>
      					 <option value="">Seleccione el genero</option>
					  	 <option value="Masculino">MASCULINO</option>
						 <option value="Femenino">FEMENINO</option>
					</select>

					<input class="controls" type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad"required>

					<select id="grupoEtnico" class="controls" name="grupoEtnico">
						<option value="">Seleccione su grupo etnico</option>
						<option value="AFRO">AFRO</option>
						<option value="MESTIZO">MESTIZO</option>
						<option value="BLANCO">BLANCO</option>
						<option value="INDIGENA">INDIGENA</option>
						<option value="MONTUBIO">MONTUBIO</option>
						<option value="OTROS">OTROS</option>
					</select>

						<select id="atencionPrioritaria" class="controls" name="atencionPrioritaria"required>
							<option value="">Seleccione el grupo de atencion prioritaria</option>
							<option value="ADULTO MAYOR">ADULTO MAYOR</option>
							<option value="CAPACIDADES ESPECIALES">CAPACIDADES ESPECIALES</option>
							<option value="MUJER EMBARAZADA">MUJER EMBARAZADA</option>
							<option value="NIÑO, NIÑA, ADOLESCENTE">NIÑO, NIÑA, ADOLESCENTE</option>
							<option value="PPL">PPL</option>
							<option value="OTROS">OTROS</option>
							<option value="NINGUNAS DE LAS OPCIONES">NINGUNA DE LAS OPCIONES</option>
      					</select>

						
						  <input class="controls" type="text" name="personaJuridica" id="personaJuridica" placeholder="persona juridica">
						  <input class="controls" type="text" name="repLegal" id="repLegal" placeholder="representante Legal">
						  <input class="controls" type="text" name="nombreAbo" id="nombreAbo" placeholder="Nombre Abogado de haberlo">
						  <input class="controls" type="number" name="telfOficinaAb" id="telfOficinaAb" placeholder="Telefono casa del abogado de haberlo">
						  <input class="controls" type="number" name="telfCelularAb" id="telfCelularAb" placeholder="Telefono celular del abogado de haberlo">
						  <input class="controls" type="text" name="casilla" id="casilla" placeholder="Casilla Judicial Electronica">
						  <input class="controls" type="text" name="cuantia" id="cuantia" placeholder="Cuantia en caso que aplique">
					   
						  <h4>Formulario Registro Datos del Invitado</h4>
      
	  <input class="controls" type="number" name="cedulaIn" id="cedulaIn" placeholder="numero de cedula" required>
	  <input class="controls" type="text" name="nombresIn" id="nombresIn" placeholder=" nombres" required>
	  <input class="controls" type="text" name="apellidosIn" id="apellidosIn" placeholder="Apellidos"required>
	  <input class="controls" type="email" name="correoIn" id="correoIn" placeholder="Correo"required>
	  <input class="controls" type="number" name="numeroTelfCIn" id="numeroTelfCIn" placeholder="Celular"required>
	  <input class="controls" type="number" name="telfCasaIn" id="telfCasaIn" placeholder="Telefono Casa">

<select id="provinciasIn" class="controls" name="provinciasIn"required>
	  <option value="">Seleccione la Provincia</option>
</select>
<select id="cantonesIn" class="controls" name="cantonesIn"required>
	  <option value="">Seleccione el Canton</option>
		  </select>

		  <input class="controls" type="text" name="parroquiaIn" id="parroquiaIn" placeholder="Parroquia donde vive">
		  <input class="controls" type="text" name="direccioDomIn" id="direccioDomIn" placeholder="Direccion domiciliaria"required>

	<select id="generoIn" class="controls" name="generoIn"required>
		   <option value="">Seleccione el genero</option>
		   <option value="Masculino">MASCULINO</option>
		 <option value="Femenino">FEMENINO</option>
	</select>

	<input class="controls" type="text" name="nacionalidadIn" id="nacionalidadIn" placeholder="Nacionalidad"required>

	<select id="etnicoIn" class="controls" name="etnicoIn">
		<option value="">Seleccione su grupo etnico</option>
		<option value="AFRO">AFRO</option>
		<option value="MESTIZO">MESTIZO</option>
		<option value="BLANCO">BLANCO</option>
		<option value="INDIGENA">INDIGENA</option>
		<option value="MONTUBIO">MONTUBIO</option>
		<option value="OTROS">OTROS</option>
	</select>
		<select id="atencionPrioritariaIn" class="controls" name="atencionPrioritariaIn"required>
			<option value="">Seleccione el grupo de atencion prioritaria</option>
			<option value="ADULTO MAYOR">ADULTO MAYOR</option>
			<option value="CAPACIDADES ESPECIALES">CAPACIDADES ESPECIALES</option>
			<option value="MUJER EMBARAZADA">MUJER EMBARAZADA</option>
			<option value="NIÑO, NIÑA, ADOLESCENTE">NIÑO, NIÑA, ADOLESCENTE</option>
			<option value="PPL">PPL</option>
			<option value="OTROS">OTROS</option>
			<option value="NINGUNAS DE LAS OPCIONES">NINGUNA DE LAS OPCIONES</option>
		  </select>
		  <input class="controls" type="text" name="personaJuridicaIn" id="personaJuridicaIn" placeholder="persona juridica">
		  <input class="controls" type="text" name="repLegalIn" id="repLegalIn" placeholder="representante Legal">

		  <input class="controls" type="text" name="nombreAboIn" id="nombreAboIn" placeholder="Nombre Abogado de haberlo">
		  <input class="controls" type="number" name="telefOficinaInAb" id="telefOficinaInAb" placeholder="Telefono casa del abogado">
		  <input class="controls" type="number" name="telfCelularInAb" id="telfCelularInAb" placeholder="Celular del Abogado">

		  <input class="controls" type="text" name="casillaIn" id="casillaIn" placeholder="Casilla Judicial Electronica">
		  <input class="controls" type="text" name="cuantiaIn" id="cuantiaIn" placeholder="Cuantia en caso que aplique">

		  
		  <h4 align="center">MATERIAS DE MEDIACION</h4>

		  <select id="materia" class="controls" name="materia">
      		<option value="">Seleccione un Caso de Mediación</option>
	  </select>

      <select id="materia1" class="controls" name="materia1">
      		<option value="">Seleccione un Caso de Mediación</option>
      </select>
	  			
	  <input class="controls" type="date" name="fecha" id="fecha" placeholder="Fecha">
	  <input class="controls" type="text" name="numeroEpxSolicitud" id="numeroEpxSolicitud" placeholder="Numero de Expediente"disabled>

	  <h4>Breve determinación del Conflicto</h4>
      <textarea class="controls"name="conflictoBreveDes" > </textarea>
	  <h4 >Informo que respecto al asunto que describo en la presente solicitud, existe 
       juicio pendiente:</h4>

       <select id="opcion" class="controls" name="opcion" >
			<option value="">Seleccione una Opcion</option>
			<option value="Si Unidad Judicial">Si Unidad Judicial</option>
			<option value="No">No</option>
		</select>

<input class="controls" type="text" name="numJuicio" id="numJuicio" placeholder="Numero de Juicio">



<h4 >Informo que respecto al asunto que describo en la presente solicitud, existe 
examen especial o de auditoría realizado por la Contraloría General del Estado:</h4>

<select id="opcion1" class="controls" name="opcion1">
      <option value="">Seleccione una Opcion</option>
	  <option value="Si o Auditoria">Si o Auditoria</option>
	  <option value="No">No</option>
	</select>	
	<input class="controls" type="text" name="exaEsp" id="exaEsp" placeholder="Numero de Examen Especial">	
	
	
	<h4 > Informo que respecto al asunto que describo en la presente solicitud, existe 
proceso arbitral:</h4>
<select id="opcion2" class="controls" name="opcion2">
      <option value="">Seleccione una Opcion</option>
	  <option value="Si">Si</option>
	  <option value="No">No</option>
	  <input class="controls" type="number" name="nroPrcArv" id="nroPrcArv" placeholder="Numero de Prceso Arbitral">

	  <h4 > Informo que respecto al asunto que describo en la presente solicitud, existe 
		  	un acta de mediación suscrita con anterioridad a la presente solicitud:</h4>
<select id="actaMediacion" class="controls" name="actaMediacion">
      <option value="">Seleccione una Opcion</option>
	  <option value="Si Centro de Mediacion">Si Centro de Mediacion</option>
	  <option value="No">No</option>

	  <input class="controls" type="number" name="año" id="año" placeholder="Año">
	  <input class="controls" type="number" name="nroActa" id="nroActa" placeholder="Numero de acta">
	  <input class="controls" type="number" name="nroExp" id="nroExp" placeholder="Numero de Expediente">

	 </select>
		
																										 
			<h4 align ="center">¿Cómo conocio el Sevicio de Mediación?</h4>

			<select id="etnicoIn" class="controls" name="conocioMediacion">
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
	
       <!-- Final del formulario de Inicitud de mediacion -->
            
				
						 <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    					<input class="botons"  type="submit" value="Registrar">
   						 <p><a href="EntrarAlSistemaContraseñaMed.php">Ya registre la Inicitud de Mediación</a></p>
				
     
	</select>
				</select>
			</section>
			</form>
		</section>
	</main>
	

		
            <!-- Final del formulario de Inicitud de mediacion -->
            
            <!-- set your website favicon -->
	<link href="favicon.php" rel="icon">	
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="../Inicitud%20directa/css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="../Inicitud%20directa/css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="Inicitud%20directa/css/popup-form.css" type="text/css">

	<script type="text/javascript" src="../js/indexInv.js"></script>
			<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/indexx.js"></script>
            
            
            
           
		
	

	

	

	

	
	
	
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

        
        
        <div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>	
	
	<div id="footer" class="footer">
		<div class="container">			
			
			<div class="row">					
				<div class="footer-top col-sm-12">
					
				</div><!-- end col --> 
			</div><!-- end row -->
			
		</div><!--End container -->
	</div>

	<!--=============================================
	=            Include JavaScript files  
< jQuery V3.4.1 -->
	
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