<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM operarios WHERE estatus='1'";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $operarios[$i]["id_operario"]=$row["id_operario"];
    $operarios[$i]["nombre"]=$row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"];
    $operarios[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($operarios);
  echo $valores;
  
?>