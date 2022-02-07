<? 
$total_llantas="";
$imagenes="";
$sql="SELECT * FROM mantenimientos WHERE id_mantenimiento='$folio'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $id_vehiculo=$row["id_vehiculo"];
            $tipo_vehiculo=$row["tipo_vehiculo"];
            $tipo=$row["tipo"];
            $km=number_format($row["km"]);
            $observaciones_gral=$row["observaciones"];
            $diagnostico_gral=$row["diagnostico"];
            $fecha=$row["fecha"];
            $estatus=$row["estatus"];

            if($tipo==1){
            $tipo="PREVENTIVA";
            }
            else{
              $tipo="CORRECTIVA";
            }

            if($km==0){
              $km="NA";
            }
             switch ($estatus) {
                            case 1:
$estatus_color=".estatus {color:#fff; background-color: #1F9E49;}";
$estatus_tit="BUENO";
$estatus_t="<td class='estatus'><b>No requiere mantenimiento</b></td>";
                            break;
                            case 2:
$estatus_color=".estatus {color:#fff; background-color: #E3B726;}";
$estatus_tit="REGULAR";
$estatus_t="<td class='estatus'><b>Requiere mantenimiento preventivo</b></td>";                           
                            break;
                            case 3:
$estatus_color=".estatus {color:#fff; background-color: #D13939;}";
$estatus_tit="MALO";
$estatus_t="<td class='estatus'><b>REQUIERE MANTENIMIENTO URGENTE</b></td>";
                            break;
                          }
          }
                          switch ($tipo_vehiculo) {
                            case 1:
$sql="SELECT * FROM unidad WHERE id_unidad='$id_vehiculo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $nombre=$row["nombre"];
            $placa=$row["placas"];
            $marca=$row["marca"];
            $submarca=$row["submarca"];
            $serie=$row["serie"];
            $modelo=$row["modelo"];
            $img_llantas="vehiculo";
            $total_llantas=10;
          }
          $datos_vehiculo='
<table>
<thead><tr>
<th>NOMBRE</th>
<th>PLACA</th>
<th>MARCA</th>
<th>SERIE</th>
<th>MODELO</th>
</tr></thead>
<tbody>
<tr>
<td class="b">'.$nombre.'</td>
<td class="b">'.$placa.'</td>
<td class="b">'.$marca.' '.$submarca.'</td>
<td class="b">'.$serie.'</td>
<td class="b">'.$modelo.'</td>
</tr></tbody></table>';
                            break;
                            case 2:
$sql="SELECT * FROM motos WHERE id_moto='$id_vehiculo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {

            $nombre=$row["nombre"];
            $placa=$row["placas"];
            $marca=$row["marca"];
            $serie=$row["serie"];
            $modelo=$row["modelo"];
            $img_llantas="moto";
            $total_llantas=2;
          $datos_vehiculo='
<table>
<thead><tr>
<th>NOMBRE</th>
<th>PLACA</th>
<th>MARCA</th>
<th>SERIE</th>
<th>MODELO</th>
</tr></thead>
<tbody>
<tr>
<td class="b">'.$nombre.'</td>
<td class="b">'.$placa.'</td>
<td class="b">'.$marca.'</td>
<td class="b">'.$serie.'</td>
<td class="b">'.$modelo.'</td>
</tr></tbody></table>';
          }
                              break;
                            case 3:
$sql="SELECT * FROM montacargas WHERE id_montacargas='$id_vehiculo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $nombre=$row["nombre"];
            $combustible=$row["combustible"];
            $marca=$row["marca"];
            $serie=$row["serie"];
            $modelo=$row["modelo"];
            $img_llantas="montacargas";
            $total_llantas=4;
          $datos_vehiculo='
<table>
<thead><tr>
<th>NOMBRE</th>
<th>MARCA</th>
<th>SERIE</th>
<th>MODELO</th>
<th>COMBUSTIBLE</th>
</tr></thead>
<tbody>
<tr>
<td class="b">'.$nombre.'</td>
<td class="b">'.$marca.'</td>
<td class="b">'.$serie.'</td>
<td class="b">'.$modelo.'</td>
<td class="b">'.$combustible.'</td>
</tr></tbody></table>';
          }
                              break;
                            case 4:
$sql="SELECT * FROM dolly WHERE id_dolly='$id_vehiculo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $suspension=$row["suspension"];
            $marca=$row["marca"];
            $serie=$row["serie"];
            $modelo=$row["modelo"];
            $economico=$row["economico"];
            $img_llantas="dolly";
            $total_llantas=8;
          $datos_vehiculo='
