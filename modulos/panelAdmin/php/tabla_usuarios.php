<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
    $(document).ready(function() {
      tabla("Listado de usuarios");
    });
  </script>
  <table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre de Usuario</th>
        <th>Area</th>
        <th>Estatus</th>
      </tr>
    </thead>

    <tbody>
      <? 
        $sql="SELECT * FROM usuarios";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $id_usuario=$row["id_usuario"];
          $id_tipo=$row["id_tipo"];
          $usuario=$row["usuario"];
          $pass=base64_decode($row["pass"]);
          $estatus=$row["estatus"];

          $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_usuario" data-whatever="@mdo" id="modificar_usuarios"
            id_usuario="'.$id_usuario.'"
            id_tipo="'.$id_tipo.'"
            usuario="'.$usuario.'"
            pass="'.$pass.'"
            estatus="'.$estatus.'"
            ><i class="far fa-edit"></i>Editar</button>';

          if ($id_tipo==1) {
            $area="Monitoreo";
          }else if ($id_tipo==2) {
            $area="Mantenimiento";
          }else if ($id_tipo==99){
            $area="Administrador del Sistema";
          }

           if ($estatus==1) {
            $estatus='<span class="btn btn-success btn-xs">ACTIVO</span>';
          }else{
            $estatus='<span class="btn btn-danger btn-xs">INACTIVO</span>';
          }
        
      ?>
      <tr>
        <td><center><? echo $editar; ?></center></td>
        <td><? echo $usuario; ?></td>
        <td><? echo $area; ?></td>
        <td><? echo $estatus; ?></td>
      </tr>
      <? } ?>
    </tbody>
  </table>
</div>
