
<?php
include ('../../funcs/conexion.php');
	$cedula=trim($_GET ["cedula"]);
    

$eliminar= "DELETE FROM  registroclientes  WHERE  cedula='$cedula'";
$resultado=mysqli_query($conexion,$eliminar);
if($resultado) {
	

	
	header("location: ../vista/clientes/vista_cliente_listar.php");
} else{
	
	
}
