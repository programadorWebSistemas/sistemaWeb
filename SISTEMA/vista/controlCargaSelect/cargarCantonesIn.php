<?php 
require_once '../funcs/conexionList.php';

function getVideos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `cantones` WHERE idProv = $id";
  $result = $mysqli->query($query);
  $videos = '<option value="0">Elige un Canton</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $videos .= "<option value='$row[id]'>$row[nombreCanton]</option>";
  }
  return $videos;
}

echo getVideos();