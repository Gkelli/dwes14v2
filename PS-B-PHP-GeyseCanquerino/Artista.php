<html>
<head>
<title>Datos del grupo</title>
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
if (! isset ( $_REQUEST ["artista"] ))
	die ( "<h3>ERROR</h3>" );
	$artista = $_REQUEST ["artista"];
	$resultado = $conexion->query ( "SELECT * FROM actuacion,dias WHERE nombre='".$artista."' and actuacion.dia = dias.id");
	$row=$resultado->fetch_array(MYSQLI_ASSOC);
	
	echo "<ul>";
	echo "<h4>Datos del grupo ".$row['nombre']."</h4>";
	while($row!=null) {		
		echo "<ol>Nombre del grupo<span> " . $row['nombre'] . "</span></a></ol><br/>";
		echo "<ol>Pais <span> " . $row['origen'] . "</span></ol><br/>";
		echo "<ol>Dia de actuación<span> " . $row['dia'] . "</span></ol><br/>"; $dia=$row['dia'];
		echo "<ol><img src='img/".$row['imagen']."'  width='100px'  height='100'> </ol><br/>";
		echo "<ol>URL<span> " . $row['url'] . "</span></ol><br/>";
		$row=$resultado->fetch_array(MYSQLI_ASSOC);
	}
	echo "</ul>";
	?>
<br>
<br>
<a href="Cartel.php?dia=<?php echo $dia?>">Volver al cartel del dia <?php echo $dia?></a><br/>
<a href="PaginaPrincipal.php">Volver a la página principal del festival</a>
</body>
</html>