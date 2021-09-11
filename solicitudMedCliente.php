<!DOCTYPE html>
<html lang="en">
	
<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Mediacion | Panel de Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./SISTEMA/plantilla/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light">Mediacion</span>
    </a>
	  
	  
	  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
		 <!-- Sidebar -->
    <div class="sidebar">
		
		
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="./index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Pagina Principal
              </p>
            </a>
           
         
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
              <!-- /.ingreso sistema clientes -->
              <a href="SISTEMA/vista/clientesExternos/seleccionAbogado.php" class="brand-link">
      			<span class="brand-text font-weight-light">Ingrese aqui para enviar la Solicitud de Mediacion firmada y escaneada</span>
    		  </a>
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
             <form class="form-horizontal" action="./administradores/cGuardarSol.php" method="post" target="_blank">  
                <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="number" class="form-control"  name="cedula" id="cedula" placeholder="numero de cedula" >
                  </div>
                  <div class="col-3">
                   <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" >
                  </div>
                 <div class="col-3">
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" >
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="correo" id="correo" placeholder="Correo" >
                  </div>
                </div>
              </div>
				 
				 
				  <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control"  name="numeroTelfC" id="numeroTelfC" placeholder="Celular" >
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"name="telfCasa" id="telfCasa" placeholder="Telefono Casa">
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="provinciasUs"name="provinciasUs">
                          <option value="">Seleccione la Provincia</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="cantones"  name="cantones">
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
                    <input type="text" class="form-control"  name="domicilio" id="domicilio" placeholder="Direccion domiciliaria">
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="genero"name="genero">
                          <option value="">Seleccione el genero</option>
					  	 <option value="Masculino">MASCULINO</option>
						 <option value="Femenino">FEMENINO</option>
                    </select>
						 </div>
				  <div class="col-3">
                    <input type="text" class="form-control"  name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad">
                  </div> 
					</div>
                </div>
				 
				
				 
				 
				<div class="card-body">
                <div class="row">
                 <div class="col-3">
					<select class="form-control" id="grupoEtnico"name="grupoEtnico">
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
					<select class="form-control" id="atencionPrioritaria"name="atencionPrioritaria">
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
                    <input type="number" class="form-control"  name="cedulaIn" id="cedulaIn" placeholder="numero de cedula" >
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="nombresIn" id="nombresIn" placeholder=" nombres" >
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="apellidosIn" id="apellidosIn" placeholder="Apellidos">
                  </div>
					<div class="col-3">
                    <input type="text" class="form-control"  name="correoIn" id="correoIn" placeholder="Correo">
                  </div>
                </div>
              </div>
				 
				 
				 <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="number" class="form-control"  name="numeroTelfCIn" id="numeroTelfCIn" placeholder="Celular">
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control"  name="telfCasaIn" id="telfCasaIn" placeholder="Telefono Casa">
                  </div>
                  <div class="col-3">
					<select class="form-control" id="provinciasIn"name="provinciasIn">
                          <option value="">Seleccione la Provincia</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="cantonesIn"  name="cantonesIn">
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
                    <input type="text" class="form-control"  name="direccioDomIn" id="direccioDomIn" placeholder="Direccion domiciliaria">
                  </div>
					
					 <div class="col-3">
					<select class="form-control" id="generoIn"name="generoIn">
                          <option value="">Seleccione el genero</option>
					  	 <option value="Masculino">MASCULINO</option>
						 <option value="Femenino">FEMENINO</option>
                    </select>
						 </div>
				  <div class="col-3">
                    <input type="text" class="form-control"  name="nacionalidadIn" id="nacionalidadIn" placeholder="Nacionalidad">
                  </div> 
					</div>
                </div>
				 
				 
				 <div class="card-body">
                <div class="row">
                 <div class="col-3">
					<select class="form-control" id="etnicoIn"name="etnicoIn">
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
					<select class="form-control" id="atencionPrioritariaIn"name="atencionPrioritariaIn">
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
					<select class="form-control" id="materia"name="materia">
                         <option value="">Seleccione un Caso de Mediación</option>
                    </select> 
					</div>
					 <div class="col-3">
					<select class="form-control" id="materia1"  name="materia1">
                         <option value="">Seleccione un Caso de Mediación</option>
                    </select> 
					</div>
					<div class="col-3">
                    <input type="date" class="form-control"  name="fecha" id="fecha" placeholder="Fecha">
                  </div>
                  
											<?php
												require_once("./funcs/conexion.php");
												$insert="UPDATE numeroexpediente SET contador=contador+1 WHERE id='1' ";
												$update=$conexion->query($insert);
												$consulta="SELECT  expediente, contador FROM numeroexpediente ";
												$resultado=mysqli_query($conexion,$consulta);
													while ($row=$resultado->fetch_array()){
														$expediente=$row['expediente'];
														$contador=$row['contador'];
													}
											?>
					
					<style type="text/css">
						#numeroEpxSolicitud{
							display: none;
						}
					
					</style>
					<div class="col-3">
                    <input type="text" class="form-control"name="numeroEpxSolicitud" id="numeroEpxSolicitud"  value= <?php echo $expediente ?><?php echo $contador ?>
                 
					</div>
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
					<select class="form-control" id="opcion"name="opcion">
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
					<select class="form-control" id="opcion1"name="opcion1">
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
					<select class="form-control" id="opcion2"name="opcion2">
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
					<select class="form-control" id="actaMediacion"name="actaMediacion">
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
					<select class="form-control" id="conocioMediacion"name="conocioMediacion">
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
	
		<script src="./SISTEMA/plantilla/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="./SISTEMA/plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="./SISTEMA/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="./SISTEMA/plantilla/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="./SISTEMA/plantilla/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="./SISTEMA/plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="./SISTEMA/plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="./SISTEMA/plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="./SISTEMA/plantilla/plugins/moment/moment.min.js"></script>
		<script src="./SISTEMA/plantilla/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="./SISTEMA/plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="./SISTEMA/plantilla/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="./SISTEMA/plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="./SISTEMA/plantilla/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="./SISTEMA/plantilla/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="./SISTEMA/plantilla/dist/js/pages/dashboard.js"></script>
			  <script>
			  function cargar_contenido(contenedor,contenido){
			  $("#"+contenedor).load(contenido);
			  }
			  
			  </script>
	<script type="text/javascript" src="./index.js"></script>
	<script type="text/javascript" src="./indexInv.js"></script>		
	<script type="text/javascript" src="./indexx.js"></script>
         
    
 

		
		
 

