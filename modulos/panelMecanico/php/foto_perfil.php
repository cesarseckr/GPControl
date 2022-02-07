<? session_start();
            $id_usuario=$_SESSION['id_usuario'];
            $datos= $_SESSION['id_datos'];
                        $tipo=$_SESSION['tipo'];
                        $area_admin= $_SESSION['area_admin'];
                        $usuario=$_SESSION['usuario'];
                        $tipo_n = $_SESSION['tipo_nombre'];
                        $area_admin = $_SESSION['area_admin'];

include ("../../includes/conexion.php");
if($tipo==1){ 
$ruta="alumnos/".$usuario;
$ruta_c="../../../archivos/alumnos/".$usuario;
  }
  elseif ($tipo==2) {
$ruta="docentes/".$usuario;    
$ruta_c="../../../archivos/docentes/".$usuario; 
  }
  else {
$ruta="administrativos/".$usuario;
$ruta_c="../../../archivos/administrativos/".$usuario; 
  }
  if(!is_dir($ruta_c)){
    mkdir($ruta_c);
  }

if (($_FILES["foto"]["size"] < 4000000)) { 
  $archivo=$ruta."/perfil.png";
   $archivo_c=$ruta_c."/perfil.png";
  move_uploaded_file($_FILES["foto"]["tmp_name"],
          $archivo_c);
$sql = "UPDATE usuarios SET url_img='$archivo' WHERE id_usuario='$id_usuario'";
   $insertar = $db->query($sql);

      echo "Archivo actualizado correctamente ".$archivo_c;
      }
      else{
        echo "El archivo excede los 4Mb de peso seleccione otro";
      }    

 ?>