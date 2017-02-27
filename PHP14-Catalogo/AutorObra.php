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
// Recoger el cuidador de request
if (! isset ( $_REQUEST ["id_autor"] ))
	die ( "<h3>ERROR en la petición. Falta identificador del autor</h3>" );
$id_autor = $_REQUEST ["id_autor"];
$resultado = $conexion->query ( "SELECT * FROM autor WHERE id_autor = " . $id_autor );
$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
if (empty ( $autor ))
	die ( "<h3>ERROR en la petición. Identificador del autor no válido</h3>" );
echo "<h3>Datos del autor: </h3>";
echo "<ul>";
while ( $autor != null ) {
	echo "<li>Id del autor: <span>" . $autor ['id_autor'] . "</span></li>";
	echo "<li>Nombre: <span>" . $autor ['nombre'] . "</span></li>";
	$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
}
echo "</ul>";
// liberamos la memoria del resultado, que reutilizaremos después
mysqli_free_result ( $resultado );

echo "<h3>Obras del autor " .$autor ['id_autor'] . " " . $autor ['nombre'] . ":</h3>";

$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor WHERE  obra.id_autor = " . $id_autor . " AND autor.id_autor=obra.id_autor" );
$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
echo "<table border='1'>";
while ( $fila != null ) {
	echo "<tr>";
	echo "<th style='background-color:lightgrey;' >Serie</th>";
	echo "<td>Titulo:<span> " . $fila ['titulo'] . "</span></td>";
	echo "<td>Categoria: <span>" . $fila ['genero'] . "</span></td>";
	echo "<td>Duración: <span>" . $fila ['duracion'] . "</span></td>";
	$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	echo "</tr>";
}
echo "</table>";
echo "<a href='mostrarCatalogo.php'>Eliminar filtros</a>";
mysqli_close ( $conexion );
?>


</body>
</html>