<table>
<thead><tr>
<th>ECONÓMICO</th>
<th>MARCA</th>
<th>SERIE</th>
<th>MODELO</th>
<th>SUSPENSIÓN</th>
</tr></thead>
<tbody>
<tr>
<td class="b">'.$economico.'</td>
<td class="b">'.$marca.'</td>
<td class="b">'.$serie.'</td>
<td class="b">'.$modelo.'</td>
<td class="b">'.$suspension.'</td>
</tr></tbody></table>';
          }
                              break;
                            case 5:
$sql="SELECT * FROM chasis WHERE id_chasis='$id_vehiculo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $nombre=$row["nombre"];
            $placa=$row["placas"];
            $marca=$row["marca"];
            $serie=$row["serie"];
            $modelo=$row["modelo"];
            $economico=$row["economico"];
            $img_llantas="chasis";
            $total_llantas=8;
          $datos_vehiculo='
<table>
<thead><tr>
<th>ECONÓMICO</th>
<th>NOMBRE</th>
<th>PLACA</th>
<th>MARCA</th>
<th>SERIE</th>
<th>MODELO</th>
</tr></thead>
<tbody>
<tr>
<td class="b">'.$economico.'</td>
<td class="b">'.$nombre.'</td>
<td class="b">'.$placa.'</td>
<td class="b">'.$marca.'</td>
<td class="b">'.$serie.'</td>
<td class="b">'.$modelo.'</td>
</tr></tbody></table>';
          }
                              break;
                        } 

          $llantas='
<table>
<thead><tr>
<th>LLANTA</th>
<th>OBSERVACIONES</th>
<th>ESTRUCTURA</th>
</tr></thead>
<tbody>';
          $sql="SELECT * FROM llantas WHERE id_servicio='$folio'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll();
        $conta=1; 
          foreach ($rows as $row) {
            $llanta=$row["llanta"];
            $observaciones=$row["observaciones"];
            if($conta==1){ 
          $llantas=$llantas.'
<tr>
<td>'.$llanta.'</td>
<td>'.$observaciones.'</td>
<td rowspan="'.$total_llantas.'"><center><img src="../../../images/llantas/'.$img_llantas.'.png" width="175"></center></td>
</tr>';
$conta=0;
          }else {
          $llantas=$llantas.'
<tr>
<td>'.$llanta.'</td>
<td>'.$observaciones.'</td>
</tr>';   }

          }
          $llantas=$llantas.'</tbody></table>';

$imagenes='
<table>
<tbody>';
    $sql="SELECT * FROM imagenes WHERE id_servicio='$folio'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll();
        $conta=1; 
          foreach ($rows as $row) {
            $url=$row["url"];
            if($conta==1){ 
          $imagenes=$imagenes.'
<tr>
<td class="b"><center><img src="../../../imagenes_servicios/'.$url.'" height="174" width="310"></center></td>';
$conta=0;
          }else {
          $imagenes=$imagenes.'
<td class="b"><center><img src="../../../imagenes_servicios/'.$url.'" height="174" width="310"></center></td></tr>';
$conta=1;
   }
          }
          if($conta==1){
            $imagenes=$imagenes.'</tbody></table>';
          }
          else{
           $imagenes=$imagenes.'<td class="b"></td></tr></tbody></table>'; 
          }

$datos_servicio_titulo='<table>
<thead><tr>
<th>SERVICIO</th>
<th style="background-color: #1F9E49; width:50px;">BUENO</th>
<th style="background-color: #E3B726; width:50px;">REGULAR</th>
<th style="background-color: #D13939; width:50px;">MALO</th>
<th>OBSERVACIONES</th>
</tr></thead><tbody>';
$categoria_comp="";
 $datos_servicio="";
$sql="SELECT * FROM servicios WHERE id_mantenimiento='$folio'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $id_servicio=$row["id_servicio"];
            $id_catalogo=$row["id_catalogo"];
            $diagnostico=$row["diagnostico"];
            $estatus_ser=$row["estatus"];
            $sql="SELECT * FROM catalogo_servicios WHERE id_catalogo='$id_catalogo'";
      $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $nombre=$row["nombre"];
            $categoria=$row["categoria"]; 
          }
          if($categoria!=$categoria_comp){ 
  $datos_servicio=$datos_servicio.'<tr><td><b>'.$categoria.':</b></td><td></td><td></td><td></td><td></td></tr>';
              }
              $categoria_comp=$categoria;

if($estatus_ser==1){
$est="<tr><td><small>".$nombre."</small></td><td style='color:#fff; background-color: #1F9E49;'></td><td></td><td></td><td><small>".$diagnostico."</small></td></tr>";
}
else if($estatus_ser==2){
$est="<tr><td><small>".$nombre."</small></td><td></td><td style='color:#fff; background-color: #E3B726;'></td><td></td><td><small>".$diagnostico."</small></td></tr>";
}else if($estatus_ser==3){
$est="<tr><td><small>".$nombre."</small></td><td></td><td></td><td style='color:#fff; background-color: #D13939;'></td><td><small>".$diagnostico."</small></td></tr>";
                          }
