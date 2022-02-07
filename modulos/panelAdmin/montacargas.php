<? session_start();?>
<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <title>GP - Panel de Check-IN</title>
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
          include("php/add_montacargas.php");
          include("php/mod_montacargas.php");
        ?>

          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body"><h4 class="card-title"><i class="fa fa-snowplow"></i>&nbsp; LISTADO DE MONTACARGAS</h4><hr>
                    <div class="fluid-container">
                      <button type="button" class="btn btn-primary" id="add_modal_montacargas" data-toggle="modal" data-target="#add_montacargas" data-whatever="@mdo"><i class="fa fa-plus"></i>&nbsp; Agregar</button>
                    <? include("php/tabla_montacargas.php"); ?>                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

    <? include("../includes/footer.php");?>
