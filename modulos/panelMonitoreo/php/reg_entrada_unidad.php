<?php 
	require("../../includes/conexioncon.php");
  ini_set('date.timezone', 'America/Mexico_City');

  $id_viaje= $_POST["id_viaje"];
  $id_unidad= $_POST["id_unidad"];
  $km= $_POST["km"];
  $disel= $_POST["disel"];
  $folio= $_POST["folio"];
  $tipo= $_POST["tipo"];
  $comentario= $_POST["comentario"];
  $fecha=date('Y-m-d', time());
  $hora=date('H:i:s', time());
  
  $consulta = mysqli_query($con,"INSERT INTO reg_ent_sal (id_viaje, km, disel, folio, fecha, hora, tipo, comentario) VALUES ('$id_viaje','$km','$disel','$folio','$fecha','$hora','$tipo','$comentario')");

  $consulta2 = mysqli_query($con,"UPDATE viajes SET estatus='3' WHERE id_viaje='$id_viaje'");

  if ($id_unidad>0) {
    $consulta3 = mysqli_query($con,"UPDATE unidad SET disponibilidad='4', km='$km', combustible='$disel' WHERE id_unidad='$id_unidad'");    
    
    if (!$consulta AND !$consulta2 AND !$consulta3){
      echo "error".mysql_error($consulta);
    }else{
      echo "1";
    }
  }else{
    if (!$consulta AND !$consulta2){
      echo "error".mysql_error($consulta);
    }else{
      echo "1";
    }  
  }
?>

