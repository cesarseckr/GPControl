<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM unidad";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $unidad[$i]["id_unidad"]=$row["id_unidad"];
    $unidad[$i]["nombre"]=$row["nombre"];
    $unidad[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($unidad);
  echo $valores;
  
?>