<? session_start();?>
<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <title>GP - Viajes</title>
    <!-- HEADER -->
    <?php include ("../includes/header.php"); ?>
  </head>
  <body>
    <? include ("../includes/conexion.php"); ?>
    <? include ("restricciones.php"); ?>
    <div class="container-scroller">
      <!-- PANEL DE NAVEGACIÓN -->
      <? include('menus/navBar.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- BARRA LATERAL -->
        <? include('menus/sideBar.php'); ?>
        <!-- partial --> 
        <div class="main-panel">
        <?php 
  		    // MODALS //
          include("php/add_viaje.php");
          include("php/mod_viaje.php");
          include("php/mod_data_r_salida.php");
          include("php/mod_data_r_entrada.php");
          include("php/mod_viajes_checklist.php");
        ?>
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body"><h4 class="card-title"><i class="fas fa-road"></i>&nbsp; Viajes</h4><hr>
                    <div class="fluid-container">
                      <button id="btn_add_viaje" type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_viaje" data-whatever="@mdo"><i class="fa fa-plus"></i>&nbsp;  Programar viaje </button>
                      <? include("php/tabla_viajes.php"); ?>                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

    <? include("../includes/footer.php");?>
