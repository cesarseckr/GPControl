<? session_start();?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <title>GP - Panel de Operarios</title>
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
      <?php 
    // MODALS //
        include("php/add_operarios.php");
        include("php/mod_operarios.php");
      ?>

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="menu-icon fa fa-user-circle"></i>&nbsp; OPERARIOS</h4><hr>
                  <div class="fluid-container">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_operarios" id="add_modal_operarios" data-whatever="@mdo"><i class="fa fa-plus"></i>&nbsp; Agregar</button>
                  <? include("php/tabla_operarios.php"); ?>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

  <? include("../includes/footer.php");?>
