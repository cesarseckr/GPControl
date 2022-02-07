<?php 
	require("../../includes/conexioncon.php");

  $apaterno= $_POST["apaterno"];
  $amaterno= $_POST["amaterno"];
  $nombre= $_POST["nombre"];
  $fecha_exp= $_POST["fecha_exp"];
  $telefono= $_POST["telefono"];
  $direccion= $_POST["direccion"];
  $email= $_POST["email"];
  $estatus= $_POST["estatus"];
  $disponibilidad= $_POST["disponibilidad"];

  $consulta = mysqli_query($con,"INSERT INTO operarios (nombre, apaterno, amaterno, fecha_exp, telefono, direccion, email, disponibilidad, estatus) VALUES ('$nombre','$apaterno','$amaterno','$fecha_exp','$telefono','$direccion','$email','$disponibilidad' ,'$estatus')");

  if (!$consulta){
    echo "error".mysql_error($consulta);
  }else{
    echo "1";
  }
   
  
 ?>