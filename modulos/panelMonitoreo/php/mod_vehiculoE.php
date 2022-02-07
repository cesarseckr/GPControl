<?php 
	require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $submarca= $_POST["submarca"];
  $modelo= $_POST["modelo"];
  $km= $_POST["km"];
  $combustible= $_POST["combustible"];
  $disponibilidad= $_POST["disponibilidad"];

  $consulta = mysqli_query($con,"UPDATE unidad SET nombre='$nombre', placas='$placas', marca='$marca', submarca='$submarca', serie='$serie', modelo='$modelo', km='$km', combustible='$combustible', disponibilidad='$disponibilidad' WHERE id_unidad='$id_m'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo"OK";
  }
 ?>