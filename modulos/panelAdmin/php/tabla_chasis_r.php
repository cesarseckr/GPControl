  <div id="fdesc">
  <small><b>Ningún filtro aplicado</b> realiza una busqueda para encontrar más datos - Mostrando últimos <b>300</b> registros (<b>Filtros aplicables:</b> Fecha, Estatus y Vehículo)</small>
  </div>
  <div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
  $(document).ready(function() {
tabla("Listado de mantenimientos");
});
</script>
<table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="noExport">Exportar</th>
      <th class="noExport">Imágenes</th>
      <th>Nombre</th>
      <th>Placa</th>
      <th>Fecha</th>
      <th>Tipo de revisión</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>
    <? 
       if(isset($_SESSION['filtro'])){
      $ffecha_ini=$_SESSION['ffecha_ini'];
      $ffecha_fin=$_SESSION['ffecha_fin'];
      $fvehiculo=$_SESSION['fvehiculo'];
      $festatus=$_SESSION['festatus'];
      $ftipo=$_SESSION['ftipo'];
      
      if($festatus!=""){
      $festatus="and estatus='$festatus'";
      }
      if($fvehiculo!=""){
      $fvehiculo="and id_vehiculo='$fvehiculo'";
      }
      if($ftipo!=""){
      $ftipo="and tipo='$ftipo'";
      }
      if($ffecha_ini!="" and $ffecha_fin==""){
      $ffecha="and fecha LIKE '%$ffecha_ini%'";
      }
      else if($ffecha_fin!="" and $ffecha_ini==""){
      $ffecha="and fecha LIKE '%$ffecha_fin%'";
      }
      else if($ffecha_fin!="" and $ffecha_ini!=""){
      $ffecha="and fecha BETWEEN '$ffecha_ini 00:00:00' AND '$ffecha_fin 23:59:59'";
      }

      $_SESSION['ffecha_ini']=null;
      $_SESSION['ffecha_fin']=null;
      $_SESSION['fvehiculo']=null;
      $_SESSION['festatus']=null;
      $_SESSION['ftipo']=null;
      $_SESSION['ffiltro']=null;
    }

      $sql="SELECT * FROM mantenimientos WHERE tipo_vehiculo=5 ".$fvehiculo." ".$ftipo." ".$ffecha." ".$festatus." ORDER BY id_mantenimiento DESC LIMIT 300";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_mantenimiento=$row["id_mantenimiento"];
       $id_unidad=$row["id_vehiculo"];
       $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
       $tipo=$row["tipo"];
       $estatus=$row["estatus"];
       $km=number_format($row["km"])." km";

      $sql="SELECT * FROM chasis WHERE id_chasis='$id_unidad'";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $nombre=$row["nombre"];
       $placa=$row["placas"];
       }

       if($tipo==1){
            $tipo="PREVENTIVA";
            }
            else{
              $tipo="CORRECTIVA";
            }
            
       //Bloque estatus
if($estatus==1){
          $estatus_act='<span class="btn btn-success btn-xs">BUEN ESTADO</span>';
       }
       else if($estatus==2){
          $estatus_act='<span class="btn btn-warning btn-xs">SERVICIO PRÓXIMO</span>';
       }
       else if($estatus==3){
          $estatus_act='<span class="btn btn-danger btn-xs">SERVICIO URGENTE</span>';
       }

              $pdf='<form target="_blank" action="pdf/mantenimientoE.php" method="POST"><input name="id" value="'.$id_mantenimiento.'" style="display:none;"><button class="btn btn-danger btn-sm btn-rounded" type="submit">
       <i class="fa fa-file-pdf"></i> PDF</button></form>';
      
       $foto='<button type="button" class="btn btn-primary btn-sm  btn-rounded" data-toggle="modal" data-target="#add_imagen_r" data-whatever="@mdo" id="add_imagen"
       id_servicio="'.$id_mantenimiento.'"
       ><i class="fa fa-camera"></i>Agregar</button>';
      
    ?>
    <tr>
      <td><center><? echo $pdf; ?></center></td>
      <td><center><? echo $foto; ?></center></td>
      <td><? echo $nombre; ?></td>
      <td><? echo $placa; ?></td>
      <td><? echo $fecha; ?></td>
      <td><? echo $tipo; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
    </tr>
    <? } ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="noExport">Exportar</th>
      <th class="noExport">Imágenes</th>
      <th>Nombre</th>
      <th>Placa</th>
      <th>Fecha</th>
      <th>Tipo de revisión</th>
      <th>Estatus</th>
    </tr>
  </tfoot>
</table>
</div>
