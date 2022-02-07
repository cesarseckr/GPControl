<?php 
  require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $consulta = mysqli_query($con,"UPDATE viajes SET estatus=4
      WHERE id_viaje='$id_m'");

  if (!$consulta){
    echo "error ".mysql_error($consulta);
  }else{
    echo "1";
  }
?>

