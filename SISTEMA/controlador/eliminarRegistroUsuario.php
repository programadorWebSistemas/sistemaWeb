<script src=""></script>
<?php
include ("../funcs/conexion.php");
	$cedula=trim($_GET ["cedula"]);
    

$eliminar= "DELETE FROM  registrodeusuario  WHERE  cedula='$cedula'";
$resultado=mysqli_query($conexion,$eliminar);
if($resultado) {
	
	header("location: ../vista/usuario/vista_usuario_listar.php");
} else{
	
}
