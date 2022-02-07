<?php 
	require("../../includes/conexioncon.php");
  $destino= $_POST["destino"];
  $fecha= $_POST["fecha"];
  $operario= $_POST["operario"];
  $unidad= $_POST["unidad"];
  $moto= $_POST["moto"];
  $montacargas= $_POST["montacargas"];
  $dolly= $_POST["dolly"];
  $chasis= $_POST["chasis"];
  $comentario= $_POST["comentario"];
  $estatus="1";
  
  $consulta = mysqli_query($con,"INSERT INTO viajes (destino, fecha, estatus, id_operario, id_unidad, id_moto, id_montacargas, id_dolly, id_chasis, comentario) VALUES ('$destino','$fecha','$estatus','$operario','$unidad','$moto','$montacargas','$dolly','$chasis','$comentario')");

  if($unidad>0){
    $consulta_unidad = mysqli_query($con,"UPDATE unidad SET disponibilidad='2' WHERE id_unidad='$unidad'");    
  }

  if($moto>0){
    $consulta_moto = mysqli_query($con,"UPDATE motos SET disponibilidad='2' WHERE id_moto='$moto'");
  }

  if($montacargas>0){
    $consulta_montacargas = mysqli_query($con,"UPDATE montacargas SET disponibilidad='2' WHERE id_montacargas='$montacargas'");
  }

  if($dolly>0){
    $consulta_dolly = mysqli_query($con,"UPDATE dolly SET disponibilidad='2' WHERE id_dolly='$dolly'");
  }

  if($chasis>0){
    $consulta_chasis = mysqli_query($con,"UPDATE chasis SET disponibilidad='2' WHERE id_chasis='$chasis'");
  }

  if($operario>0){
    $consulta_operario = mysqli_query($con,"UPDATE operarios SET disponibilidad='2' WHERE id_operario='$operario'");
  }

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
?>

