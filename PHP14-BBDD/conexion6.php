<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
</head>
<body>
<?php include 'Animal.php'; ?>
<h2>Pruebas con la base de datos de animales - Conexión 6</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "animales" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
} else {
	
	$resultado = $conexion->query ( "SELECT * FROM animal ORDER BY nombre" );
	$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	while ( $animal = $resultado->fetch_object ( 'Animal' ) ) {
		echo $animal . "<br/>";
	}
	/*
	 * while ($animal = $resultado->fetch_object('Animal')) {
	 * // echo $animal."<br/>";
	 * echo "<tr bgcolor='lightgreen'>";
	 * echo "<td>".$animal->getChip()."</td>\n";
	 * echo "<td>".$animal->getNombre()."</td>\n";
	 * echo "<td>".$animal->getEspecie()."</td>\n";
	 * echo "<td>".$animal->getImagen()."</td>\n";
	 * echo "</tr>";
	 *
	 * }
	 */
	echo "<p>Información de servidor: $conexion->host_info</p>";
	echo "<h3>Desconectando...</h3>";
	mysqli_close ( $conexion );
}
echo "<a href='conexion1.php'>Ir a conexión1.php</a></br>";
echo "<a href='conexion2.php'>Ir a conexion2.php</a></br>";
echo "<a href='conexion3.php'>Ir a conexion3.php</a></br>";
echo "<a href='conexion4.php'>Ir a conexion4.php</a></br>";
echo "<a href='conexion5.php'>Ir a conexion5.php</a></br>";
?>

</body>
</html>