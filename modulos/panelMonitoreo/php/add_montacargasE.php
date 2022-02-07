<?php 
	require("../../includes/conexioncon.php");
  $nombre= $_POST["nombre"];
  $combustible= $_POST["combustible"];
  $serie= $_POST["serie"];
  $marca= $_POST["marca"];
  $modelo= $_POST["modelo"];
  $disponibilidad= $_POST["disponibilidad"];

  $query="SELECT * FROM montacargas where nombre='$nombre'";
  $registro = $con-> query($query);

  if($registro->num_rows >0){
    echo "DUP";
  }
  else{
    $consulta = mysqli_query($con,"INSERT INTO montacargas (nombre, combustible, marca, serie, modelo, disponibilidad) VALUES ('$nombre','$combustible','$marca','$serie','$modelo',$disponibilidad)");

    if (!$consulta){
        echo "error".mysql_error($consulta);
    }else{
        echo"OK";
    }
  }
 ?>