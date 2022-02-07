<?php 
	require("../../includes/conexion.php");
  $tipo= $_POST["tipo"];

$sql="SELECT * FROM catalogo_servicios WHERE tipo='$tipo' order by categoria";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
      	$servicios[$i]["id_catalogo"]=$row["id_catalogo"];
      	$servicios[$i]["nombre"]=$row["nombre"];
      	$servicios[$i]["categoria"]=$row["categoria"];
      	$i++;
      }
     $valores= json_encode($servicios);
     echo $valores;
 ?>