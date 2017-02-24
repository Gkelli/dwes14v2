<html>
<head>
<title>Catalago</title>
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
if (isset ( $_GET ["serie"] )) {
	$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor and titulo like '" . $_REQUEST ["serie"] . "'" );
	//echo "<p>" . $_REQUEST ["serie"] . "</p>";
} else if (isset ( $_REQUEST ["nom"] )) {
	
	if ($_REQUEST ["nom"] == "autor") {
		if ($_REQUEST ["orden"] == "desc") {
			$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY	autor.nombre desc" );
		} else
			$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY	autor.nombre" );
	} elseif ($_REQUEST ["nom"] == "titulo") {
		
		if ($_REQUEST ["orden"] == "desc") {
			$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY	obra.titulo desc" );
		} else
			$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor ORDER BY obra.titulo" );
	}
} else
	$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor" );
?>

	<table border=1>
		<tr bgcolor="lightyellow">
			<!--
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Duración</th>
			<th>Nombre Autor</th>
			<th>Imagen</th>  -->
			<th>Nombre Autor <a href="mostrarObra.php?nom=autor&orden=asc">&#9650;</a>
				<a href="mostrarObra.php?nom=autor&orden=desc">&#9660;</a>
			</th>
			<th>Titulo <a href="mostrarObra.php?nom=titulo&orden=asc">&#9650;</a>
				<a href="mostrarObra.php?nom=titulo&orden=desc">&#9660;</a>
			</th>
		</tr>
	<?php
	
	while ( $serie = $resultado->fetch_object ( 'Serie' ) ) {
		echo "<tr>";
		echo "<td><a href='AutorObra.php?id_autor=" . $serie->get_id_autor () . "'>" . $serie->get_id_autor () . " </td>\n";
		echo "<td><a href='mostrarObra.php?titulo=&#39" . $serie->get_titulo () . "&#39'>" . $serie->get_titulo () . "</a></td>";
		echo "</tr>";
	}
	
	?>
	</table>
	<h4>Introduzca titulo de la serie a buscar</h4>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
		<label>Titulo Serie: </label><input type="text" name="serie"><input type="submit" name="enviar" value="Buscar">
	</form>
	<?php echo "<br/><button><a href='mostrarCatalogo.php'>Eliminar filtros</a></button>";?>
	<br />
	<br />
</body>
</html>