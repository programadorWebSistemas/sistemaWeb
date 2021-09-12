<a href=""></a>
<?php

include'../funcs/conexion.php';

$errors=array();

{
      
    $ruc=trim($_POST ["ruc"]);
    $nombre=trim($_POST ["nombre"]);
    $actividad=trim($_POST ["actividad"]);   
    $correo=trim($_POST ["correo"]);
    $telefono=trim($_POST ["telefono"]);
    $clave=trim($_POST ["clave"]);
    $clave1=trim($_POST ["clave1"]);
  
    
    
    $verificarRuc = mysqli_query($conexion,"SELECT * FROM personajuridica WHERE ruc='$ruc'");
    if(mysqli_num_rows($verificarRuc) > 0){
    
  
		
 
    header ("location: ../controlador/registroPersonaJuridica.php");
    exit();

    }else{
    
    }
    
            $consulta="INSERT INTO personajuridica(ruc,nombre,actividad,correo,telefono,clave,clave1)
			
			VALUES('$ruc','$nombre','$actividad','$correo','$telefono','$clave','$clave1')";
            $resultado=mysqli_query($conexion,$consulta);
	
            if ($resultado){
                 header ("location: ../controlador/inicioSesionJuricica.php");
        
    } else{
        
        
    }
    

}

    ?>