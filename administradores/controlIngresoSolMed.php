<?php

require_once '../funcs/conexionList.php';

$errors=array();

{
$cedula=trim($_POST ["cedula"]);
$nombres=trim($_POST ["nombres"]);
$apellidos=trim($_POST ["apellidos"]);   
$correo=trim($_POST ["correo"]);
$telefono=trim($_POST ["numeroTelf"]);
$provincia=trim($_POST ["provinciasUs"]);
$canton=trim($_POST ["cantones"]);
$direccionDom=trim($_POST ["direccionDom"]);
$genero=trim($_POST ["genero"]);
$nacionalidad=trim($_POST ["nacionalidad"]);
$grpoEt=trim($_POST ["grupoEt"]);
$juridica=trim($_POST ["juridica"]);
$repLegal=trim($_POST ["repLegal"]);
$casillaElec=trim($_POST ["casillaElec"]);
$cuantia=trim($_POST ["cuantia"]);

$cedulaInIn=trim($_POST ["cedulaIn"]);
$nombresIn=trim($_POST ["nombresIn"]);
$apellidosIn=trim($_POST ["apellidosIn"]);   
$correoIn=trim($_POST ["correoIn"]);
$telefonoIn=trim($_POST ["numeroTelfIn"]);
$provinciaIn=trim($_POST ["provinciaIn"]);
$cantonIn=trim($_POST ["cantonIn"]);
$direccionDomIn=trim($_POST ["direccionDomIn"]);
$generoIn=trim($_POST ["generoIn"]);
$nacionalidadIn=trim($_POST ["nacionalidadIn"]);
$grpoEtIn=trim($_POST ["grupoEtIn"]);
$juridicaIn=trim($_POST ["juridicaIn"]);
$repLegalIn=trim($_POST ["repLegalIn"]);
$casillaElecIn=trim($_POST ["casillaElecIn"]);
$cuantiaIn=trim($_POST ["cuantiaIn"]);

$materia=trim($_POST ["materia"]);
$materia1=trim($_POST ["materia1"]);
$fecha=trim($_POST ["fecha"]);
$numeroEpxSlicitud=trim($_POST ["numeroEpxSlicitud"]);
$conflictoBreveDes=trim($_POST ["conflictoBreveDes"]);

$opcion=trim($_POST ["opcion"]);
$opcion1=trim($_POST ["opcion1"]);
$numJuicio=trim($_POST ["numJuicio"]);

$opcion2=trim($_POST ["opcion2"]);
$opcion3=trim($_POST ["opcion3"]);
$numExaEs=trim($_POST ["numExaEs"]);

$opcion4=trim($_POST ["opcion4"]);
$opcion5=trim($_POST ["opcion5"]);
$año=trim($_POST ["año"]);
$numeroExpediente=trim($_POST ["numeroExpediente"]);
    
    
  $verificarNroProcesoMed = mysqli_query($conexion,"select *from solicitud_mediacion where numeroEpxSlicitud='$numeroEpxSlicitud'");
if(mysqli_num_rows($verificarNroProcesoMed) > 0){
    
    
    
    echo "ya existe ese registro";

    

}else{
    
}
    
    $consulta="INSERT INTO solicitud_mediacion(cedula,nombres,apellidos,correo,numeroTelf,provincia,canton,direccionDom,genero,nacionalidad,grupoEt,juridica,repLegal,casillaElec,cuantia,
    cedulaIn,nombresIn,apellidosIn,correoIn,telfIn,provinciaIn,cantonIn,direccioDomIn,generoIn,nacionalidadIn,etnicoIn,JuridicaIn,repLegalIn,casillaElecIn,cuantiaIn,materia,materia1,fecha,numeroEpxSlicitud,
    conflictoBreveDes,opcion,opcion1,numJuicio,opcion2,opcion3,numExaEs,opcion4,opcion5,año,numExpediente) VALUES('$cedula','$nombres','$apellidos','$correo','$telefono','$provincia','$canton','$direccionDom','$genero','$nacionalidad','$grpoEt','$juridica','$repLegal','$casillaElec','
    $cuantia','$cedulaInIn','$nombresIn','$apellidosIn','$correoIn','$telefonoIn','$provinciaIn','$cantonIn','$direccionDomI','$generoIn','$nacionalidadIn','$grpoEtIn','
    $juridicaIn','$repLegalIn','$casillaElecIn','$cuantiaIn','$materia','$materia1','$fecha','$numeroEpxSlicitud','$conflictoBreveDes','$opcion','$opcion1','$numJuicio','
    $opcion2','$opcion3','$numExaEs','$opcion4','$opcion5','$año','$numeroExpediente')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado){
        
        echo " registro ingresado ";
        
    } else{
        
        
    }
    

}
