<link rel="stylesheet" href="administradores/ingresoDeUsuario.php">
<?php
$cedula=$_POST['cedula'];
include ('funcs/conexion.php');

$consulta="SELECT*FROM registrodeusuario where cedula='$cedula'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    
    session_start();
$_SESSION['usu']=$correo;
header("location:./administradores/ingresoDeUsuario.php");
}

else{
    
    include("index.php");



}
mysqli_free_result($resultado);
mysqli_close($conexion);