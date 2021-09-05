<a href="" class="nav-link">
<?php

include '../funcs/conexion.php';

$desc=$_POST['descripcion'];
$expediente=$_POST['expediente'];
$cedula=$_POST['cedula'];
$nomApellidos=$_POST['nomApellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];


/*$file_tmp= $_FILES['archivo']['tmp_name'];
$route="../../Public/".$file_name;

move_uploaded_file($file_tmp,$route);

$sql="INSERT INTO archivos(archivo,descripcion,expediente,cedula,nomApellidos,direccion,correo,telefono) VALUES('$file_name','$desc','$expediente','$cedula',
'$nomApellidos','$direccion','$correo','$telefono')";


$sql_query=mysqli_query($conexion,$sql);
	header("location:../vista/clientesExternos/registroSolicitudMed.php");
	
	*/
	
	if($_FILES["archivo"]){
		$nombre_base=basename($archivo= $_FILES['archivo']['name']);
		$nombre_final=date("m-d-y"). "-". date("H-i-s"). "-" . $nombre_base;
		$ruta="../../Public/". $nombre_final;
		$subirarchivo= move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta);
		if($subirarchivo){
			$insertar="INSERT INTO archivos(archivo,descripcion,expediente,cedula,nomApellidos,direccion,correo,telefono,fecha) VALUES('$nombre_final','$desc','$expediente','$cedula','$nomApellidos','$direccion','$correo','$telefono','$fecha')";
			$resultado=mysqli_query($conexion,$insertar);
			if($resultado){
				echo "<script>alert('se ha enviado su informe');window.location='../vista/clientesExternos/registroSolicitudMed.php'</script>";
			}else{
				printf("errormessage:%s\n",mysqli_error($conexion));
			}
		}else{
			echo "error al subir archivo";
		}
	}
	
	
	
	
	
?>
