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

$usuarios = "SELECT id from Usuario where email = '$mail' ";

$resultado1 = mysql_query($usuarios,$db_connection);
$result1 = mysql_fetch_array($resultado1);
$fina2=$result1['id'];


$_SESSION["Id"] = $fina2;



$req = (strlen($pass)*strlen($mail)) or die ("No se llenaron los campos");





$consulta= "SELECT PW from Usuario where email = '$mail' ";

$resultado = mysql_query($consulta,$db_connection);
$result = mysql_fetch_array($resultado);
$fina=$result['PW'];

if ($mail == 'admin@root' && $pass == 'admin')
{
echo "<script type='text/javascript'> window.location.href = '../Admin.html'</script>";

}


else
{

if ($fina == $pass)
{

 echo "<script type='text/javascript'> window.location.href = '../principal.html'</script>";

}
else
{
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'> window.location.href = '../loggin.html'</script>";


}	
}
		
?>