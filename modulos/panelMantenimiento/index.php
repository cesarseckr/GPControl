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
    
        <div class="content-wrapper">
            <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <i class="fa fa-tachometer-alt"></i><p>&nbsp;&nbsp;Bienvenido <b><? echo $usuario."</b> al control de servicios para unidades de Global Pacific.</p><br>&nbsp;&nbsp"; ?>
                <i class="fa ml-auto fa-times popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
          </div>
          <div class="row">
          <? 
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_mantenimientos=$row['conta'];
          }
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos WHERE tipo_vehiculo=1";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_vehiculos=$row['conta'];
        $por_vehiculos=round(($total_vehiculos/$total_mantenimientos)*100,2);
          }
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos WHERE tipo_vehiculo=2";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_motos=$row['conta'];
        $por_motos=round(($total_motos/$total_mantenimientos)*100,2);
          }
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos WHERE tipo_vehiculo=3";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_montacargas=$row['conta'];
        $por_montacargas=round(($total_montacargas/$total_mantenimientos)*100,2);
          }
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos WHERE tipo_vehiculo=4";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_dolly=$row['conta'];
        $por_dolly=round(($total_dolly/$total_mantenimientos)*100,2);
          }
        $sql="SELECT count(id_mantenimiento) as conta FROM mantenimientos WHERE tipo_vehiculo=5";
        $sq = $db->query($sql);
        $rows= $sq->fetchAll(); 
          foreach ($rows as $row) {
            $total_chasis=$row['conta'];
        $por_chasis=round(($total_chasis/$total_mantenimientos)*100,2);
          }
          ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-truck text-primary icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Servicios realizados a vehículos</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><? echo number_format($total_vehiculos); ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                  <? $bar="width:".number_format($por_vehiculos)."%"; 
                  ?><div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="<? echo $bar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <? echo $por_vehiculos; ?>% de las revisiones realizadas. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-motorcycle text-primary icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Servicios realizados a motocicletas</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><? echo number_format($total_motos); ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                  <? $bar="width:".number_format($por_motos)."%"; 
                  ?><div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="<? echo $bar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <? echo $por_motos; ?>% de las revisiones realizadas. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-snowplow text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Servicios realizados a montacargas</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><? echo number_format($total_montacargas); ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                  <? $bar="width:".number_format($por_montacargas)."%"; 
                  ?><div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="<? echo $bar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <? echo $por_montacargas; ?>% de las revisiones realizadas. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-truck-loading text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Servicios realizados a dolly</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><? echo number_format($total_dolly); ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                  <? $bar="width:".number_format($por_dolly)."%"; 
                  ?><div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="<? echo $bar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <? echo $por_dolly; ?>% de las revisiones realizadas. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-truck-moving text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Servicios realizados a chasis</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><? echo number_format($total_chasis); ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                  <? $bar="width:".number_format($por_chasis)."%"; 
                  ?><div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="<? echo $bar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> <? echo $por_chasis; ?>% de las revisiones realizadas. 
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body"><h4 class="card-title"><i class="fa fa-wrench"></i> SERVICIOS POR KILOMETRAJE O TIEMPO</h4><hr>
                  <div class="fluid-container">
                    <? include("php/tabla_km.php"); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

  <? include("../includes/footer.php");?>
