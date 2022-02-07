<?php 
	require("../../includes/conexioncon.php");

  $id_operario= $_POST["id_operario"];
  $apaterno= $_POST["apaterno"];
  $amaterno= $_POST["amaterno"];
  $nombre= $_POST["nombre"];
  $fecha_exp= $_POST["fecha_exp"];
  $telefono= $_POST["telefono"];
  $direccion= $_POST["direccion"];
  $email= $_POST["email"];
  $estatus= $_POST["estatus"];
  $disponibilidad= $_POST["disponibilidad"];

  $consulta = mysqli_query($con,"UPDATE operarios SET nombre='$nombre',apaterno='$apaterno',amaterno='$amaterno',fecha_exp='$fecha_exp',telefono='$telefono',direccion='$direccion',email='$email', disponibilidad='$disponibilidad', estatus='$estatus' WHERE id_operario='$id_operario'");
  
  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo"1";
  }

    
  
  
?>