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

	<nav class="fixed-nav-bar">
	<div id="menu" class="menu">
    <a class="sitename" href="principal.html">VidaSal</a><br>

    <!-- Example responsive navigation menu  -->
    <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>

    <ul class="menu-items">
      <li><a href="opcion.html">Agregar Comida</a></li>
      <li><a href="#">Ver Comidas</a></li>
      <li><a href="#">Salir</a></li>
       </ul>
  </div>

  	
 
    </nav>
  

	<p><center><img src="https://i.ytimg.com/vi/7r0LubgjYbs/maxresdefault.jpg" width="500px" align = "center"></center></p>
	<center><h2>Bienvenido 

		<?php
	
		session_start();
	$nomU = $_SESSION["Id"];
	mysql_connect('localhost', 'root', '');
mysql_select_db('proyectobases');
$sql = "SELECT nombre FROM usuario where id = $nomU";
$resultado = mysql_query($sql);
$result = mysql_fetch_array($resultado);
$fina=$result['nombre'];
echo $fina;
$_SESSION["NomUsu"] = $fina
		?>
		<br> ¿Qué deseas hacer?
</h2></center>

	<center><a href="comida.php"><button type="submit">Registrar Comida</button></a></center>
	<center><a href="VerCom.php"><button type="submit">Ver Comidas</button></a></center>
	<center><a href="../loggin.html"><button type="submit">Salir</button></a></center>
	 

</body>
</html>