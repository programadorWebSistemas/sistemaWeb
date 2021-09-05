<!--<script src="../vista/clientesExternos/registroSolicitudMed.php"></script>
<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];
if($varsession==null|| $varsession=''){
   include("inicioSesionCliente.php");
    die();
}
include ("../funcs/conexion.php");

	
	$ced=$_SESSION['usu'];
	$consulta="SELECT archivo,cedula FROM archivos WHERE cedula='$ced'";
	$resultado=mysqli_query($conexion,$consulta);
	$filas=mysqli_num_rows($resultado);
	if($resultado>0){
	while ($row=$resultado->fetch_array()){
	$archivo=$row['archivo'];
	}
}
    $ruta='../../Public/'.$archivo;
unlink($ruta);
$expediente=trim($_GET ["expediente"]);
$eliminar= "DELETE FROM  archivos  WHERE  expediente='$expediente'";
$resultado=mysqli_query($conexion,$eliminar);
if($resultado) {
	
$message = "Archivo Eliminado";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	header("location: ../vista/clientesExternos/registroSolicitudMed.php");
} else{
	
	header("location: ../vista/clientesExternos/registroSolicitudMed.php");
}


?>
