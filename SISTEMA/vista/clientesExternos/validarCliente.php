<?php
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
include ('../../funcs/conexion.php');

$consulta="SELECT cedula,correo,nombres clave FROM registroclientes where correo='$correo' and clave='$clave' and cedula='$cedula'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	
    
    session_start();
$_SESSION['usu']=$cedula;
header("location:indexClientes.php");
}
else{
    
    include("inicioSesionCliente.php");
}
?>
