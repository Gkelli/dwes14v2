<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
</head>
<body>
	<h2>Pruebas con la base de datos de animales - Conexión 4</h2>
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

	$conexion->query ( "UPDATE animal SET especie='jabali' WHERE nombre='Babe'" );
	echo "<h3 style='color:red'>" . $conexion->error . "</h3>";
	?>

<?php
	$conexion->query ( "DROP TABLE animal" );
	echo "<h3 style='color:red'>" . $conexion->error . "</h3>";
	
	echo "<p>Información de servidor: $conexion->host_info</p>";
	echo "<h3>Desconectando...</h3>";
	mysqli_close ( $conexion );
}
echo "<a href='conexion1.php'>Ir a conexión1.php</a></br>";
echo "<a href='conexion2.php'>Ir a conexion2.php</a></br>";
echo "<a href='conexion3.php'>Ir a conexion3.php</a></br>";
echo "<a href='conexion5.php'>Ir a conexion5.php</a></br>";
echo "<a href='conexion6.php'>Ir a conexion6.php</a></br>";
?>

</body>
</html>