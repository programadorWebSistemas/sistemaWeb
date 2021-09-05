<!--<script src="../vista/solicitudDeMediacion/solicitudDeClientesScan.php"></script>
<?php
include ("../funcs/conexion.php");
	$expediente=trim($_GET ["expediente"]);
    

$eliminar= "DELETE FROM  archivos  WHERE  expediente='$expediente'";
$resultado=mysqli_query($conexion,$eliminar);
if($resultado) {
	
$message = "Archivo Eliminado";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	header("location: ../vista/solicitudDeMediacion/solicitudDeClientesScan.php");
} else{
	
	header("location: ../vista/solicitudDeMediacion/solicitudDeClientesScan.php");
}

