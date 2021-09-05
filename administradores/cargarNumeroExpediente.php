<?php 
require_once '../funcs/conexionList.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `solicitud_mediacion`';
  $result = $mysqli->query($query);
  <input   name="numeroEpxSolicitud">
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id]'>$row[NombreProv]</option>";
  }
  return $listas;
}

echo getListasRep();