<?php 
	require("../../includes/conexioncon.php");
  require("../../includes/conexion.php");

  $id_usuario= $_POST["id_usuario"];
  $usuario= $_POST["usuario"];
  $pass1= base64_encode($_POST['pass1']);
  $area= $_POST["area"];
  $estatus= $_POST["estatus"];
  
  $sql="SELECT * FROM usuarios where id_usuario='$id_usuario'";
  $sq= $db->query($sql);
  $rows=$sq->fetchAll();
  
  foreach ($rows as $row) {
    $nombre_usuario=$row["usuario"];
    if ($nombre_usuario==$usuario) {
      
      $consulta = mysqli_query($con,"UPDATE usuarios SET id_tipo='$area',pass='$pass1',estatus='$estatus' WHERE id_usuario='$id_usuario'");
      
      if (!$consulta){
        echo "error".mysql_error($consulta);
      }else{
        echo"1";
      }

    }else{
      $query="SELECT * FROM usuarios where usuario='$usuario'";
      $registro = $con-> query($query);
      if($registro->num_rows >0){
        echo "2";
      }else{
        $consulta = mysqli_query($con,"UPDATE usuarios SET id_tipo='$area',usuario='$usuario',pass='$pass1',estatus='$estatus' WHERE id_usuario='$id_usuario'");
        if (!$consulta){
          echo "error".mysql_error($consulta);
        }else{
          echo"1";
        }
      }
    }
  } 
  
?>