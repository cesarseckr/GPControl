<?php 
  require("../../includes/conexioncon.php");
  $economico= $_POST["economico"];
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $disponibilidad= $_POST["disponibilidad"];
  
  $consulta = mysqli_query($con,"INSERT INTO chasis (economico, nombre, placas, marca, serie, modelo, disponibilidad) VALUES ('$economico','$nombre','$placas','$marca','$serie','$modelo','$disponibilidad')");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo"OK";
  }  
 ?>