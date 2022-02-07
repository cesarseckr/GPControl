<?php 
	require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $economico= $_POST["economico"];
  $suspension= $_POST["suspension"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $disponibilidad= $_POST["disponibilidad"];

  $consulta = mysqli_query($con,"UPDATE dolly SET economico='$economico', marca='$marca', modelo='$modelo', serie='$serie', suspension='$suspension', disponibilidad='$disponibilidad' WHERE id_dolly='$id_m'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo"OK";
  }
?>