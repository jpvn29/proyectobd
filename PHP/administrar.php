<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="proyectobases";

$db_connection = mysql_connect($db_host, $db_user, $db_password);
$database = mysql_select_db($db_name, $db_connection);


$nombret = $_POST['nombret'];
$alimento = $_POST['Alimento'];
$cal = $_POST['calorias'];

$req = (strlen($nombret)*strlen($alimento)* strlen($cal)) or die ("No se llenaron los campos");

$consulta="INSERT INTO $nombret (Nombre,calorias) VALUES ('$alimento','$cal')";

$resultado = mysql_query($consulta,$db_connection);
 echo "<script type='text/javascript'> window.location.href = '../admin.html'</script>";