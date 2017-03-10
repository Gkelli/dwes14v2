<html>
<head>
<title>Cartel Festival</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "ps2013" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if (! isset ( $_REQUEST ["dia"] ))
	die ( "<h3>ERROR</h3>" );
	$dia = $_REQUEST ["dia"];
	$resultado = $conexion->query ( "SELECT * FROM dias WHERE dias.dia = ".$dia);
	$row=$resultado->fetch_array(MYSQLI_ASSOC);
	$id=$row["id"];
	$resultado2 = $conexion->query ( "SELECT * FROM dias,actuacion WHERE dias.dia= ".$dia." AND actuacion.dia = ".$id);
	$row2=$resultado2->fetch_array(MYSQLI_ASSOC);
	echo "<table>";
	echo "<tr>";
	echo "<th>Nombre del grupo</th>";
	echo "<th>País</th>";
	echo "</tr>";
	while($row2!=null) {

		echo "<tr>";
		echo "<td><a href='Artista.php?artista=".$row2['nombre']."'><span> " . $row2['nombre'] . "</span></a></td>";
		echo "<td><span> " . $row2['origen'] . "</span></td>";
		echo "</tr>";
		$row2=$resultado2->fetch_array(MYSQLI_ASSOC);
	}
	echo "</table>";
	?>
<br>
<br>
<a href="PaginaPrincipal.php">Volver a la página principal del festival</a>
</body>
</html>