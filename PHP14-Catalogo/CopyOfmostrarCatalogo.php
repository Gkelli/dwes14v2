<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
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
if ($_REQUEST ["busqueda"] == "autor") {
	if ($_REQUEST ["orden"] == "desc") {
		$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY autor.nombre desc" );
	} else
		$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY autor.nombre" );
} elseif ($_REQUEST ["busqueda"] == "titulo") {
	if ($_REQUEST ["orden"] == "desc") {
		$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY obra.titulo desc" );
	} else
		$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY obra.titulo" );
} else
	$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor" );
?>
	<table>
		<tr bgcolor="lightblue">
			<!--<th>Artista</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Duración</th>
			<th>Nombre Autor</th>
			<th>Imagen</th>  -->
			<th>Nombre Autor <a href="CopyOfmostrarObra.php?busqueda=autor">&#9650;</a>
			<a href="CopyOfmostrarObra.php?busqueda=autor">&#9660;</a>
			</th>
			<th>Titulo Serie<a href="CopyOfmostrarObra.php?busqueda=titulo">&#9650;</a> 
			<a href="CopyOfmostrarObra.php?busqueda=autor">&#9660;</a>
			</th>

		</tr>
	<?php
	
	while ( $serie = $resultado->fetch_object ( 'Serie' ) ) {
		echo "<tr bgcolor='lightgrey'>";
		echo "<td><a href='AutorObra.php?id_autor=" . $serie->get_id_autor () . "'>" . $serie->get_id_autor () . " </td>\n";
		echo "<td><a href='CopyOfmostrarObra.php?titulo=" . $serie->get_titulo () . "'>" . $serie->get_titulo () . "</a></td>";
		echo "</tr>";
	}
	
	?>
	</table>
	<br />
	<br />
	<h3>Buscar Serie por título</h3>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		<label>Nombre de la Serie: </label><input type="text" name="serie"> <br />
		<input type="submit" name="enviar" value="Buscar Serie">
	</form>

<?php
mysqli_free_result ( $resultado );
$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor" );
$ok = false;
if (isset ( $_POST ["enviar"] )) {
	while ( $serie = $resultado->fetch_object ( 'Serie' ) ) {
		if (strcasecmp ( $serie->get_titulo (), $_POST ["titulo"] ) == 0) {
			echo "<a href='CopyOfmostrarObra.php?titulo='". $serie->get_titulo ()."'>Serie encotrada</a>";
			$ok = true;
		}
	}
	if (! $ok)
		echo "<p>No se encotro ninguna serie " . $_POST ['serie'] . "</p>";
}
?>
</body>
</html>