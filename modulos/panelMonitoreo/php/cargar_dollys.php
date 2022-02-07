<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM dolly";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $dolly[$i]["id_dolly"]=$row["id_dolly"];
    $dolly[$i]["nombre"]=$row["economico"];
    $dolly[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($dolly);
  echo $valores;
  
?>