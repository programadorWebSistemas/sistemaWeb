<?php 
require_once '../funcs/conexionList.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `materia`';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id]'>$row[nombreMat]</option>";
  }
  return $listas;
}

echo getListasRep();