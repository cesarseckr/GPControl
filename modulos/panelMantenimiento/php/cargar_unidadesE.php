<?php 
	require("../../includes/conexion.php");
  $tipo= $_POST["tipo"];

switch ($tipo) {
        case 1:
$sql="SELECT * FROM unidad";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
        $datos[$i]["id"]=$row["id_unidad"];
        $datos[$i]["nombre"]=$row["nombre"];
        $datos[$i]["placas"]=$row["placas"];
        $i++;
      }
      break;
      case 2: 
$sql="SELECT * FROM motos";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
        $datos[$i]["id"]=$row["id_moto"];
        $datos[$i]["nombre"]=$row["nombre"];
        $datos[$i]["placas"]=$row["placas"];
        $i++;
      }
      break;
      case 3: 
$sql="SELECT * FROM montacargas";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
        $datos[$i]["id"]=$row["id_montacargas"];
        $datos[$i]["nombre"]=$row["nombre"];
        $datos[$i]["placas"]=$row["modelo"];
        $i++;
      }
      break;
      case 4:
$sql="SELECT * FROM dolly";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
        $datos[$i]["id"]=$row["id_dolly"];
        $datos[$i]["nombre"]=$row["marca"];
        $datos[$i]["placas"]=$row["serie"];
        $i++;
      }
      break;
      case 5:
$sql="SELECT * FROM chasis";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      $i=0;
      foreach ($rows as $row) {
        $datos[$i]["id"]=$row["id_chasis"];
        $datos[$i]["nombre"]=$row["nombre"];
        $datos[$i]["placas"]=$row["placas"];
        $i++;
      }
 break;
       } 
     $valores= json_encode($datos);
     echo $valores;
 ?>