<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
<style type="text/css">
span {
	color: grey
}
</style>
</head>
<body>
<?php
include "Serie.php";
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
?>
<?php

$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
// Encontrar la obra del request
if (! isset ( $_REQUEST ["titulo"] ))
	die ( "<h3>ERROR en la petición. Falta titulo de la serie</h3>" );
$titulo = $_REQUEST ["titulo"];
$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor WHERE obra.titulo = " . $titulo . " AND autor.id_autor=obra.id_autor" );
$serie = $resultado->fetch_array ( MYSQLI_ASSOC );
if (empty ( $serie ))
	die ( "<h3>ERROR en la petición. Titulo de la serie no válida</h3>" );
echo "<h3>Identificador de la serie " . $serie ['titulo'] . ":</h3>";
echo "<ul>";
while ( $serie != null ) {
	echo "<li>Identificador de la obra: <span>" . $serie ['titulo'] . "</span></li>";
	echo "<li>Duración: <span>" . $serie ['duracion'] . "</span></li>";
	echo "<li>Identificador del autor: <span>" . $serie ['id_autor'] . "</span></li>";
	echo "<li>Nombre del Autor: <span>" . $serie ['nombre'] . "</span></li>";
	echo "<li>Portada:</li> <img  src='img/$serie[portada]' width='100px'>";	
	$serie = $resultado->fetch_array ( MYSQLI_ASSOC );
}
echo "</ul>";
echo "<br/><button><a href='mostrarCatalogo.php'>VOLVER</a></button>";
mysqli_close ( $conexion );
?>


</body>
</html>