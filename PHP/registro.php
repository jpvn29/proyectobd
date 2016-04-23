<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="proyectobases";
$message = "password no coinciden";


$db_connection = mysql_connect($db_host, $db_user, $db_password);
$database = mysql_select_db($db_name, $db_connection);


$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$pass = $_POST['contraseña'];
$rpass = $_POST['rcontraseña'];

$req = (strlen($nombre)*strlen($mail)) or die ("No se llenaron los campos");

if($pass != $rpass){
	echo "<script type='text/javascript'>alert('$message');</script>";

}
elseif ($pass == $rpass)
{
//encriptar contraseña
$passUsuario = md5($pass);

$consulta="INSERT INTO usuario (Nombre,Email,PW) VALUES ('$nombre','$mail','$pass')";

$resultado = mysql_query($consulta,$db_connection);
}

		
?>