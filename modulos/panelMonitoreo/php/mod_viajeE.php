<?php 
	require("../../includes/conexioncon.php");
  $id_viaje= $_POST["id_viaje"];
  $destino= $_POST["destino"];
  $fecha= $_POST["fecha"];
  $operario= $_POST["operario"];
  $unidad= $_POST["unidad"];
  $moto= $_POST["moto"];
  $montacargas= $_POST["montacargas"];
  $dolly= $_POST["dolly"];
  $chasis= $_POST["chasis"];
  $comentario= $_POST["comentario"];
  
  $consulta = mysqli_query($con,"UPDATE viajes SET destino='$destino',fecha='$fecha',id_operario='$operario',id_unidad='$unidad',id_moto='$moto',id_montacargas='$montacargas',id_dolly='$dolly',id_chasis='$chasis',comentario='$comentario' WHERE id_viaje='$id_viaje'");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
?>

