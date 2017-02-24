<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
</head>
<body>
	<h2>Pruebas con la base de datos de animales - Conexión 2</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";

$conexion = new mysqli ( $servidor, $usuario, $clave, "animales" );
$conexion->query ( "SET NAMES 'UTF8'" );
// si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
} else {
	echo "<p>A continuación mostramos algunos registros:</p>";
	$resultado = $conexion->query ( "SELECT * FROM animal ORDER BY nombre" );
	$conexion->query ( "SET NAMES 'UTF8'" );
	$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	while ( $fila != null ) {
		echo "<hr>";
		echo "Nombre:" . $fila ['nombre'];
		echo "<br>Especie: $fila[especie]"; // observa la diferencia en el uso de comillas
		$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	}
	mysqli_free_result ( $resultado );
	$resultado = $conexion->query ( "SELECT * FROM cuidador ORDER BY Nombre" );
	$conexion->query ( "SET NAMES 'UTF8'" );
	$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	while ( $fila != null ) {
		echo "<hr>";
		echo "Nombre:" . $fila ['Nombre'];
		$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	}
	echo "<h3>Desconectando...</h3>";
	mysqli_close ( $conexion );
}
echo "<a href='conexion1.php'>Ir a conexión1.php</a></br>";
echo "<a href='conexion3.php'>Ir a conexion3.php</a></br>";
echo "<a href='conexion4.php'>Ir a conexion4.php</a></br>";
echo "<a href='conexion5.php'>Ir a conexion5.php</a></br>";
echo "<a href='conexion6.php'>Ir a conexion6.php</a></br>";
?>
</body>
</html>