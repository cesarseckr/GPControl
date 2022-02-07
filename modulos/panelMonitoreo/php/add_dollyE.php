<?php 
	require("../../includes/conexioncon.php");
  $economico= $_POST["economico"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $suspension= $_POST["suspension"];
  $disponibilidad= $_POST["disponibilidad"];
  

    $consulta = mysqli_query($con,"INSERT INTO dolly (economico, marca, modelo, serie, suspension, disponibilidad) VALUES ('$economico','$marca','$modelo','$serie','$suspension','$disponibilidad')"); 

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
    
 ?>