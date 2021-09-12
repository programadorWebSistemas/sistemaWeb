<html>
<head>
<title>Problema</title>
   <a href=""></a>
</head>
<body>
 <?php
   
    if(isset($_POST['enviar'])){
         $selector=($_POST['seleccionMul']);
           echo $selector; 
        }
    if ($selector == 'natural'){
        header("location:../vista/clientesExternos/registroClientes.php");
    }
    
if ($selector == 'juridica'){
        header("location:../controlador/registroPersonaJuridica.php");
    }
    
    
    if ($selector == 'abogado'){
        header("location:../controlador/registroAbogado.php");
    }
  
				
				 
	
	   
    
   
 ?>
</body>
</html>




