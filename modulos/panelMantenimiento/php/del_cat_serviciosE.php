<?php 
  require("../../includes/conexioncon.php");

  $id_catalogo= $_POST["id_m"];

  $consulta = mysqli_query($con,"DELETE FROM catalogo_servicios WHERE id_catalogo='$id_catalogo'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
   
  
 ?>