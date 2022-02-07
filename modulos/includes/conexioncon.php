<?php 
	$con = new mysqli("localhost", "root", "123456", "gp");
if ($con->connect_errno)
{
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");

date_default_timezone_set('America/Mexico_city');
$script_tz = date_default_timezone_get();
?>
