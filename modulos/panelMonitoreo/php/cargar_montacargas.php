<?php session_start();

  include('../../includes/conexion.php');

  $sql="SELECT * FROM montacargas";
  $sq = $db->query($sql);
  $rows= $sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $montacargas[$i]["id_montacargas"]=$row["id_montacargas"];
    $montacargas[$i]["nombre"]=$row["nombre"];
    $montacargas[$i]["disponibilidad"]=$row["disponibilidad"];
    $i++;
  }
  $valores= json_encode($montacargas);
  echo $valores;
  
?>