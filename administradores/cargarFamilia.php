<?php 
require_once '../funcs/conexionList.php';

function getVideos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `familia` WHERE idM = $id";
  $result = $mysqli->query($query);
  $videos = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $videos .= "<option value='$row[materia1]'>$row[materia1]</option>";
  }
  return $videos;
}

echo getVideos();
