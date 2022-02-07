<?php 
  	require("../../includes/conexioncon.php");
  	
  	$id_checklist=$_POST["id_checklist"];
	$id_catalogo=$_POST["id_catalogo"];
	$tipo=$_POST["tipo"];
	$id_unidad=$_POST["id_unidad"];
	$estatus=$_POST["estatus"];
	$diagnostico=$_POST["diagnostico"];

	$consulta = mysqli_query($con,"UPDATE contenido_checklist SET id_tipo='$tipo', id_unidad='$id_unidad', estatus='$estatus', diagnostico='$diagnostico' WHERE id_checklist='$id_checklist' AND id_catalogo='$id_catalogo'");
?>
