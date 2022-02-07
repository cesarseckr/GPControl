<?php

$hostname = 'localhost';

$username = 'root';

$password = '123456';

try {
    $db = new PDO("mysql:host=$hostname;dbname=gp", $username, $password);	
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
date_default_timezone_set('America/Mexico_city');
$script_tz = date_default_timezone_get();
?> 