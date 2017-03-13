<html>
<head>
<title>Catalago</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
</head>
<body>
<h1>Catálogo de Series</h1>
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
	$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor where autor.id_autor=obra.id_autor and titulo like '%" . $_REQUEST ["serie"] . "%'" );
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

	<table>
		<tr bgcolor="lightyellow">
			<th>Titulo <a href="mostrarCatalogo.php?nom=titulo&orden=asc">&#9650;</a>
				<a href="mostrarCatalogo.php?nom=titulo&orden=desc">&#9660;</a>
			</th>
			<th>Nombre Autor <a href="mostrarCatalogo.php?nom=autor&orden=asc">&#9650;</a>
				<a href="mostrarCatalogo.php?nom=autor&orden=desc">&#9660;</a>
			</th>
		</tr>
	<?php
	
	while ( $autor = $resultado->fetch_object ( 'Serie' ) ) {
		echo "<tr>";
		echo "<td><a href='mostrarObra.php?titulo=&#39" . $autor->get_titulo () . "&#39'>" . $autor->get_titulo () . "</a></td>";
		echo "<td><a href='AutorObra.php?id_autor=" . $autor->get_id_autor () . "'>" . $autor->nombre . " </td>\n";
		echo "</tr>";
	}
	
	?>
	</table>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
		<label>Introduzca titulo de la serie a buscar: </label><br><br><input type="text" name="serie"><input type="submit" name="enviar" value="Buscar">
		<?php echo "<br/><button class='button'><a href='mostrarCatalogo.php'>Eliminar filtros</a></button>";?>
	</form>	
	<br/>
	<br/>
</body>
</html>