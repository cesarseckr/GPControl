<?php 
	require("../../includes/conexion.php");

  	$id_checklist= $_POST["id_checklist"];
  	$tipo= $_POST["tipo"];

  	$sql="SELECT * FROM  checklist_llantas where id_checklist='$id_checklist' and id_tipo='$tipo' ";
  	$sq= $db->query($sql);
  	$rows=$sq->fetchAll();
  	$i=0;
  	foreach ($rows as $row){
        $servicios[$i]["ll1"]=$row["ll1"];
        $servicios[$i]["ll2"]=$row["ll2"];
        $servicios[$i]["ll3"]=$row["ll3"];
        $servicios[$i]["ll4"]=$row["ll4"];
        $servicios[$i]["ll5"]=$row["ll5"];
        $servicios[$i]["ll6"]=$row["ll6"];
        $servicios[$i]["ll7"]=$row["ll7"];
        $servicios[$i]["ll8"]=$row["ll8"];
        $servicios[$i]["ll9"]=$row["ll9"];
        $servicios[$i]["ll10"]=$row["ll10"];
        $servicios[$i]["observaciones"]=$row["observaciones"];
        $i++;
    }

    $valores= json_encode($servicios);
  	echo $valores;
?>