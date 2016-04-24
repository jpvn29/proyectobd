<?php
$idu = "id";
$ida = ""

function ObtId($alimento,$tabla,$id)
{
	$usuarios = "SELECT id from Usuario where email = '$mail' ";

$resultado1 = mysql_query($usuarios,$db_connection);
$result1 = mysql_fetch_array($resultado1);
$fina2=$result1['id'];


$_SESSION["Id"] = $fina2;

}

?>