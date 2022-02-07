<? session_start();?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <title>UCS Control - Dashboard</title>
  <!-- HEADER -->
   <?php include ("../includes/header.php"); ?>
</head>
<body>
  <? include ("../includes/conexion.php"); ?>
     <? include ("../includes/restricciones_administrativo.php"); ?>
  <div class="container-scroller">
    <!-- PANEL DE NAVEGACIÓN -->

    <? include('menus/navBar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- BARRA LATERAL -->
      <? include('menus/sideBar.php'); ?>
      <!-- partial --> 
      <div class="main-panel">
         <!-- CONTENIDO PRINCIPAL --> 
        <div class="content-wrapper">
        
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-question-circle"></i>&nbsp;BIENVENIDO A LA SECCIÓN DE AYUDA</h4><hr>
                  <div class="fluid-container">
                   <h4>Bienvenido a la sección de ayuda.</h4>
                   <p>Consulta información acerca de las dudas más comunes, manuales y documentación, así como un medio de contacto para realizar reportes de errores de sistema (BUGS).<br> 

                  <small><i> *Recuerda que el sistema cuenta con solicitudes por medio de tickets a diferentes áreas de la institución.</i></small>
                 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-question"></i>&nbsp; PREGUNTAS FRECUENTES</h4><hr>
                  <div class="fluid-container">
                   

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-book"></i>&nbsp; MANUALES Y DOCUMENTACIÓN</h4><hr>
                  <div class="fluid-container">
                   <h4>Consulta la documentación relacionada con el sistema:</h4>
                   <p></p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-bug"></i>&nbsp; BUGS O ERRORES</h4><hr>
                  <div class="fluid-container">
                   <h4>¿No pudiste solucionar tu problema en esta sección?</h4>
                   <p><b>Si encontraste un error en el sistema no dudes en comunicarlo.</b><br>
                   Contacta a nuestro correo electrónico:
                    <br><i class="fa fa-envelope"></i> E-mail: <b>rrios@proser.mx</b> <br>
                    <i class="fa fa-user"></i>&nbsp; Contacto: <b>Ing. Rubén Rios</b></p>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


  <? include("../includes/footer.php");?>