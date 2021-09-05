<?php

include'../funcs/conexion.php';

$errors=array();

{
      
    $cedula=trim($_POST ["cedula"]);
    $nombresApellidos=trim($_POST ["nombresApellidos"]);   
    $correo=trim($_POST ["correo"]);
    $numeroTelf=trim($_POST ["numeroTelf"]);
    $clave=trim($_POST ["clave"]);
    $clave2=trim($_POST ["clave2"]);
  
    
    
    $verificarCedula = mysqli_query($conexion,"SELECT * FROM registrodeusuario WHERE cedula='$cedula'");
    if(mysqli_num_rows($verificarCedula) > 0){
    
    echo 
		
 
    header ("location:./ingresoDeUsuario.php");
    exit();

    }else{
    
    }
    
            $consulta="INSERT INTO registrodeusuario(cedula,nombresApellidos,correo,numeroTelf,clave,clave2)
			
			VALUES('$cedula','$nombresApellidos','$correo','$numeroTelf','$clave','$clave2')";
            $resultado=mysqli_query($conexion,$consulta);
	
            if ($resultado){
                
            include './EntrarAlSistemaContraseñaMed.php';
        
    } else{
        
        
    }
    

}

    
    
    
    
    

    
    














