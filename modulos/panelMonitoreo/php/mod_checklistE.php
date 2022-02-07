<?php 
  require("../../includes/conexioncon.php");
  	
  $id_viaje=$_POST["id_viaje"];
	$diagnostico=$_POST["diagnostico"];
	$fecha=date('Y-m-d', time());
  $hora=date('H:i:s', time());
  

	$consulta = mysqli_query($con,"UPDATE checklist SET fecha='$fecha', hora='$hora', diagnostico='$diagnostico' WHERE id_viaje='$id_viaje'");

	include('../../includes/conexion.php');

  	$sql="SELECT id_checklist FROM checklist WHERE id_viaje='$id_viaje'";
  	$sq = $db->query($sql);
  	$rows= $sq->fetchAll();
  	$i=0;
  	foreach ($rows as $row) {
    	$id_checklist=$row["id_checklist"];
  	}
  	echo $id_checklist;
  
?>