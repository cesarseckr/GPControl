<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="../../images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="../../images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
       <!-- DATOS DINAMICOS -->
        <ul class="navbar-nav navbar-nav-left header-links">
          <div id="menu-navbar">
       <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-globe-americas"></i>GLOBAL PACIFIC 
            </a>
          </li></div>
        </ul>
        <!-- FIN DE DATOS DINAMICOS -->
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">
       <? 
                      $rest = substr($usuario, 0, 50);
                          $contar=strlen($rest);
                          if($contar>=50){
                          $rest= $rest."...";
                    }
                    echo $rest;
                     ?>
                
               </span>
               <? 
                        $dir_foto="../../archivos/".$url_img;
                        if(!file_exists($dir_foto)){
                        $dir_foto="../../archivos/perfil-generica.png";
                        }                         
                        ?>
              <img class="img-sm rounded-circle" src="<? echo $dir_foto; ?>" alt="Perfil">
            </a>
                     <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a class="dropdown-item" href="#">
               <b><i class="mdi mdi-account"></i> <? echo $usuario; ?> </b>
              </a>
              
              <a class="dropdown-item" href="../includes/salir.php">
              <i class="fa fa-caret-right"></i>   <i class="mdi mdi-logout"></i> Salir
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>