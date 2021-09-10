<title>mediacion</title>
<?php

include'../../funcs/conexion.php';

$errors=array();

{
      
    $cedula=trim($_POST ["cedula"]);
    $nombres=trim($_POST ["nombres"]);
    $apellidos=trim($_POST ["apellidos"]);   
    $correo=trim($_POST ["correo"]);
    $telefono=trim($_POST ["telefono"]);
    $clave=trim($_POST ["clave"]);
    $clave2=trim($_POST ["clave2"]);
  
    
    
    $verificarCedula = mysqli_query($conexion,"SELECT * FROM registroclientes WHERE cedula='$cedula'");
    if(mysqli_num_rows($verificarCedula) > 0){
    
  
		
 
    header ("location: registroClientes.php");
    exit();

    }else{
    
    }
    
            $consulta="INSERT INTO registroClientes(cedula,nombres,apellidos,correo,telefono,clave,clave2)
			
			VALUES('$cedula','$nombres','$apellidos','$correo','$telefono','$clave','$clave2')";
            $resultado=mysqli_query($conexion,$consulta);
	
            if ($resultado){
                 header ("location: inicioSesionCliente.php");
        
    } else{
        
        
    }
    

}

    ?>