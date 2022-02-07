<?
if($tipo==1){ 
$sql ="SELECT * FROM alumnos where id_alumno='$datos'";   
                        $sq = $db->query($sql);
                        $rows= $sq->fetchAll();
                        foreach ($rows as $row) {
                          $matricula = $row['matricula'];
                          $nombre = $row['nombres']." ".$row['apaterno']." ".$row['amaterno'];
                          $domicilio = $row['domicilio'];
                          $colonia = $row['colonia'];
                          $municipio = $row['municipio'];
                          $estado = $row['estado'];
                          $telefono = $row['telefono'];
                          $email = $row['email'];
                          $fechanac = $row['fechanac'];
                          $curp = $row['curp'];
                          $sexo = $row['sexo'];

                           $fecha_act= date ('Y-m-d');
                           $fecha1 = new DateTime($fechanac);
                           $fecha2 = new DateTime($fecha_act);
                           $fecha = $fecha1->diff($fecha2);
                           $edad = $fecha->y;
                        } 
}
else if($tipo==2){ 
$sql ="SELECT * FROM docentes where id_docente='$datos'";   
                        $sq = $db->query($sql);
                        $rows= $sq->fetchAll();
                        foreach ($rows as $row) {
                          $nombre = $row['nombres']." ".$row['apaterno']." ".$row['amaterno'];
                          $domicilio = $row['domicilio'];
                          $colonia = $row['colonia'];
                          $municipio = $row['municipio'];
                          $estado = $row['estado'];
                          $telefono = $row['telefono'];
                          $celular = $row['celular'];
                          $email = $row['email'];
                          $fechanac = $row['fechanac'];
                          $curp = $row['curp'];
                          $rfc = $row['rfc'];
                          $sexo = $row['sexo'];
                          $academia = $row['academia'];

                           $fecha_act= date ('Y-m-d');
                           $fecha1 = new DateTime($fechanac);
                           $fecha2 = new DateTime($fecha_act);
                           $fecha = $fecha1->diff($fecha2);
                           $edad = $fecha->y;
                        } 
}
else { 
$sql ="SELECT * FROM administrativos where id_administrativo='$datos'";   
                        $sq = $db->query($sql);
                        $rows= $sq->fetchAll();
                        foreach ($rows as $row) {

                         $nombre = $row['nombres']." ".$row['apaterno']." ".$row['amaterno'];
                          $domicilio = $row['domicilio'];
                          $colonia = $row['colonia'];
                          $municipio = $row['municipio'];
                          $estado = $row['estado'];
                          $telefono = $row['telefono'];
                          $celular = $row['celular'];
                          $email = $row['email'];
                          $fechanac = $row['fechanac'];
                          $curp = $row['curp'];
                          $rfc = $row['rfc'];
                          $sexo = $row['sexo'];
                          $academia = $row['academia'];

                           $fecha_act= date ('Y-m-d');
                           $fecha1 = new DateTime($fechanac);
                           $fecha2 = new DateTime($fecha_act);
                           $fecha = $fecha1->diff($fecha2);
                           $edad = $fecha->y;

                        } 
}
 ?>