<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="styles/style.css">
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
$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
if (empty ( $autor ))
	die ( "<h4>ERROR en la petición. Titulo de la serie no válida</h4>" );
echo "<h4 id='h'>Datos de la serie " . $autor ['titulo'] . ":</h4>";
echo "<ul>";
while ( $autor != null ) {
	echo "<li>Titulo: <span>" . $autor ['titulo'] . "</span></li>";
	echo "<li>Año: <span>" . $autor ['anno'] . "</span></li>";
	echo "<li>Pais: <span>" . $autor ['pais'] . "</span></li>";
	echo "<li>Genero: <span>" . $autor ['genero'] . "</span></li>";
	echo "<li>Duración: <span>" . $autor ['duracion'] . " minutos</span></li>";
	echo "<li>Identificador del autor: <span>" . $autor ['id_autor'] . "</span></li>";
	echo "<li>Nombre del Autor: <span>" . $autor ['nombre'] . "</span></li>";
	echo "<li>Descripción: <span>" . $autor ['descripcion'] . "</span></li>";
	echo "<li>Portada:</li><img  src='img/$autor[portada]' width='100%' height='300px'>";	
	$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
}
echo "<br/><button class='button'><a href='mostrarCatalogo.php'>VOLVER</a></button>";
echo "</ul>";

mysqli_close ( $conexion );
?>


</body>
</html>