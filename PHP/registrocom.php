<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="proyectobases";
$message = "password no coinciden";


$db_connection = mysql_connect($db_host, $db_user, $db_password);
$database = mysql_select_db($db_name, $db_connection);


$fecha = $_POST['fecha'];
$tcom= $_POST['tcomida'];
session_start();
	$nomU = $_SESSION["Id"];
	$_SESSION["fecha"] = $fecha;
	$_SESSION["tcom"] = $tcom;


$consulta="INSERT INTO comidas (fecha,id_tc,id) VALUES ('$fecha','$tcom','$nomU')";

$resultado = mysql_query($consulta,$db_connection);


echo "<script type='text/javascript'> window.location.href = 'rcomida.php'</script>";








?>