<?php 
	require("../../includes/conexioncon.php");

  $id_viaje= $_POST["id_viaje"];

  $query="SELECT * FROM checklist where id_viaje='$id_viaje'";
  
  $registro = $con-> query($query);
  
  if($registro->num_rows>0){
    echo "1";
  }else{
    echo "2";
  }
?>

