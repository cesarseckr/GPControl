<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
  $(document).ready(function() {
tabla("Listado de dolly");
});
</script>
<table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="noExport">Editar</th>
      <th>Último servicio</th>
      <th>Fecha de servicio</th>
      <th>Estatus</th>
      <th>No. económico</th>
      <th>Serie</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Suspensión</th>
    </tr>
  </thead>
  <tbody>
    <? 
      $sql="SELECT * FROM dolly";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_dolly=$row["id_dolly"];
       $economico=$row["economico"];
       $marca=$row["marca"];
       $suspension=$row["suspension"];
       $serie=$row["serie"];
       $modelo=$row["modelo"];
       //Bloque estatus
       $fecha="NR";
       $estatus=0;
       $estatus_act="NR";
       $km="NR";

      $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_dolly' and tipo_vehiculo=4 ORDER BY id_mantenimiento DESC LIMIT 1";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_mantenimiento=$row["id_mantenimiento"];
       $km=number_format($row["km"])." km";
       $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
       $estatus=$row["estatus"];
        }

     if($estatus==0){
          $estatus_act='<span class="btn btn-primary btn-xs">NO REGISTRADO</span>';
       }
     else if($estatus==1){
          $estatus_act='<span class="btn btn-success btn-xs">BUEN ESTADO</span>';
       }
     else if($estatus==2){
          $estatus_act='<span class="btn btn-warning btn-xs">SERVICIO PRÓXIMO</span>';
       }
     else if($estatus==3){
          $estatus_act='<span class="btn btn-danger btn-xs">SERVICIO URGENTE</span>';
       }

     if($estatus==0){
      $pdf='<form target="_blank" action="pdf/mantenimientoE.php" method="POST"><input name="id" value="'.$id_mantenimiento.'" style="display:none;"><button class="btn btn-danger btn-sm btn-rounded" type="submit" disabled>
       <i class="fa fa-file-pdf"></i> PDF</button></form>';
     }
     else{
      $pdf='<form target="_blank" action="pdf/mantenimientoE.php" method="POST"><input name="id" value="'.$id_mantenimiento.'" style="display:none;"><button class="btn btn-danger btn-sm btn-rounded" type="submit">
       <i class="fa fa-file-pdf"></i> PDF</button></form>';
     }
       $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_dolly" data-whatever="@mdo" id="modificar_dol"
       id_dolly="'.$id_dolly.'"
       economico="'.$economico.'"
       suspension="'.$suspension.'"
       marca="'.$marca.'"
       serie="'.$serie.'"
       modelo="'.$modelo.'"
       ><i class="far fa-edit"></i>Editar</button>';
      
    ?>
    <tr>
      <td><center><? echo $editar; ?></center></td>
      <td><center><? echo $pdf; ?></center></td>
      <td><? echo $fecha; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
      <td><? echo $economico; ?></td>
      <td><? echo $serie; ?></td>
      <td><? echo $marca; ?></td>
      <td><? echo $modelo; ?></td>
      <td><? echo $suspension; ?></td>
    </tr>
    <? } ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="noExport">Editar</th>
      <th>Último servicio</th>
      <th>Fecha de servicio</th>
      <th>Estatus</th>
      <th>No. económico</th>
      <th>Serie</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Suspensión</th>
    </tr>
  </tfoot>
</table>
</div>
