<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
    $(document).ready(function() {
      tabla("Listado de operarios");
    });
  </script>
  <table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre</th>
        <th>F. Expiración Licencia</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Estatus</th>
        <th>Disponibilidad</th>
      </tr>
    </thead>

    <tbody>
      <? 
        $sql="SELECT * FROM operarios";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $id_operario=$row["id_operario"];
          $nombre=$row["nombre"];
          $apaterno=$row["apaterno"];
          $amaterno=$row["amaterno"];
          $nombre_completo=$row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"];
          $fecha_exp=$row["fecha_exp"];
          $telefono=$row["telefono"];
          $direccion=$row["direccion"];
          $email=$row["email"];
          $disponibilidad=$row["disponibilidad"];
          $estatus=$row["estatus"];

          if($disponibilidad==1){
            $span_disponibilidad='<span class="btn btn-success btn-xs">DISPONIBLE</span>';
          }else if($disponibilidad==2){
            $span_disponibilidad='<span class="btn btn-info btn-xs">REALIZANDO VIAJE</span>';
          }else if($disponibilidad==3){
            $span_disponibilidad='<span class="btn btn-danger btn-xs">INDISPUESTO</span>';
          }

          $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_operarios" data-whatever="@mdo" id="modificar_operarios"
            id_operario="'.$id_operario.'"
            nombre="'.$nombre.'"
            apaterno="'.$apaterno.'"
            amaterno="'.$amaterno.'"
            fecha_exp="'.$fecha_exp.'"
            telefono="'.$telefono.'"
            direccion="'.$direccion.'"
            email="'.$email.'"
            disponibilidad="'.$disponibilidad.'"
            estatus="'.$estatus.'"
            ><i class="far fa-edit"></i>Editar</button>';

          if ($estatus==1) {
            $estatus='<span class="btn btn-success btn-xs">ACTIVO</span>';
          }else{
            $estatus='<span class="btn btn-danger btn-xs">INACTIVO</span>';
          }
        
      ?>
      <tr>
        <td><center><? echo $editar; ?></center></td>
        <td><? echo $nombre_completo; ?></td>
        <td><? echo $fecha_exp; ?></td>
        <td><? echo $telefono; ?></td>
        <td><? echo $direccion; ?></td>
        <td><? echo $email; ?></td>
        <td><? echo $span_disponibilidad; ?></td>
        <td><? echo $estatus; ?></td>
      </tr>
      <? } ?>
    </tbody>
     <tfoot>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre</th>
        <th>F. Expiración Licencia</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Estatus</th>
        <th>Disponibilidad</th>
      </tr>
    </tfoot>
  </table>
</div>
