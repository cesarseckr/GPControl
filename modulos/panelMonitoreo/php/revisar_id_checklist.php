<?php 
	require("../../includes/conexion.php");

  	$id_viaje= $_POST["id_viaje"];

  	$sql="SELECT * FROM checklist where id_viaje='$id_viaje'";
  	$sq= $db->query($sql);
  	$rows=$sq->fetchAll();
  	$i=0;
  	foreach ($rows as $row){
        $servicios[$i]["id_checklist"]=$row["id_checklist"];
  		$servicios[$i]["diagnostico"]=$row["diagnostico"];
        $i++;
    }

    $valores= json_encode($servicios);
  	echo $valores;
?>