$datos_servicio=$datos_servicio."".$est;
          }

  $datos_servicio_c=$datos_servicio_titulo."".$datos_servicio.'</tbody></table>';

$generales='
<table>
<thead><tr>
<th >FECHA Y HORA</th>
<th >TIPO</th>
<th >KILOMETRAJE</th>
<th class="estatus">'.$estatus_tit.'</th>
</tr></thead>
<tbody><tr>
<td class="b">'.date("d/m/Y h:iA",strtotime($fecha)).'</td>
<td class="b">'.$tipo.'</td>
<td class="b">'.$km.' KM</td>
'.$estatus_t.'
</tr></tbody></table>';

$obs='
<table>
<thead><tr>
<th >CAUSAS Y OBSERVACIONES</th>
<th >DIAGNOSTICO DE TALLER</th>
</tr></thead>
<tbody><tr>
<td class="b">'.$observaciones_gral.'</td>
<td class="b">'.$diagnostico_gral.'</td>
</tr></tbody></table>';

$html= '<html> 
                         <head> 
                               <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
                               <title>Mantenimiento folio: '.$folio.' PDF</title> 
                         <link rel="shortcut icon" href="../../../images/favicon.png"/>
                         </head> 
<STYLE type="text/css">
body {
  font: Helvetica, Verdana, Calibri, Arial, Sans-serif;
}
 
p {
  font-size: 13px;
}
.p{
  font-size: 13px;
}
.just{ 
text-align: justify;

}
  .derecha {text-align: right}

.tabla2 {
 width: 700px;
  border: 1px groove;
  background: #DBDBDBD;
  padding: 0px 0px 0px 20px;
}

.tabla{
 width: 700px;
} 

.tabla td{
  border: 1px groove;
  padding: 0px 1px 0px 1px;
  background: #DBDBDBD;
}

.tabla3 td{
  border: 1px groove;
  padding: 0px 10px 0px 10px;
}

td.blanco {
  background: #ffffff;
}
td.azul {
  background: #DBDBDBD;
}

.tabla3 {
 width: 700px;
}
h4{
  font-size: 14px;
}
table { border-collapse: collapse; text-align: left; width: 100%; }
{background: #fff; overflow: hidden; border-radius:25px;}
table td, table th { padding: 5px 9px;}
table thead th {background-color:gray; color:#FFFFFF; font-size: 13px; font-weight: bold; border-left: 0px solid #A3A3A3; } 
table thead th:first-child { border: none; }
table tbody td { color: #000000; font-size: 12px;border-bottom: 1px solid #EBF9FF;font-weight: normal; }
table tbody .alt td { background: #EAEEFF; color: #3D3D3D; }
.azul{background-color:#103a64; font-size: 15px;}
.azulG{background-color:#103a64; font-size: 20px;}
.b{background-color:#EEEEEE;}
.d { border-radius: 1em 80px 40px 80px;}
'.$estatus_color.'
 </STYLE>
                         <body> 
<center>
<div style=" width: 660px; border-radius: 5px 5px 5px 5px;
padding: 1em;
border: 0px solid #103a64;"> 
<table><tbody>
<tr>
<td><img src="../../../images/logo.png" width="250">
<img src="../../../images/iso.png" width="190"></td>
<td><br><BR><h2>FOLIO <span style="color:#B40404">NO. '.$folio.'</span> </h2>
</td></tr></table><hr>
<table>
<thead><tr><th CLASS="azulG"><center>SERVICIO DE MANTENIMIENTO UNIDAD</center></th></tr></thead></table>
'.$generales.'<br>
<table><thead><tr><th class="azul"><center>DATOS DE LA UNIDAD VIRIFICADA</center></th></tr></thead></table>
'.$datos_vehiculo.'<br>
<table class="d"><thead><tr><th class="azul"><center>SERVICIOS REALIZADOS</center></th></tr></thead></table>
'.$datos_servicio_c.'<br>
<table class="d"><thead><tr><th class="azul"><center>FOTOGRAFÍAS DEL SERVICIO</center></th></tr></thead></table>
'.$imagenes.'<br>
<table class="d"><thead><tr><th class="azul"><center>LLANTAS</center></th></tr></thead></table>
'.$llantas.'<br>
<table class="d"><thead><tr><th class="azul"><center>OBSERVACIONES GENERALES</center></th></tr></thead></table>
'.$obs.'<br><br><br><br><br>
<center>________________________________<br>
<br><small><b>Nombre y firma del operador</b></small></center>
</div>
                         </body> 
                     </html>'; 
                     ?>