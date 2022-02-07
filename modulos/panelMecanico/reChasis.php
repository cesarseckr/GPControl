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
        include("php/add_chasis_r.php");
        include("php/add_imagen_r.php");
      ?>

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-truck-moving"></i>&nbsp; REVISIONES DE CHASIS</h4><hr>
                  <div class="fluid-container">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_chasis_r" data-whatever="@mdo"><i class="far fa-clipboard"></i> Nueva revisión</button>
                  <form><div class="form-row">
                  <div class="form-group col-sm-12">
                  <hr>
                  <small><i>Selecciona uno o varios valores para realizar una busqueda, "Registros máximos mostrados <b>300</b>"</i></small></div>
                  <input id="variable_f" value="5" style="display:none;">
                <div class="form-group col-sm-4">
                <label>Vehículo:</label>
                <select name='vehiculo_f' id='vehiculo_f' class="selectpicker form-control" data-live-search="true" data-live-search-normalize="true" title="Seleccione un vehículo">
                </select>
                 </div>
                <div class="form-group col-sm-4">
                <label>Estatus:</label>
                <select name='estatus_f' id='estatus_f' class="selectpicker form-control" data-live-search="true" data-live-search-normalize="true" title="Seleccione un estatus">
                  <option value="1">BUEN ESTADO</option>
                  <option value="2">SERVICIO PRÓXIMO</option>
                  <option value="3">SERVICIO URGENTE</option>
                </select>
                 </div>
                 <div class="form-group col-sm-4">
                <label>Tipo de revisión:</label>
                <select name='tipo_f' id='tipo_f' class="selectpicker form-control" data-live-search="true" data-live-search-normalize="true" title="Seleccione un tipo de revisión">
                  <option value="1">PREVENTIVA</option>
                  <option value="2">CORRECTIVA</option>
                </select>
                 </div>
                <div class="form-group col-sm-6">
                <label>Fecha de inicio:</label>
                <input type="date" name='fecha_ini_f' id='fecha_ini_f' class="form-control">
                 </div>
                <div class="form-group col-sm-6">
                <label>Fecha de fin:</label>
                <input type="date" name='fecha_fin_f' id='fecha_fin_f' class="form-control">
                 </div>
                  <div class="form-group col-sm-12">
                  <button id="filtrar" type="button" class="btn btn-primary btn-sm">
                  <i class="fa fa-search"></i>Buscar</button>
                  <button type="reset" id="reset_grupos" class="btn btn-secondary btn-sm">
                  <i class="fa fa-eraser"></i></button>
                  </div>
                </form>
                  <? include("php/tabla_chasis_r.php"); ?>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

  <? include("../includes/footer.php");?>
