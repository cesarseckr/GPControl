<?php 
	require("../../includes/conexioncon.php");

  $nombre= $_POST["nombre"];
  $categoria= $_POST["categoria"];
  $tipo= $_POST["tipo"];

  $consulta = mysqli_query($con,"INSERT INTO catalogo_servicios (nombre, categoria, tipo) VALUES ('$nombre','$categoria','$tipo')");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
   
  
 ?>