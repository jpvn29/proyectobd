<?php



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

$z = calorias(1,"azucares","id_azuc") +  calorias(1,"azucares","id_azuc");

echo $z;






?>