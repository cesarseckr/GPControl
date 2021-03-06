<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
    $(document).ready(function() {
      tabla("Listado de montacargas");
    });
  </script>
  <table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre</th>
        <th>Combustible</th>
        <th>Serie</th>
        <th>Marca</th>
        <th>Modelo</th>
        <!--<th>Estatus</th>-->
        <th>Disponibilidad</th>
      </tr>
    </thead>
    <tbody>
      <? 
        $sql="SELECT * FROM montacargas";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $id_montacargas=$row["id_montacargas"];
          $nombre=$row["nombre"];
          $combustible=$row["combustible"];
          $marca=$row["marca"];
          $serie=$row["serie"];
          $modelo=$row["modelo"];
          $disponibilidad=$row["disponibilidad"];
          //Bloque estatus
          $fecha="NR";
          $estatus=0;
          $estatus_act="NR";
          $km="NR";

          $sql="SELECT * FROM mantenimientos WHERE id_vehiculo='$id_montacargas' and tipo_vehiculo=3 ORDER BY id_mantenimiento DESC LIMIT 1";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_mantenimiento=$row["id_mantenimiento"];
            $km=number_format($row["km"])." km";
            $fecha=date("d/m/Y h:iA",strtotime($row["fecha"]));
            $estatus=$row["estatus"];
          }

          if($disponibilidad==1){
            $span_disponibilidad='<span class="btn btn-success btn-xs">DISPONIBLE EN PATIO</span>';
          }else if($disponibilidad==2){
            $span_disponibilidad='<span class="btn btn-secondary btn-xs">INDISPUESTO EN PATIO</span>';
          }else if($disponibilidad==3){
            $span_disponibilidad='<span class="btn btn-info btn-xs">REALIZANDO VIAJE</span>';
          }else if($disponibilidad==4){
            $span_disponibilidad='<span class="btn btn-warning btn-xs">EN REVISION</span>';
          }else if($disponibilidad==5){
            $span_disponibilidad='<span class="btn btn-danger btn-xs">EN MANTENIMIENTO</span>';
          }

          if($estatus==0){
            $estatus_act='<span class="btn btn-primary btn-xs">NO REGISTRADO</span>';
          }else if($estatus==1){
            $estatus_act='<span class="btn btn-success btn-xs">BUEN ESTADO</span>';
          }else if($estatus==2){
            $estatus_act='<span class="btn btn-warning btn-xs">SERVICIO PR??XIMO</span>';
          }else if($estatus==3){
            $estatus_act='<span class="btn btn-danger btn-xs">SERVICIO URGENTE</span>';
          }

          if($estatus==0){
            $pdf='<form target="_blank" action="pdf/mantenimientoE.php" method="POST"><input name="id" value="'.$id_mantenimiento.'" style="display:none;"><button class="btn btn-danger btn-sm btn-rounded" type="submit" disabled>
            <i class="fa fa-file-pdf"></i> PDF</button></form>';
          }else{
            $pdf='<form target="_blank" action="pdf/mantenimientoE.php" method="POST"><input name="id" value="'.$id_mantenimiento.'" style="display:none;"><button class="btn btn-danger btn-sm btn-rounded" type="submit">
            <i class="fa fa-file-pdf"></i> PDF</button></form>';
          }

          $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_montacargas" data-whatever="@mdo" id="modificar_montacargas"
            id_montacargas="'.$id_montacargas.'"
            nombre="'.$nombre.'"
            combustible="'.$combustible.'"
            marca="'.$marca.'"
            serie="'.$serie.'"
            modelo="'.$modelo.'"
            disponibilidad="'.$disponibilidad.'">
              <i class="far fa-edit"></i>Editar
            </button>';
      ?>
      <tr>
        <td><center><? echo $editar; ?></center></td>
        <td><? echo $nombre; ?></td>
        <td><? echo $combustible; ?></td>
        <td><? echo $serie; ?></td>
        <td><? echo $marca; ?></td>
        <td><? echo $modelo; ?></td>
        <!--<td><center><? echo $estatus_act; ?></center></td>-->
        <td><center><? echo $span_disponibilidad; ?></center></td>
      </tr>
      <? } ?>
    </tbody>
    <tfoot>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre</th>
        <th>Combustible</th>
        <th>Serie</th>
        <th>Marca</th>
        <th>Modelo</th>
        <!--<th>Estatus</th>-->
        <th>Disponibilidad</th>
      </tr>
    </tfoot>
  </table>
</div>
