<?php 
  require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $nombre= $_POST["nombre"];
  $combustible= $_POST["combustible"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $disponibilidad= $_POST["disponibilidad"];

  $consulta = mysqli_query($con,"UPDATE montacargas SET nombre='$nombre', combustible='$combustible', marca='$marca', serie='$serie', modelo='$modelo', disponibilidad='$disponibilidad' WHERE id_montacargas='$id_m'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo"OK";
  }
?>