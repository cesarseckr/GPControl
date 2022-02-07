<?php 
  	require("../../includes/conexioncon.php");
  	
  	$id_viaje=$_POST["id_viaje"];
	$diagnostico=$_POST["diagnostico"];
	$fecha=date('Y-m-d', time());
  	$hora=date('H:i:s', time());
  

	$consulta = mysqli_query($con,"INSERT INTO checklist (id_viaje, fecha, hora, diagnostico) VALUES ('$id_viaje','$fecha','$hora','$diagnostico')");

	include('../../includes/conexion.php');

  	$sql="SELECT MAX(id_checklist) AS id_checklist FROM checklist";
  	$sq = $db->query($sql);
  	$rows= $sq->fetchAll();
  	$i=0;
  	foreach ($rows as $row) {
    	$id_checklist=$row["id_checklist"];
  	}
  	echo $id_checklist;
  
?>