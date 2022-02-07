<?php 
  require("../../includes/conexioncon.php");

  $id_catalogo= $_POST["id_catalogo"];
  $nombre= $_POST["nombre"];
  $categoria= $_POST["categoria"];
  $tipo= $_POST["tipo"];

  $consulta = mysqli_query($con,"UPDATE catalogo_servicios SET nombre='$nombre',categoria='$categoria',tipo='$tipo' WHERE id_catalogo='$id_catalogo'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
   
  
 ?>