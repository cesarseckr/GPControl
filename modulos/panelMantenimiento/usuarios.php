<!DOCTYPE html>
<html lang="en">

<head>
   <?php include ("includes/header.php"); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="../images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="../images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-account-box"></i>Alumnos
              <span class="badge badge-dark ml-1">980</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-account-multiple"></i>Docentes
              <span class="badge badge-dark ml-1">48</span>
            </a>    
          </li>

          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reportes</a>
          </li>
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="#">
                <p class="mb-0 font-weight-normal float-left">Tienes 4  notificaciones
                <span class="badge badge-pill badge-info float-right">Ver todas</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="#">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-check mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Calificaciones acentadas<br> Ernesto Reyes</h6>
                  <p class="font-weight-light small-text">
                    30/11/2018 4:30 PM
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="#">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-check mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Calificaciones no acentadas<br> Javier Solis</h6>
                  <p class="font-weight-light small-text">
                    29/11/2018 8:24 PM
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="#">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="mdi mdi-close mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Plazo para calificar vencido <br> Juan Pablo Rios</h6>
                  <p class="font-weight-light small-text">
                    28/11/2018 12:00 AM
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Tienes 12 mensajes pendientes
                </p>
                <span class="badge badge-info badge-pill float-right">Ver todos</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Perez Solís
                    <span class="float-right font-weight-light small-text">30/11/2018 3:00 PM</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Solicitud de prorroga 
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Jenifer Reyes Padilla
                    <span class="float-right font-weight-light small-text">29/11/2018 5:05 PM</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Problemas con listas
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Rodrigo Gutierrez
                    <span class="float-right font-weight-light small-text">29/11/2018 3:17 PM</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Información importante
                  </p>
                </div>
              </a>
            </div>
          </li>
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Elizabeth Marín Zapata</span>
              <img class="img-sm rounded-circle" src="../images/faces/face11.jpg" alt="Profile image">
            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a class="dropdown-item mt-2" href="#">
                    <i class="mdi mdi-settings"></i> Configuración
              </a>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-lock"></i> Cambiar contraseña
              </a>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-help-circle"></i> Ayuda
              </a>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout"></i> Salir
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           <li class="nav-item d-sm-none">
            <a class="nav-link" data-toggle="collapse" href="#cuenta" aria-expanded="false" aria-controls="cuenta">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Mi cuenta</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cuenta">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-settings"></i>&nbsp; Configuración </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-lock"></i>&nbsp; Cambiar Contraseña </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-help-circle"></i>&nbsp; Ayuda </a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="#"> <i class="mdi mdi-logout"></i>&nbsp; Salir </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../images/faces/face11.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Elizabeth<br> Marín Zapata</p>
                  <div>
                    <small class="designation text-muted">Administrador</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-dark btn-block"><i class="mdi mdi-account-multiple-plus"></i> Nuevo Grupo
                
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Inicio</span> <span class="badge badge-dark ">¡Nuevo!</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#alumnos" aria-expanded="false" aria-controls="alumnos">
              <i class="menu-icon fa fa-graduation-cap"></i>
              <span class="menu-title">Alumnos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="alumnos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="fa fa-search"></i>&nbsp; Busqueda de alumno</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-plus"></i>&nbsp; Agregar alumno</a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#profesores" aria-expanded="false" aria-controls="profesores">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Profesores</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profesores">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class=" fa fa-search"></i>&nbsp; Busqueda de profesor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-plus"></i>&nbsp; Agregar profesor</a>
                </li>
                
              </ul>
            </div>
          </li>

            
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cursos" aria-expanded="false" aria-controls="cursos">
              <i class="menu-icon mdi mdi-library-books"></i>
              <span class="menu-title">Cursos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cursos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-database"></i>&nbsp; Listado de cursos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-database-plus"></i>&nbsp; Nuevo curso</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-view-headline"></i>&nbsp; Listado de materias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-playlist-plus"></i>&nbsp; Nueva materia</a>
                </li>
                
              </ul>
            </div>
          </li>

  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#calificaciones" aria-expanded="false" aria-controls="calificaciones">
              <i class="menu-icon mdi mdi-pencil-box-outline"></i>
              <span class="menu-title">Evaluaciones</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="calificaciones">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-pencil"></i>&nbsp; Asentar calificaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-minus"></i>&nbsp; Asistencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-alarm"></i>&nbsp; Prorrogas</a>
                </li>
                
              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#documentos" aria-expanded="false" aria-controls="documentos">
              <i class="menu-icon mdi  mdi-file-document"></i>
              <span class="menu-title">Documentación</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="documentos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-format-indent-increase"></i>&nbsp; Listas de asistencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-box-outline"></i>&nbsp; Kardex de alumno</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-box"></i>&nbsp; Kardex de profesor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-account-circle"></i>&nbsp; Certificados o diplomas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-check-all"></i>&nbsp; Calificaciones</a>
                </li>

                
                
              </ul>
            </div>
          </li>

 <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#administrativos" aria-expanded="false" aria-controls="administrativos">
              <i class="menu-icon mdi mdi-account-multiple-outline"></i>
              <span class="menu-title">Administrativos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="administrativos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="mdi mdi-format-list-bulleted"></i>&nbsp; Busqueda de personal</a>
                </li>
                <li class="nav-item">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-account-plus"></i>&nbsp; Agregar</button>
                </li>
                
              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Gráficos</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-message-text"></i>
              <span class="menu-title">Mensajería</span> <span class="badge badge-danger ">12</span>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-ticket-account"></i>
              <span class="menu-title">Tickets</span> <span class="badge badge-danger ">5</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                 <i class="menu-icon mdi mdi-message-alert"></i>
              <span class="menu-title">Historial de movimientos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Páginas adicionales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <div class="col-12"><center><hr><img src="../images/logo-ucs.png" width="230">
              <hr></div>
          </li>

        </ul>
      </nav>
      <!-- partial --> 
      <div class="main-panel">
      <?php 
        include("panelAdmin9/formRegistroAdmin.php");
      ?>

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-users"></i> TITULO DE LA SECCIÓN</h4><hr>
                  <div class="fluid-container">
                    <br>
                    <style type="text/css">
                      .iframe-tablas{
                        width: 100%;
                        height: 600px;
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 0px none #ffffff;
                      }
                    </style>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  id="boton" data-whatever="@mdo"><i class="mdi mdi-account-plus"></i>&nbsp; Agregar</button>
                    <iframe src="panelAdmin9/tabla_usuario.php" class="iframe-tablas">
                                            
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="#" target="_blank">PERISOL S.A. de C.V.</a> Todos los derechos reservados.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Version DEMO
              <i class="mdi mdi-xml text-info"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>