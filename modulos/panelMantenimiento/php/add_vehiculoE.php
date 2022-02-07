<?php 
	require("../../includes/conexioncon.php");
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $submarca= $_POST["submarca"];
    $modelo= $_POST["modelo"];

  $query="SELECT * FROM unidad where nombre='$nombre'";
  $registro = $con-> query($query);

  if($registro->num_rows >0){
    echo "DUP";
  }
  else{
    $consulta = mysqli_query($con,"INSERT INTO unidad (nombre, placas, marca, submarca, serie, modelo) VALUES ('$nombre','$placas','$marca','$submarca','$serie','$modelo')");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
  }
 ?>