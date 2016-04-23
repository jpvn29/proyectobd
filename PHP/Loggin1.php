<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="proyectobases";
$message = "Passwor incorrecto";
$message1 = "Passwor correcto";


$db_connection = mysql_connect($db_host, $db_user, $db_password);
$database = mysql_select_db($db_name, $db_connection);



$mail = $_POST['email'];
$pass = $_POST['contraseña'];


$req = (strlen($pass)*strlen($mail)) or die ("No se llenaron los campos");





$consulta= "SELECT PW from Usuario where email = '$mail' ";

$resultado = mysql_query($consulta,$db_connection);
$result = mysql_fetch_array($resultado);
$fina=$result['PW'];




if ($fina == $pass)
{

 echo "<script type='text/javascript'> window.location.href = '../principal.html'</script>";

}
else
{
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'> window.location.href = '../loggin.html'</script>";


}	

		
?>