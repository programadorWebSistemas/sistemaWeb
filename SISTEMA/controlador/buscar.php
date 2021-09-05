<?php
require_once '../funcs/conexion.php';
$salida='';

    if(!empty($_POST['consulta'])){
        $consulta=$_POST['consulta'];
        $sql="SELECT * FROM solicitud_mediacion WHERE numeroEpxSolicitud LIKE '%".$consulta."%' OR cedula  LIKE '%".$consulta."%' OR nombres  LIKE '%".$consulta."%' 
        OR apellidos  LIKE '%".$consulta."%' OR correo  LIKE '%".$consulta."%' OR numeroTelfC LIKE '%".$consulta."%' OR domicilio LIKE '%".$consulta."%'";
        $query=$pdo->prepare($sql);
        $query->execute();
    }
    


if ($resultado= $query->rowCont() > 0){
    $salida.='
    <table class="table table-bordered text-center">

    <thead class ="thead -light">
    <tr>
     <th>EXPEDIENTE</th>
     <th>CEDULA</th>
     <th>NOMBRES</th>
     <th>APELLIDOS</th>
     <th>CORREO</th>
     <th>TELEFONO</th>
     <th>DIRECCION</th>
    </tr>
    </thead>
    <tbody>
 ';
 while ($fila=$query ->fetch(PDO::FETCH_ASSOC)) {
     $salida.="
        <tr>
        <td>".$fila[numeroEpxSolicitud]."</td>
        <td>".$fila[cedula]."</td>
        <td>".$fila[nombres]."</td>
        <td>".$fila[apellidos]."</td>
        <td>".$fila[correo]."</td>
        <td>".$fila[numeroTelfC]."</td>
        <td>".$fila[domicilio]."</td>
        </tr>
    ";
 }
 $salida.= '<tbody></table>';
} else{
    $salida.='
    <table class="table table-bordered text-center">

    <thead class ="thead -light">
    <tr>
     <th>EXPEDIENTE</th>
     <th>CEDULA</th>
     <th>NOMBRES</th>
     <th>APELLIDOS</th>
     <th>CORREO</th>
     <th>TELEFONO</th>
     <th>DIRECCION</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td colspan="7"> NO HAY DATOS EN ESTA BUSQUEDA</td>
    </tr>
    <tbody>
    </table>';
}
echo $salida;

