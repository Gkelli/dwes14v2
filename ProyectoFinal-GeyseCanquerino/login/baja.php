<?php 
//baja.php: elimina el usuario de la base de datos y redirige a logout.php para cerrar la sesión. Para dar mayor realismo, solicitaremos al usuario que confirme su contraseña antes de proceder a la baja.
?>
<?php
session_start ();
$mensajeError = "";

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
		//$row = $resultado->fetch_assoc();
		if ($conexion->error) {
			$mensajeError = $conexion->error;
		} else {
			echo "<h3 class='error'> Te has dado de baja correctamente, serás redirigido a otra página</h3>";
			header ( 'Refresh:5;logout.php' );
		}
		mysqli_close ( $conexion );
	}
	if (! empty ( $mensajeError )) { echo "<h3 class='error'>$mensajeError</h3><br>";}
} else {
?>
<html>
<head>
<title>Baja de usuario</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
</head>
<body>
<H3> Confirmación de datos para dar de baja la cuenta </H3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Contraseña:</label><br> <input type="password" name="password"><br> 
	<input type="submit" value="Entrar" name="enviar">
</form>
<a href="index.php">Si no estás seguro de darte de baja,haz click</a>
<?php }?>
</body>
</html>

