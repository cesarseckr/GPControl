<?php 
  require("../../includes/conexioncon.php");
  $id_mantenimiento= $_POST["id_mantenimiento"];
  $id_catalogo= $_POST["id_catalogo"];
  $diagnostico_s= $_POST["diagnostico_s"];
  $estatus= $_POST["estatus"];

$consulta = mysqli_query($con,"INSERT INTO servicios (id_mantenimiento, id_catalogo, diagnostico, estatus) VALUES ('$id_mantenimiento','$id_catalogo','$diagnostico_s','$estatus')");
 ?>
