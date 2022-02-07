<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
  $(document).ready(function() {
tabla("Listado de vehículos");
});
</script>
<table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="noExport">Revisar</th>
      <th>Nombre</th>
      <th>Modelo</th>
      <th>Tipo</th>
      <th>Km desde última revisión</th>
      <th>Último servicio</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>
    <? 
    $hoy=date("Y-m-d");

      $sql="SELECT * FROM unidad";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_unidad=$row["id_unidad"];
       $nombre=$row["nombre"];
       $marca=$row["marca"];
       $serie=$row["serie"];
       $modelo=$row["modelo"];
       //Bloque estatus
       $estatus_act="NR";
       $km="NR";
       $km1=0;
       $km2=0;
       $km_total="NR";
       $km_total_comp=0;
       $comp=0;
       $comp_ser=0;
       $tipo_vehiculo="Vehículo";
      $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_unidad' and tipo_vehiculo=1 ORDER BY id_mantenimiento ASC LIMIT 2";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       if($comp==1){
       $id_mantenimiento=$row["id_mantenimiento"];
       $km=number_format($row["km"])." km";
       $km1=$row["km"];
       $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
       $fecha_comp=date("Y-m-d",strtotime($row["fecha"]));
       $estatus=$row["estatus"];
       }
       else{
      $km2=$row["km"];
      $comp++;
       }
        }
      if($km1!=0 and $km2!=0){
        $km_total=number_format($km1-$km2)." km";
        $km_total_comp=$km1-$km2;
      }

      $d1=new DateTime($hoy);
      $d2=new DateTime($fecha_comp);
      $meses=$d1->diff($d2);
      $meses=$meses->format("%m");
     if($km_total_comp>=10000){
      $estatus_act='<span class="btn btn-danger btn-xs">REQUIERE SERVICIO POR KILOMETRAJE</span>';
      $comp_ser=1; 
       }
     else if($meses>=6){
      $estatus_act='<span class="btn btn-warning btn-xs">REQUIERE SERVICIO POR TIEMPO</span>';
       $comp_ser=1;
       }

    if($meses==0){
      $meses="Hace menos de 1 mes";
      }
    else{
      $meses="Hace más de ".$meses." meses";
      }

       $revisar='<a href="reVehiculos.php" class="btn btn-primary btn-sm  btn-rounded"><i class="far fa-edit"></i>Revisar</a>';
      if($comp==1 and $comp_ser==1){ 
    ?>
    <tr>
      <td><center><? echo $revisar; ?></center></td>
      <td><? echo $nombre; ?></td>
      <td><? echo $modelo; ?></td>
      <td><? echo $tipo_vehiculo; ?></td>
      <td><? echo $km_total; ?></td>
      <td><? echo $meses; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
      </tr>
    <? 
       } 
       }

          $hoy=date("Y-m-d");

      $sql="SELECT * FROM motos";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_unidad=$row["id_moto"];
       $nombre=$row["nombre"];
       $marca=$row["marca"];
       $serie=$row["serie"];
       $modelo=$row["modelo"];
       //Bloque estatus
       $estatus_act="NR";
       $km="NR";
       $km1=0;
       $km2=0;
       $km_total="NR";
       $km_total_comp=0;
       $comp=0;
       $comp_ser=0;
       $tipo_vehiculo="Motocicleta";
      $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_unidad' and tipo_vehiculo=2 ORDER BY id_mantenimiento ASC LIMIT 2";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       if($comp==1){
       $id_mantenimiento=$row["id_mantenimiento"];
       $km=number_format($row["km"])." km";
       $km1=$row["km"];
       $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
       $fecha_comp=date("Y-m-d",strtotime($row["fecha"]));
       $estatus=$row["estatus"];
       }
       else{
      $km2=$row["km"];
      $comp++;
       }
        }
      if($km1!=0 and $km2!=0){
        $km_total=number_format($km1-$km2)." km";
        $km_total_comp=$km1-$km2;
      }

      $d1=new DateTime($hoy);
      $d2=new DateTime($fecha_comp);
      $meses=$d1->diff($d2);
      $meses=$meses->format("%m");
     if($km_total_comp>=10000){
      $estatus_act='<span class="btn btn-danger btn-xs">REQUIERE SERVICIO POR KILOMETRAJE</span>';
      $comp_ser=1; 
       }
     else if($meses>=6){
      $estatus_act='<span class="btn btn-warning btn-xs">REQUIERE SERVICIO POR TIEMPO</span>';
       $comp_ser=1;
       }

    if($meses==0){
      $meses="Hace menos de 1 mes";
      }
    else{
      $meses="Hace más de ".$meses." meses";
      }

       $revisar='<a href="reMotos.php" class="btn btn-primary btn-sm  btn-rounded"><i class="far fa-edit"></i>Revisar</a>';
      if($comp==1 and $comp_ser==1){ 
    ?>
    <tr>
      <td><center><? echo $revisar; ?></center></td>
      <td><? echo $nombre; ?></td>
      <td><? echo $modelo; ?></td>
      <td><? echo $tipo_vehiculo; ?></td>
      <td><? echo $km_total; ?></td>
      <td><? echo $meses; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
      </tr>
    <? 
       } 
       }
       $hoy=date("Y-m-d");

      $sql="SELECT * FROM montacargas";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_unidad=$row["id_montacargas"];
       $nombre=$row["nombre"];
       $marca=$row["marca"];
       $serie=$row["serie"];
       $modelo=$row["modelo"];
       //Bloque estatus
       $estatus_act="NR";
       $km="NR";
       $km1=0;
       $km2=0;
       $km_total="NR";
       $km_total_comp=0;
       $comp=0;
       $comp_ser=0;
       $tipo_vehiculo="Montacargas";
      $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_unidad' and tipo_vehiculo=3 ORDER BY id_mantenimiento ASC LIMIT 2";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       if($comp==1){
       $id_mantenimiento=$row["id_mantenimiento"];
       $km=number_format($row["km"])." km";
       $km1=$row["km"];
       $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
       $fecha_comp=date("Y-m-d",strtotime($row["fecha"]));
       $estatus=$row["estatus"];
       }
       else{
      $km2=$row["km"];
      $comp++;
       }
        }
      if($km1!=0 and $km2!=0){
        $km_total=number_format($km1-$km2)." km";
        $km_total_comp=$km1-$km2;
      }

      $d1=new DateTime($hoy);
      $d2=new DateTime($fecha_comp);
      $meses=$d1->diff($d2);
      $meses=$meses->format("%m");
     if($km_total_comp>=10000){
      $estatus_act='<span class="btn btn-danger btn-xs">REQUIERE SERVICIO POR KILOMETRAJE</span>';
      $comp_ser=1; 
       }
     else if($meses>=6){
      $estatus_act='<span class="btn btn-warning btn-xs">REQUIERE SERVICIO POR TIEMPO</span>';
       $comp_ser=1;
       }

    if($meses==0){
      $meses="Hace menos de 1 mes";
      }
    else{
      $meses="Hace más de ".$meses." meses";
      }

       $revisar='<a href="reMontacargas.php" class="btn btn-primary btn-sm  btn-rounded"><i class="far fa-edit"></i>Revisar</a>';
      if($comp==1 and $comp_ser==1){ 
    ?>
    <tr>
      <td><center><? echo $revisar; ?></center></td>
      <td><? echo $nombre; ?></td>
      <td><? echo $modelo; ?></td>
      <td><? echo $tipo_vehiculo; ?></td>
      <td><? echo $km_total; ?></td>
      <td><? echo $meses; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
      </tr>
    <? 
       } 
       }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="noExport">Revisar</th>
      <th>Nombre</th>
      <th>Modelo</th>
      <th>Tipo</th>
      <th>Km desde última revisión</th>
      <th>Último servicio</th>
      <th>Estatus</th>
    </tr>
  </tfoot>
</table>
</div>
