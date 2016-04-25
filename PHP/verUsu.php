<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
	<meta charset="UTF-8">
	<style>
	.fixed-nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  height: 50px;
  background-color: orange;
}

	</style>
</head>
<body>

	

	<p><center><table > <?php

mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');

$query="SELECT * FROM veusuario";
$results = mysql_query($query);

while ($row = mysql_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}

	?> </table> </center></p>
	

	<center><a href="../loggin.html"><button type="submit">Salir</button></a></center>
	 

</body>
</html>