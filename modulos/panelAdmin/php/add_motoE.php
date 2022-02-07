<?php 
	require("../../includes/conexioncon.php");
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $disponibilidad= $_POST["disponibilidad"];

  $query="SELECT * FROM motos where nombre='$nombre'";
  $registro = $con-> query($query);

  if($registro->num_rows >0){
    echo "DUP";
  }
  else{
    $consulta = mysqli_query($con,"INSERT INTO motos (nombre, placas, marca, serie, modelo,disponibilidad) VALUES ('$nombre','$placas','$marca','$serie','$modelo','$disponibilidad')");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
    
  }
 ?>