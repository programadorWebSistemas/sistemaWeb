<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['usu'];

if($varsession==null|| $varsession=''){
   include("../EntrarAlSistemaContraseñaMed.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
	
<head>

           
          <li class="nav-item">
			 
            <a href="../../funcs/conexionList.php" class="nav-link">
				
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Usuarios
              </p>
            </a>
            
          </li>
			
          