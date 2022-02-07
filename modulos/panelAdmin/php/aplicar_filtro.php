<?
session_start();
if(isset($_GET['filtro'])){ 
$_SESSION['filtro']=$_GET['filtro'];
$_SESSION['festatus']=$_GET['festatus'];
$_SESSION['fvehiculo']=$_GET['fvehiculo'];
$_SESSION['ftipo']=$_GET['ftipo'];
$_SESSION['ffecha_ini']=$_GET['ffecha_ini'];
$_SESSION['ffecha_fin']=$_GET['ffecha_fin'];
}

?>
<small><b>Filtros aplicados</b></small>