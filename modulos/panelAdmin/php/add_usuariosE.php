<?php 
	require("../../includes/conexioncon.php");

  $usuario= $_POST["usuario"];
  $pass1= base64_encode($_POST['pass1']);
  $area= $_POST["area"];
  $estatus= $_POST["estatus"];

  $query="SELECT * FROM usuarios where usuario='$usuario'";
  $registro = $con-> query($query);

  if($registro->num_rows >0){
    echo "DUP";
  }else{
    $consulta = mysqli_query($con,"INSERT INTO usuarios (usuario, pass, id_tipo, estatus) VALUES ('$usuario','$pass1','$area','$estatus')");

    if (!$consulta){
      echo "error".mysql_error($consulta);
    }else{
      echo"OK";
    }
  } 
  
 ?>