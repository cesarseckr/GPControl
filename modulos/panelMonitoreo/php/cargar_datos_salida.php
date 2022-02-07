<?php 
  require("../../includes/conexion.php");
  $id_viaje= $_POST["id_viaje"];

  $sql="SELECT * FROM reg_ent_sal WHERE id_viaje='$id_viaje' AND tipo='1'";
  $sq= $db->query($sql);
  $rows=$sq->fetchAll();
  $i=0;
  foreach ($rows as $row) {
    $registros[$i]["id_reg"]=$row["id_reg"];
    $registros[$i]["km"]=$row["km"];
    $registros[$i]["disel"]=$row["disel"];
    $registros[$i]["folio"]=$row["folio"];
    $registros[$i]["fecha"]=$row["fecha"];
    $registros[$i]["hora"]=$row["hora"];
    $registros[$i]["tipo"]=$row["tipo"];
    $registros[$i]["comentario"]=$row["comentario"];
    $i++;
  }
  $valores= json_encode($registros);
  echo $valores;
 ?>