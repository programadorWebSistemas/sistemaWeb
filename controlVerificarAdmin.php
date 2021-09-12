<a href=""
<?php
    $cedula=$_POST['cedula'];
        include ('SISTEMA/funcs/conexion.php');
            $consulta="SELECT*FROM registrodeusuario where cedula='$cedula'";
            $resultado=mysqli_query($conexion,$consulta);
            $filas=mysqli_num_rows($resultado);
            if($resultado>0){ 
                header("location:./administradores/EntrarAlSistemaContrase%C3%B1aMed.php");
    }
            else{
        include("index.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
