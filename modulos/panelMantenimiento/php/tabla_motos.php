<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
  $(document).ready(function() {
tabla("Listado de motocicletas");
});
</script>
<table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="noExport">Editar</th>
      <th>Último servicio</th>
      <th>Fecha de servicio</th>
      <th>Kilometraje</th>
      <th>Estatus</th>
      <th>Nombre</th>
      <th>Placas</th>
      <th>Serie</th>
      <th>Marca</th>
      <th>Modelo</th>
    </tr>
  </thead>
  <tbody>
    <? 
      $sql="SELECT * FROM motos";
      $sq= $db->query($sql);
      $rows=$sq->fetchAll();
      foreach ($rows as $row) {
       $id_moto=$row["id_moto"];
       $nombre=$row["nombre"];
       $placas=$row["placas"];
       $marca=$row["marca"];
       $serie=$row["serie"];
       $modelo=$row["modelo"];
       //Bloque estatus
        $fecha="NR";
       $estatus=0;
       $estatus_act="NR";
       $km="NR";

      $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_moto' and tipo_vehiculo=2 ORDER BY id_mantenimiento DESC LIMIT 1";
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

       $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_moto" data-whatever="@mdo" id="modificar_mot"
       id_moto="'.$id_moto.'"
       nombre="'.$nombre.'"
       placas="'.$placas.'"
       marca="'.$marca.'"
       serie="'.$serie.'"
       modelo="'.$modelo.'"
       ><i class="far fa-edit"></i>Editar</button>';
      
    ?>
    <tr>
      <td><center><? echo $editar; ?></center></td>
      <td><center><? echo $pdf; ?></center></td>
      <td><? echo $fecha; ?></td>
      <td><? echo $km; ?></td>
      <td><center><? echo $estatus_act; ?></center></td>
      <td><? echo $nombre; ?></td>
      <td><? echo $placas; ?></td>
      <td><? echo $serie; ?></td>
      <td><? echo $marca; ?></td>
      <td><? echo $modelo; ?></td>
    </tr>
    <? } ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="noExport">Editar</th>
      <th>Último servicio</th>
      <th>Fecha de servicio</th>
      <th>Kilometraje</th>
      <th>Estatus</th>
      <th>Nombre</th>
      <th>Placas</th>
      <th>Serie</th>
      <th>Marca</th>
       <th>Modelo</th>
    </tr>
  </tfoot>
</table>
</div>
