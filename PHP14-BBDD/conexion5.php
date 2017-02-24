<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
</head>
<body>
	<h2>Pruebas con la base de datos de animales - Conexión 5</h2>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
$conexion = new mysqli ( $servidor, $usuario, $clave, "animales" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
} else {
	?>
<?php

	echo "<h2>Listado de cuidadores</h2>";
	echo "<h3>Pulsa en cada cuidador para ver los animales de los que se ocupa</h3>";
	
	$resultado = $conexion->query ( "SELECT * FROM cuidador" );
	echo "<ul>\n";
	while ( $fila = $resultado->fetch_array ( MYSQLI_ASSOC ) ) {
		echo "<li><a href='cuidador.php?idCuidador=$fila[idCuidador]'>$fila[Nombre]</a></li>\n";
		// Ejemplo: <li><a href='cuidador.php?idCuidador=12345'>Alberto</a></li>
	}
	echo "</ul>";
	
	echo "<p>Información de servidor: $conexion->host_info</p>";
	echo "<h3>Desconectando...</h3>";
	mysqli_close ( $conexion );
}
echo "<a href='conexion1.php'>Ir a conexión1.php</a></br>";
echo "<a href='conexion2.php'>Ir a conexion2.php</a></br>";
echo "<a href='conexion3.php'>Ir a conexion3.php</a></br>";
echo "<a href='conexion4.php'>Ir a conexion4.php</a></br>";
echo "<a href='conexion6.php'>Ir a conexion6.php</a></br>";
?>

</body>
</html>