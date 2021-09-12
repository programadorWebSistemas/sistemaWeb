<a href=""></a>
   
<?php
$ruc=$_GET['ruc'];
$correo=$_GET['correo'];
$clave=$_GET['clave'];
include ('../funcs/conexion.php');
$consulta="SELECT ruc,correo,clave FROM personajuridica where correo='$correo' and clave='$clave' and ruc='$ruc'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
    
    session_start();
$_SESSION['usu']=$ruc;
    header ("location: ../vista/clientesExternos/indexClientes.php");

}

else{
    
    
header("location:../controlador/inicioSesionJuricica.php");


}
mysqli_free_result($resultado);
mysqli_close($conexion);


