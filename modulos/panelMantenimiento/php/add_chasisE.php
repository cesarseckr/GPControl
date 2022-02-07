<?php 
	require("../../includes/conexioncon.php");
  $economico= $_POST["economico"];
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
    $modelo= $_POST["modelo"];

$consulta = mysqli_query($con,"INSERT INTO chasis (economico, nombre, placas, marca, serie, modelo) VALUES ('$economico','$nombre','$placas','$marca','$serie','$modelo')");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
    
 ?>