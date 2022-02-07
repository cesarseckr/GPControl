<?php 
	require("../../includes/conexioncon.php");
  $id_m= $_POST["id_m"];
  $nombre= $_POST["nombre"];
  $placas= $_POST["placas"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $submarca= $_POST["submarca"];
    $modelo= $_POST["modelo"];

    $consulta = mysqli_query($con,"UPDATE unidad SET nombre='$nombre', placas='$placas', marca='$marca', submarca='$submarca', serie='$serie', modelo='$modelo'
       WHERE id_unidad='$id_m'");

     if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
          }
 ?>