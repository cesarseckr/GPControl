<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
    $(document).ready(function() {
      tabla("Listado de viajes");
    });
  </script>
  <table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="noExport">Editar</th>
        <th class="noExport">Reg. Salida</th>
        <th class="noExport">Reg. Entrada</th>
        <th class="noExport">Checklist</th>
        <th>Fecha</th>
        <th>Destino</th>
        <th>Operario</th>
        <th>Estatus</th>
        <th class="noExport">Cancelar</th>
      </tr>
    </thead>
    <tbody>
      <? 
        $sql="SELECT * FROM viajes";
        $sq= $db->query($sql);  
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $id_viaje=$row["id_viaje"];
          $destino=$row["destino"];
          $fecha=$row["fecha"];
          $estatus=$row["estatus"];
          $id_operario=$row["id_operario"];
          $id_unidad=$row["id_unidad"];
          $id_moto=$row["id_moto"];
          $id_montacargas=$row["id_montacargas"];
          $id_dolly=$row["id_dolly"];
          $id_chasis=$row["id_chasis"];
          $comentario=$row["comentario"];

          $sql="SELECT * FROM operarios WHERE id_operario='$id_operario'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_operario=$row["id_operario"];
            $nombre_operario=$row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"];
          }

          $sql="SELECT * FROM unidad WHERE id_unidad='$id_unidad'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_unidad=$row["id_unidad"];
            $nombre_unidad=$row["nombre"];
          }

          $sql="SELECT * FROM motos WHERE id_moto='$id_moto'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_moto=$row["id_moto"];
            $nombre_moto=$row["nombre"];
          }

          $sql="SELECT * FROM montacargas WHERE id_montacargas='$id_montacargas'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_montacargas=$row["id_montacargas"];
            $nombre_montacargas=$row["nombre"];
          }

          $sql="SELECT * FROM dolly WHERE id_dolly='$id_dolly'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_dolly=$row["id_dolly"];
            $nombre_dolly=$row["economico"];
          }

          $sql="SELECT * FROM chasis WHERE id_chasis='$id_chasis'";
          $sq= $db->query($sql);
          $rows=$sq->fetchAll();
          foreach ($rows as $row) {
            $id_chasis=$row["id_chasis"];
             $nombre_chasis=$row["economico"];
          }

          if($estatus==1){
            $editar='<button class="btn btn-primary btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_viaje" data-whatever="@mdo" id="btn_modificar_viaje"
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              comentario="'.$comentario.'">
                <i class="far fa-edit"></i>Editar
              </button>';
            $salida='<button class="btn btn-warning btn-sm  btn-rounded" id="btn_registro_salida" 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-out-alt"></i>R. Salida
              </button>';

            $entrada='<button class="btn btn-info btn-sm  btn-rounded" id="btn_registro_entrada" 
              id_viaje="'.$id_viaje.'"
               id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'" disabled>
                <i class="fas fa-sign-in-alt"></i>R. Entrada
              </button>';
            $checklist='<button class="btn btn-success btn-sm  btn-rounded" id="btn_viajes_checklist" 
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              nombre_unidad="'.$nombre_unidad.'"
              nombre_moto="'.$nombre_moto.'"
              nombre_montacargas="'.$nombre_montacargas.'"
              nombre_dolly="'.$nombre_dolly.'"
              nombre_chasis="'.$nombre_chasis.'"
              comentario="'.$comentario.'" disabled>
                <i class="fas fa-clipboard-check"></i>Checklist
              </button>';
            $estatus_act='<span class="btn btn-primary btn-xs">EN ESPERA</span>';
            $cancelar='<button class="btn btn-danger btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_canc_viaje" data-whatever="@mdo" id="btn_can_viaje" id_viaje="'.$id_viaje.'">
              <i class="fas fa-times-circle"></i>Cancelar
            </button>';

          }else if($estatus==2){
            $editar='<button class="btn btn-primary btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_viaje" data-whatever="@mdo" id="btn_modificar_viaje"
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              comentario="'.$comentario.'">
                <i class="far fa-edit"></i>Editar
              </button>';
            
            $salida='<button class="btn btn-warning btn-sm  btn-rounded" id="btn_registro_salida" 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-out-alt"></i>R. Salida
              </button>';

            $entrada='<button class="btn btn-info btn-sm  btn-rounded" id="btn_registro_entrada" 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-in-alt"></i>R. Entrada
              </button>';
            $checklist='<button class="btn btn-success btn-sm  btn-rounded" id="btn_viajes_checklist" 
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              nombre_unidad="'.$nombre_unidad.'"
              nombre_moto="'.$nombre_moto.'"
              nombre_montacargas="'.$nombre_montacargas.'"
              nombre_dolly="'.$nombre_dolly.'"
              nombre_chasis="'.$nombre_chasis.'"
              comentario="'.$comentario.'" disabled>
                <i class="fas fa-clipboard-check"></i>Checklist
              </button>';
            $estatus_act='<span class="btn btn-success btn-xs">EJECUCIÓN</span>';
            $cancelar='<button class="btn btn-danger btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_canc_viaje" data-whatever="@mdo" id="btn_can_viaje" id_viaje="'.$id_viaje.'">
              <i class="fas fa-times-circle"></i>Cancelar
            </button>';
          }else if($estatus==3){
            $editar='<button class="btn btn-primary btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_viaje" data-whatever="@mdo" id="btn_modificar_viaje"
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              comentario="'.$comentario.'"
              disabled>
                <i class="far fa-edit"></i>Editar
              </button>';
            
            $salida='<button class="btn btn-warning btn-sm  btn-rounded" id="btn_registro_salida" disabled 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-out-alt"></i>R. Salida
              </button>';

            $entrada='<button class="btn btn-info btn-sm  btn-rounded" id="btn_registro_entrada" 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-in-alt"></i>R. Entrada
              </button>';
            $checklist='<button class="btn btn-success btn-sm  btn-rounded" id="btn_viajes_checklist" 
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              nombre_unidad="'.$nombre_unidad.'"
              nombre_moto="'.$nombre_moto.'"
              nombre_montacargas="'.$nombre_montacargas.'"
              nombre_dolly="'.$nombre_dolly.'"
              nombre_chasis="'.$nombre_chasis.'"
              comentario="'.$comentario.'">
                <i class="fas fa-clipboard-check"></i>Checklist
              </button>';
            $estatus_act='<span class="btn btn-warning btn-xs">FINALIZADO</span>';
            $cancelar='<button class="btn btn-danger btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_canc_viaje" data-whatever="@mdo" id="btn_can_viaje" id_viaje="'.$id_viaje.'" disabled>
              <i class="fas fa-times-circle"></i>Cancelar
            </button>';
          }else if($estatus==4){
            $editar='<button class="btn btn-primary btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_viaje" data-whatever="@mdo" id="btn_modificar_viaje"
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              comentario="'.$comentario.'"
              disabled>
                <i class="far fa-edit"></i>Editar
              </button>';
            $salida='<button class="btn btn-warning btn-sm  btn-rounded" id="btn_registro_salida" disabled 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-out-alt"></i>R. Salida
              </button>';

            $entrada='<button class="btn btn-info btn-sm  btn-rounded" id="btn_registro_entrada" 
              id_viaje="'.$id_viaje.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'">
                <i class="fas fa-sign-in-alt"></i>R. Entrada
              </button>';
            $checklist='<button class="btn btn-success btn-sm  btn-rounded" id="btn_viajes_checklist" 
              id_viaje="'.$id_viaje.'"
              destino="'.$destino.'"
              fecha="'.$fecha.'"
              estatus="'.$estatus.'"
              id_operario="'.$id_operario.'"
              id_unidad="'.$id_unidad.'"
              id_moto="'.$id_moto.'"
              id_montacargas="'.$id_montacargas.'"
              id_dolly="'.$id_dolly.'"
              id_chasis="'.$id_chasis.'"
              nombre_unidad="'.$nombre_unidad.'"
              nombre_moto="'.$nombre_moto.'"
              nombre_montacargas="'.$nombre_montacargas.'"
              nombre_dolly="'.$nombre_dolly.'"
              nombre_chasis="'.$nombre_chasis.'"
              comentario="'.$comentario.'">
                <i class="fas fa-clipboard-check"></i>Checklist
              </button>';
            $estatus_act='<span class="btn btn-danger btn-xs">CANCELADO</span>';
            $cancelar='<button class="btn btn-danger btn-sm  btn-rounded" data-toggle="modal" data-target="#mod_canc_viaje" data-whatever="@mdo" id="btn_can_viaje" id_viaje="'.$id_viaje.'" disabled>
              <i class="fas fa-times-circle"></i>Cancelar
            </button>';
          }
           
      ?>
      <tr>
        <td><center><? echo $editar; ?></center></td>
        <td><center><? echo $salida; ?></center></td>
        <td><center><? echo $entrada; ?></center></td>
        <td><center><? echo $checklist; ?></center></td>
        <td><? echo $fecha; ?></td>
        <td><? echo $destino; ?></td>
        <td><? echo $nombre_operario; ?></td>
        <td><? echo $estatus_act; ?></td>
        <td><center><? echo $cancelar; ?></center></td>
      </tr>
      <? } ?>
    </tbody>
    
    <tfoot>
      <tr>
        <th class="noExport">Editar</th>
        <th class="noExport">Reg. Salida</th>
        <th class="noExport">Reg. Entrada</th>
        <th class="noExport">Checklist</th>
        <th>Fecha</th>
        <th>Destino</th>
        <th>Operario</th>
        <th>Estatus</th>
        <th class="noExport">Cancelar</th>
      </tr>
    </tfoot>

  </table>
</div>
