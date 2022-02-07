<?php 
	require("../../includes/conexion.php");
  $tipo= $_POST["tipo"];
  $id_checklist=$_POST["id_checklist"];

  $sql="SELECT * FROM catalogo_servicios WHERE tipo='$tipo' order by categoria";
  $sq= $db->query($sql);
  $rows=$sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $id_catalogo=$row["id_catalogo"];
    $sql_contenido="SELECT * FROM contenido_checklist WHERE id_catalogo='$id_catalogo' AND id_checklist='$id_checklist'";
    $sq_contenido= $db->query($sql_contenido);
    $rows_contenido=$sq_contenido->fetchAll();
    foreach ($rows_contenido as $row_contenido) {
      $estatus=$row_contenido["estatus"];
      $diagnostico=$row_contenido["diagnostico"];
    }
  	$servicios[$i]["id_catalogo"]=$id_catalogo;
  	$servicios[$i]["nombre"]=$row["nombre"];
  	$servicios[$i]["categoria"]=$row["categoria"];
    $servicios[$i]["estatus"]=$estatus;
    $servicios[$i]["diagnostico"]=$diagnostico;
  	$i++;
  }
  $valores= json_encode($servicios);
  echo $valores;

?>