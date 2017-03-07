<?php 
//baja.php: elimina el usuario de la base de datos y redirige a logout.php para cerrar la sesión. Para dar mayor realismo, solicitaremos al usuario que confirme su contraseña antes de proceder a la baja.
?>
<?php
session_start ();
$mensajeError = "";
// if (! empty ( $_SESSION ['usuario'] )) {
// 	header ( 'Location: index.php' );
// }
?>
<html>
<head>
<title>Baja de usuario</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if (isset ( $_REQUEST ['enviar'] )) {
	$password = $_REQUEST ["password"];
	
		if (empty ( $_REQUEST ['password'] )){
			$mensajeError = "Debes introducir la contraseña para darte de baja";
		} else {
		$consulta = "DELETE FROM usuario WHERE login='" . $_SESSION ['usuario'] ."'";
		$resultado = $conexion->query ( $consulta );
		//$row = $resultado->fetch_array ( MYSQLI_ASSOC );
		if ($conexion->error) {
			$mensajeError = $conexion->error;
		} else {
			echo "<p>Te has dado de baja correctamente, serás redirigido a otra página</p>";
			header ( 'Refresh:5;logout.php' );
		}		
		mysqli_close ( $conexion );
	}
} else {
	?>
<H3> Confirmación de datos para dar de baja la cuenta </H3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Contraseña:</label><br> <input type="password" name="password"><br> 
	<input type="submit" value="Entrar" name="enviar">
</form>
<a href="index.php">Si no estás seguro de darte de baja,haz click</a>
<?php
}
if (! empty ( $mensajeError )) {
	echo "<h3>$mensajeError</h3><br>";
	echo "<a href='baja.php'>Volver a intentar</a>";
}
?>
</body>
</html>

