<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

session_start();
$nomU = $_SESSION["Id"];
$fecha = $_SESSION["fecha"]; 
$tcom = $_SESSION["tcom"];

$sql = "SELECT ID_comida FROM COMIDAS WHERE fecha = $fecha and id_tc = $tcom and id = $nomU";
$resultado = mysql_query($sql);
$result = mysql_fetch_array($resultado);
$fina=$result['ID_comida'];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/estilos.css">
	<title></title>
	<style>
	h2{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
		body {
	background: rgb(125,185,232); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(125,185,232,1) 71%, rgba(125,185,232,1) 99%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(71%,rgba(125,185,232,1)), color-stop(99%,rgba(125,185,232,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* W3C */


	font-family: "Century Gothic";
	font-size: 16px;
	line-height: 1.6;
}
button{
		padding: 0 15px;
		margin: 5px;
	height: 30px;
	font: bold 12px 'Helvetica Neue', Helvetica, Arial, sans-serif;
	text-align: center;
	color: #fff;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.7);
	cursor: pointer;
	border: 1px solid #0d3d6a;
	outline: none;
	position: relative;
	background-color: #1d83e2;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#1d83e2), to(#0d3d6a)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(top, #1d83e2, #0d3d6a); /* Chrome 10+, Saf5.1+, iOS 5+ */
	background-image:    -moz-linear-gradient(top, #1d83e2, #0d3d6a); /* FF3.6 */
	background-image:     -ms-linear-gradient(top, #1d83e2, #0d3d6a); /* IE10 */
	background-image:      -o-linear-gradient(top, #1d83e2, #0d3d6a); /* Opera 11.10+ */
	background-image:         linear-gradient(top, #1d83e2, #0d3d6a);
	-pie-background:          linear-gradient(top, #1d83e2, #0d3d6a); /* IE6-IE9 */
	-moz-box-shadow:    inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	box-shadow:         inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	-moz-background-clip:    padding;
	-webkit-background-clip: padding-box;
	background-clip:         padding-box;
	behavior: url(PIE.htc);
}
table{
  width:90%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
tr{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

	</style>
</head>
<body>
<center>
<h1>Registra que comiste</h1>

<h1 >
	<?php
	
	$nomU = $_SESSION["Id"];
	mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');
$sql = "SELECT nombre FROM usuario where id = $nomU";
$resultado = mysql_query($sql);
$result = mysql_fetch_array($resultado);
$fina=$result['nombre'];
echo $fina;

	?>
</h1>

<form action = "registrocom1.php" method = "POST">
<table cellpadding = "20" width = "1000" align ="center" border="9" color = "white" style="background-color:orange">
<tr><h1>Solo puedes introducir un tipo de alimento por comida.
<br> Si no comiste nada de ese tipo deja la caja en blanco.</h1>
</tr>
<tr>
<td><h2>Vegetales</h2></td>
<td><h2>Cereales</h2></td>
<td><h2>Liquidos</h2></td>
<td><h2>Proteinas</h2></td>
<td><h2>Azucares</h2></td>

</tr>
<tr>
<td><h2><?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT Nombre, Id_Veg FROM Vegetales ORDER BY Id_Veg DESC";
$result = mysql_query($sql);

echo "<select name='Vegetales'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id_Veg'] ."'>" . $row['Nombre'] ."</option>";
}
echo "</select>";


?></h2></td>
<td><h2><?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT Nombre, Id_Cereales FROM Cereales ORDER BY Id_Cereales DESC";
$result = mysql_query($sql);

echo "<select name='Cereales'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id_Cereales'] ."'>" . $row['Nombre'] ."</option>";
}
echo "</select>";


?></h2></td>
<td><h2><?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT Nombre, Id_Liquido FROM Liquidos ORDER BY Id_Liquido DESC";
$result = mysql_query($sql);

echo "<select name='Liquidos'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id_Liquido'] ."'>" . $row['Nombre'] ."</option>";
}
echo "</select>";
?>
</h2></td>
<td><h2><?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT Nombre, Id_Proteinas FROM Proteinas ORDER BY Id_Proteinas DESC";
$result = mysql_query($sql);

echo "<select name='Proteinas'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id_Proteinas'] ."'>" . $row['Nombre'] ."</option>";
}
echo "</select>";
?>
</h2></td>
<td><h2><?php
mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$sql = "SELECT Nombre, Id_Azuc FROM Azucares ORDER BY Id_Azuc DESC";
$result = mysql_query($sql);

echo "<select name='Azucares'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Id_Azuc'] ."'>" . $row['Nombre'] ."</option>";
}
echo "</select>";

?></h2></td>

</tr>

</table>

<br>


<center> <input class="form-btn" name="Registrar" type="submit" value="Registrar" /></center>

  </form>
<a href="comida.php"><button type="submit">Regresar</button></a>

</center>
</body>
</html>
