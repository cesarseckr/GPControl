<?php 
  	require("../../includes/conexioncon.php");
  	
  	$id_checklist=$_POST["id_checklist"];
	$ll1=$_POST["ll1"];
	$ll2=$_POST["ll2"];
	$ll3=$_POST["ll3"];
	$ll4=$_POST["ll4"];
	$ll5=$_POST["ll5"];
	$ll6=$_POST["ll6"];
	$ll7=$_POST["ll7"];
	$ll8=$_POST["ll8"];
	$ll9=$_POST["ll9"];
	$ll10=$_POST["ll10"];
	$tipo=$_POST["tipo"];
	$observaciones=$_POST["observaciones"];

	$consulta = mysqli_query($con,"INSERT INTO checklist_llantas (id_checklist, id_tipo, ll1, ll2, ll3, ll4, ll5, ll6, ll7, ll8, ll9, ll10, observaciones) VALUES ('$id_checklist','$tipo','$ll1','$ll2','$ll3','$ll4','$ll5','$ll6','$ll7','$ll8','$ll9','$ll10','$observaciones')");
?>
