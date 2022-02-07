<?php 
	require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $nombre= $_POST["nombre"];
  $combustible= $_POST["combustible"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
    $modelo= $_POST["modelo"];

    $consulta = mysqli_query($con,"UPDATE montacargas SET nombre='$nombre', combustible='$combustible', marca='$marca', serie='$serie', modelo='$modelo'
       WHERE id_montacargas='$id_m'");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
          }
 ?>