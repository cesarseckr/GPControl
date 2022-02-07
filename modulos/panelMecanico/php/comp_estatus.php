<?php 
  require("../../includes/conexion.php");
  $id_mantenimiento= $_POST["id_mantenimiento"];

$sql="SELECT estatus FROM servicios where id_mantenimiento='$id_mantenimiento' and estatus<>1 ORDER BY estatus ASC";
  $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
        $estatus=$row["estatus"];
          $sql = "UPDATE mantenimientos SET estatus='$estatus'
           where id_mantenimiento='$id_mantenimiento'";
          $insertar = $db->query($sql);
      }
      echo "OK";

 ?>
