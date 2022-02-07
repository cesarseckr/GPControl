<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM motos";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $moto[$i]["id_moto"]=$row["id_moto"];
    $moto[$i]["nombre"]=$row["nombre"];
    $moto[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($moto);
  echo $valores;
  
?>