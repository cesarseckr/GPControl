<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM chasis";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $chasis[$i]["id_chasis"]=$row["id_chasis"];
    $chasis[$i]["nombre"]=$row["economico"];
    $chasis[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($chasis);
  echo $valores;
  
?>