<a href=""></a>
<?php

include'../funcs/conexion.php';

$errors=array();

{
      
    $cedula=trim($_POST ["cedula"]);
    $matricula=trim($_POST ["matricula"]); 
    $nombresApellidos=trim($_POST ["nombresApellidos"]);
    $correo=trim($_POST ["correo"]);
    $telefono=trim($_POST ["telefono"]);
    $clave=trim($_POST ["clave"]);
    $clave1=trim($_POST ["clave1"]);
  
    
    
    $verificarCedula = mysqli_query($conexion,"SELECT * FROM personajuridica WHERE ruc='$cedula'");
    if(mysqli_num_rows($verificarCedula) > 0){
    
  
		
 
    header ("location: ../controlador/registroAbogado.php");
    exit();

    }else{
    
    }
    
            $consulta="INSERT INTO regabogado(cedula,matricula,nombresApellidos,correo,telefono,clave,clave1)
			
			VALUES('$cedula','$matricula','$nombresApellidos','$correo','$telefono','$clave','$clave1')";
            $resultado=mysqli_query($conexion,$consulta);
	
            if ($resultado){
                 header ("location: ../controlador/inicioDeSesionAbogado.php");
        
    } else{
        
        
    }
    

}

    ?>