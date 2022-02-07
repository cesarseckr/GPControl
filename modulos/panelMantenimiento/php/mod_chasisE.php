<?php 
	require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $economico= $_POST["economico"];
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
    $modelo= $_POST["modelo"];

    $consulta = mysqli_query($con,"UPDATE chasis SET economico='$economico', nombre='$nombre', placas='$placas', marca='$marca', serie='$serie', modelo='$modelo'
       WHERE id_chasis='$id_m'");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
          }
 ?>