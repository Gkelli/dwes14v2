<?php
session_start ();
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "ps2013" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if(isset($_REQUEST["idioma"])){
	if ($_REQUEST["idioma"]=="es"){
		$_SESSION ['idioma'] ="es";
	}
	else{
		if ($_REQUEST["idioma"]=="en"){
			$_SESSION ['idioma'] ="en";
		}
	}
}
if ($_SESSION["idioma"]=="es"){
	$resultado = $conexion->query ( "SELECT * FROM info WHERE idioma = 'es'");
} else{ if ($_SESSION["idioma"]=="en"){
		$resultado = $conexion->query ( "SELECT * FROM info WHERE idioma = 'en'");
	}
	else
		$resultado = $conexion->query ( "SELECT  * FROM info WHERE idioma = 'es'");
}
?>
<html>
<head>
<title>Página Principal Festival</title>
<meta charset="UTF-8" />
</head>
<body>
<a href="<?php echo "".$_SERVER['PHP_SELF']."?idioma=es";?>"><img src="img/es.png"></a>
<a href="<?php echo "".$_SERVER['PHP_SELF']."?idioma=en";?>"><img src="img/en.png"></a>
<img  src='img/portada.jpg' ><br><br>
<?php 
$row=$resultado->fetch_array(MYSQLI_ASSOC);
while($row!=null) {
	echo $row['presentacion'];
	$row=$resultado->fetch_array(MYSQLI_ASSOC);
}
$resultados = $conexion->query ( "SELECT DISTINCT dias.dia FROM actuacion,dias WHERE actuacion.dia = dias.id");
$filas=$resultados->fetch_array(MYSQLI_ASSOC);
echo "<ul>";
while($filas!=null) {
	echo "<li><a href='cartel.php?dia=" . $filas['dia'] . "'> DIA: " . $filas['dia'] . "</a></li>";
	$filas=$resultados->fetch_array(MYSQLI_ASSOC);
}
echo "</ul>";
?>
</body>
</html>
