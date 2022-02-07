<?php 
	require("../../includes/conexioncon.php");

  $id_viaje= $_POST["id_viaje"];

  $query="SELECT * FROM reg_ent_sal where id_viaje='$id_viaje' AND tipo='2'";
  
  $registro = $con-> query($query);
  
  if($registro->num_rows>0){
    echo "1";
  }else{
    echo "2";
  }
?>

