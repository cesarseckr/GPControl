<? session_start();
include ("../../includes/conexion.php");
$ok=2;
if(isset($_POST['id_servicio'])){ 
$id_servicio=$_POST['id_servicio'];
$ruta="../../../imagenes_servicios/".$id_servicio; 
  if(!is_dir($ruta)){
    mkdir($ruta);
  }
if(isset($_FILES["foto"])){
foreach($_FILES["foto"]['tmp_name'] as $key => $tmp_name)
  {
if (($_FILES["foto"]["size"][$key] < 3145728)) { 
  $nombre=$key."".date("dmYHis");
$imagen_c=$ruta."/".$nombre.".jpg";
$ruta_nombre=$id_servicio."/".$nombre.".jpg";
move_uploaded_file($_FILES["foto"]["tmp_name"][$key],$imagen_c);
$sql = "INSERT INTO imagenes (id_servicio, url) VALUES ('$id_servicio','$ruta_nombre')";
   $insertar = $db->query($sql);
     $ok=1;
      }
      else {
      $ok=2;
      }
    }
    }
    }
    echo $ok;
 ?>