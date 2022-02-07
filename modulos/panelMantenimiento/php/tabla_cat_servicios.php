<div id="tabla" class="table-responsive" style="padding-bottom: 15px;"><br>
  <script>
    $(document).ready(function() {
      tabla("Catálogo de servicios");
    });
  </script>
  <table id="tabla-1" class="table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="noExport">Editar</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    <tbody>
      <? 
        $sql="SELECT * FROM catalogo_servicios";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $id_catalogo=$row["id_catalogo"];
          $nombre=$row["nombre"];
          $categoria=$row["categoria"];
          $tipo=$row["tipo"];

          $editar='<button class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#mod_cat_servicios" data-whatever="@mdo" id="modificar_cat_servicios"
            id_catalogo="'.$id_catalogo.'"
            nombre="'.$nombre.'"
            categoria="'.$categoria.'"
            tipo="'.$tipo.'"
            ><i class="far fa-edit"></i>Editar</button>';

          $eliminar='<button class="btn btn-danger btn-sm btn-rounded"  id="del_cat_servicios"
            id_catalogo="'.$id_catalogo.'"
            ><i class="far fa-edit"></i>Eliminar</button>';

          if ($tipo==1) {
            $tipo="<i class='menu-icon fa fa-truck'></i>
            <span class='menu-title'>Unidad</span>";
          }elseif($tipo==2){
            $tipo="<i class='menu-icon fa fa-motorcycle'></i>
            <span class='menu-title'>Motocicleta</span>";
          }elseif($tipo==3){
            $tipo="<i class='menu-icon fa fa-snowplow'></i>
            <span class='menu-title'>Montacargas</span>";
          }elseif($tipo==4){
            $tipo="<i class='menu-icon fa fa-truck-loading'></i>
            <span class='menu-title'>Dolly</span>";
          }elseif($tipo==5){
            $tipo="<i class='menu-icon fa fa-truck-moving'></i>
            <span class='menu-title'>Chasis</span>";
          }
        
      ?>
      <tr>
        <td><center><? echo $editar; ?></center></td>
        <td><? echo $nombre; ?></td>
        <td><? echo $categoria; ?></td>
        <td><? echo $tipo; ?></td>
        <td><? echo $eliminar; ?></td>
      </tr>
      <? } ?>
    </tbody>
  </table>
</div>
