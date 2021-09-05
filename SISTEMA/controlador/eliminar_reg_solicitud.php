<script src=""></script>
<?php
include ("../funcs/conexion.php");
	$numeroEpxSolicitud=trim($_GET ["numeroEpxSolicitud"]);
    

$eliminar= "DELETE FROM  solicitud_mediacion  WHERE  numeroEpxSolicitud='$numeroEpxSolicitud'";
$resultado=mysqli_query($conexion,$eliminar);
if($resultado) {
	
$message = "Registro Eliminado";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	header("location: ../vista/solicitudDeMediacion/solicitudDeClientesScan.php");
} else{
	
	header("location: ../vista/solicitudDeMediacion/solicitudDeClientesScan.php");
}


