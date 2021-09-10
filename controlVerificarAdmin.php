<?php
    $cedula=$_POST['cedula'];
        include ('funcs/conexion.php');
            $consulta="SELECT*FROM registrodeusuario where cedula='$cedula'";
            $resultado=mysqli_query($conexion,$consulta);
            $filas=mysqli_num_rows($resultado);
            if($filas>0){ 
                header("location:./administradores/EntrarAlSistemaContrase%C3%B1aMed.php");
    }
            else{
        include("index.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>