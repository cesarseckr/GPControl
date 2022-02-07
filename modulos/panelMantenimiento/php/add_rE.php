<?php 
  require("../../includes/conexioncon.php");
  $id_vehiculo= $_POST["vehiculo"];
  $fecha= date('Y-m-d H:i:s');
  $tipo_vehiculo= $_POST["tipo_vehiculo"];
  $tipo= $_POST["tipo"];
  $km= $_POST["km"];
  $observaciones= $_POST["observaciones"];
  $diagnostico= $_POST["diagnostico"];

  $ll1= $_POST["ll1"];
  $ll2= $_POST["ll2"];
  $ll3= $_POST["ll3"];
  $ll4= $_POST["ll4"];
  $ll5= $_POST["ll5"];
  $ll6= $_POST["ll6"];
  $ll7= $_POST["ll7"];
  $ll8= $_POST["ll8"];
  $ll9= $_POST["ll9"];
  $ll10= $_POST["ll10"];
  $total_llantas=0;
  $llantas=array("",$ll1,$ll2,$ll3,$ll4,$ll5,$ll6,$ll7,$ll8,$ll9,$ll10);
  switch ($tipo_vehiculo) {
  case 1:
  $total_llantas=10;
  break;
  case 2:
  $total_llantas=2;
  break;
  case 3:
  $total_llantas=4;
  break;
  case 4:
  $total_llantas=8;
  break;
  case 5:
  $total_llantas=8;
  break;
}

$consulta = mysqli_query($con,"INSERT INTO mantenimientos 
  (id_vehiculo, tipo_vehiculo, tipo, km, observaciones, diagnostico, fecha, estatus) VALUES 
  ('$id_vehiculo','$tipo_vehiculo','$tipo','$km','$observaciones','$diagnostico','$fecha', 1)");

     if (!$consulta){
        echo "ERROR";
    }
    else {
    $query="SELECT id_mantenimiento FROM mantenimientos ORDER BY id_mantenimiento DESC LIMIT 1"; 
  $resultado = $con->query($query);
  if ($resultado->num_rows >0) {
    while ($fila = $resultado->fetch_assoc()){
      
      $id_man=$fila['id_mantenimiento'];
    }
for ($i = 1; $i <= $total_llantas; $i++) {
  $llanta=$llantas[$i];
  $consulta = mysqli_query($con,"INSERT INTO llantas 
  (id_servicio, llanta, observaciones) VALUES 
  ('$id_man','$i','$llanta')");
}
echo $id_man;
    }
  }

 ?>