<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item d-lg-none">
      <a class="nav-link" data-toggle="collapse" href="#cuenta" aria-expanded="false" aria-controls="cuenta">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">Mi cuenta (<? echo $usuario; ?>)</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="cuenta">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="salir.php"> 
              <i class="mdi mdi-logout"></i>&nbsp; Salir 
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <? 
            $dir_foto="../../archivos/".$url_img;
            if(!file_exists($dir_foto)){
              $dir_foto="../../archivos/perfil-generica.png";
            }
          ?>
          <img class="img-md mx-auto rounded-circle" src="<? echo $dir_foto; ?>" alt="Perfil">
          <div class="text-wrapper">
            <p class="profile-name"><br>
              <? 
                $rest = substr($usuario, 0, 50);
                $contar=strlen($rest);
                if($contar>=50){
                  $rest= $rest."...";
                }
                echo $rest;
              ?> 
            </p>
            <span class="status-indicator online"></span>
            <small class="designation text-muted">
              En línea
            </small>  
          </div>
        </div>
          <a href="index.php" class="btn btn-primary btn-block"><i class="fa fa-home"></i> Panel de inicio </a>
      </div>
    </li>
    <!-- DATOS DINAMICOS -->
    <div id="menu-sidebar">
      <?
        $sql="SELECT count(id_unidad) as unidades FROM unidad";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $unidades=$row["unidades"]; 
        } 

        $sql="SELECT count(id_moto) as motos FROM motos";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $motos=$row["motos"]; 
        } 

        $sql="SELECT count(id_montacargas) as montacargas FROM montacargas";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $montacargas=$row["montacargas"]; 
        } 

        $sql="SELECT count(id_dolly) as dolly FROM dolly";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $dolly=$row["dolly"]; 
        } 

        $sql="SELECT count(id_chasis) as chasis FROM chasis";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $chasis=$row["chasis"]; 
        } 

        $sql="SELECT count(id_catalogo) as catalogo FROM catalogo_servicios";
        $sq= $db->query($sql);
        $rows=$sq->fetchAll();
        foreach ($rows as $row) {
          $catalogo=$row["catalogo"]; 
        } 
      ?>
      <li class="nav-item">
        <a class="nav-link" href="servicio_prev.php">
          <i class="menu-icon fa fa-truck"></i>
          <span class="menu-title">Revisiones</span> <span class="badge badge-info "> <? echo number_format($unidades); ?> </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vehiculos.php">
          <i class="menu-icon fa fa-truck"></i>
          <span class="menu-title">Vehículos</span> 
          <span class="badge badge-info "><?echo number_format($unidades);?></span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="motos.php">
          <i class="menu-icon fa fa-motorcycle"></i>
          <span class="menu-title">Motocicletas</span> 
          <span class="badge badge-info "><?echo number_format($motos);?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="montacargas.php">
          <i class="menu-icon fa fa-snowplow"></i>
          <span class="menu-title">Montacargas</span>
          <span class="badge badge-info "><?echo number_format($montacargas);?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dolly.php">
          <i class="menu-icon fa fa-truck-loading"></i>
          <span class="menu-title">Dolly</span>
          <span class="badge badge-info "><?echo number_format($dolly);?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chasis.php">
          <i class="menu-icon fa fa-truck-moving"></i>
          <span class="menu-title">Chasis</span>
          <span class="badge badge-info "><?echo number_format($chasis);?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalogo_servicios.php">
          <i class="menu-icon fas fa-clipboard-list"></i>
          <span class="menu-title">Cat. Servicios</span>
          <span class="badge badge-info "><?echo number_format($catalogo);?></span>
        </a>
      </li>
    </div>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#rev" aria-expanded="false" aria-controls="rev">
        <i class="menu-icon fa fa-wrench"></i>
        <span class="menu-title">Revisiones</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="rev">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="reVehiculos.php">
              <i class="fa fa-truck"></i>&nbsp; Vehículos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reMotos.php">
              <i class="fa fa-motorcycle"></i>&nbsp; Motocicletas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reMontacargas.php">
              <i class="fa fa-snowplow"></i>&nbsp; Montacargas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reDolly.php">
              <i class="fa fa-truck-loading"></i>&nbsp; Dolly
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reChasis.php">
              <i class="fa fa-truck-moving"></i>&nbsp; Chasis
            </a>
          </li>
        </ul>
      </div>
    </li>
        
    <!-- FIN DE DATOS DINAMICOS -->
    <li class="nav-item">
      <div class="col-12"><center><hr><img src="../../images/logo.png" width="230">
        <hr>
      </div>
    </li>
  </ul>
</nav>