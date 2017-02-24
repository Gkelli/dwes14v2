<html>
<head>
<title>Conexión a BBDD con PHP</title>
<meta charset="UTF-8" />
</head>
<body>
	<h2>Pruebas con la base de datos de animales - Conexión 3</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "animales" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
} else {
	?>
<table border="0">
		<tr bgcolor="lightblue">
			<th>Chip</th>
			<th>Nombre</th>
			<th>Especie</th>
			<th>Imagen</th>
		</tr>
<?php
	$resultado = $conexion->query ( "SELECT * FROM animal ORDER BY nombre" );
	$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	while ( $fila != null ) {
		echo "<tr bgcolor='lightgreen'>";
		echo "<td>$fila[chip]</td>";
		echo "<td>$fila[nombre]</td>";
		echo "<td>$fila[especie]</td>\n";
		echo "<td><img src= 'img/$fila[imagen]' width=100 height=100></td>\n";
		echo "</tr>";
		$fila = $resultado->fetch_array ( MYSQLI_ASSOC );
	}
	echo "<p>Información de servidor: $conexion->host_info</p>";
	echo "<h3>Desconectando...</h3>";
	mysqli_close ( $conexion );
}
echo "<a href='conexion1.php'>Ir a conexión1.php</a></br>";
echo "<a href='conexion2.php'>Ir a conexion2.php</a></br>";
echo "<a href='conexion4.php'>Ir a conexion4.php</a></br>";
echo "<a href='conexion5.php'>Ir a conexion5.php</a></br>";
echo "<a href='conexion6.php'>Ir a conexion6.php</a></br>";
?>
</table>
</body>
</html>