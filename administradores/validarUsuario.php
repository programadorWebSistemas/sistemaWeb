<?php
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
include ('../funcs/conexion.php');
$consulta="SELECT cedula,correo,clave FROM registrodeusuario where correo='$correo' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
    
    session_start();
$_SESSION['usu']=$cedula;
header("location:../SISTEMA/vista/index.php");
}

else{
    
    include("./EntrarAlSistemaContrase├▒aMed.php");



}
mysqli_free_result($resultado);
mysqli_close($conexion);








    