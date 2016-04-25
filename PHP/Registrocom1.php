<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="proyectobases";
$message = "password no coinciden";


$db_connection = mysql_connect($db_host, $db_user, $db_password);
$database = mysql_select_db($db_name, $db_connection);

$Veg = $_POST['Vegetales'];
$Azuc = $_POST['Azucares'];
$Prot = $_POST['Proteinas'];
$Liq = $_POST['Liquidos'];
$Cer = $_POST['Cereales'];

session_start();
$usu = $_SESSION["Id"];
$fechaaaa =  $_SESSION["fecha"];
$tcomi = $_SESSION["tcom"];

$consulta1="SELECT ID_COMIDA  FROM Comidas where id = $usu and fecha = $fechaaaa ";

$resultado1 = mysql_query($consulta1,$db_connection);

echo $resultado1;


$consulta="INSERT INTO tem_comidas  VALUES ('$Veg','$Prot','$Azuc','$Liq','$resultado1','$Cer')";

$resultado = mysql_query($consulta,$db_connection);





function calorias($id,$tabla, $idt)
{
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT calorias FROM $tabla where $idt = $id ";
$resultado = mysql_query($sql);
$result = mysql_fetch_array($resultado);
$fina=$result['calorias'];
return $fina;
};


$z = calorias($Veg,"Vegetales","id_Veg") + calorias($Azuc,"Azucares","id_Azuc")+calorias($Prot,"Proteinas","id_Proteinas") + calorias($Liq,"Liquidos","id_Liquido") + calorias($Cer,"Cereales","id_Cereales");

echo "<script type='text/javascript'>alert('Felicidades acabas de Registrar una Comida con : $z  calorias, sigue así!!');</script>";
echo "<script type='text/javascript'> window.location.href = 'comida.php'</script>";








?>