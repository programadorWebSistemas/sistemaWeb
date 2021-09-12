<a href=""></a>
   
<?php
$cedula=$_GET['cedula'];
$correo=$_GET['correo'];
$clave=$_GET['clave'];
include ('../funcs/conexion.php');
$consulta="SELECT cedula,correo,clave FROM regabogado where  correo='$correo' and clave='$clave' and cedula='$cedula'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
    
    session_start();
$_SESSION['usu']=$cedula;
    header ("location: ../vista/clientesExternos/indexClientes.php");

}

else{
    
    
header("location:../controlador/inicioDeSesionAbogado.php");


}
mysqli_free_result($resultado);
mysqli_close($conexion); 


