<?php 
  	require("../../includes/conexioncon.php");
  	
  	$id_checklist=$_POST["id_checklist"];
	$id_catalogo=$_POST["id_catalogo"];
	$tipo=$_POST["tipo"];
	$id_unidad=$_POST["id_unidad"];
	$estatus=$_POST["estatus"];
	$diagnostico=$_POST["diagnostico"];
  

	$consulta = mysqli_query($con,"INSERT INTO contenido_checklist (id_checklist, id_catalogo, id_tipo, id_unidad, estatus, diagnostico) VALUES ('$id_checklist','$id_catalogo','$tipo','$id_unidad','$estatus', '$diagnostico')");
 ?>
