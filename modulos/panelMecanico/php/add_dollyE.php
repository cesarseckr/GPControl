<?php 
	require("../../includes/conexioncon.php");
  $suspension= $_POST["suspension"];
  $economico= $_POST["economico"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];

    $consulta = mysqli_query($con,"INSERT INTO dolly (economico, marca, modelo, serie, suspension) VALUES ('$economico','$marca','$modelo','$serie','$suspension')");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
    
 ?>