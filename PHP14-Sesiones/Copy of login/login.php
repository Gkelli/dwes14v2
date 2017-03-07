<?php
// login.php: muestra un formulario para iniciar sesión. El formulario será tratado en esta misma página, y si las credenciales son correctas se iniciará sesión y se redirigirá automáticamente a index.php
?>
<?php
session_start ();
$mensajeError = "";
// if ($_SESSION ['usuario'] ==  $_POST['usuario']){// $_POST['usuario']) //if ($_SESSION ['login'] =  1)
// 	header ( 'Location: index.php' );	
// }
?>
<html>
<head>
<title>Autenticación en PHP</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if (isset ( $_REQUEST ['enviar'] )) {
	if (empty ( $_REQUEST ['usuario'] ) && empty ( $_REQUEST ['password'] ))
		$mensajeError = "Debes introducir un nombre y contraseña";

		$login = $_REQUEST ["usuario"];
		$password = $_REQUEST ["password"];

		$consulta = "SELECT * FROM usuario WHERE login = '$login'";

		$resultado = $conexion->query ( $consulta );
		$row = $resultado->fetch_array ( MYSQLI_ASSOC );
		if ($resultado->num_rows == 0) {
			$mensajeError = "Usuario no existe";
		} else {
			if (strcmp ( $row ['password'], $password ) == 0) {
				$_SESSION ['login'] = 1;
				$_SESSION ['usuario'] = $_POST ['usuario'];
				header ( 'Location: index.php' );
			} else {
				$mensajeError = "Contraseña erronea";
				echo "<br><a href='login.php'>Volver a Intentarlo</a>";
			}
		}
		mysqli_close ( $conexion );
} else {
	?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Introduce tu login:</label><br> <input type="text"
		name="usuario"><br> <label>Contraseña:</label><br> <input
		type="password" name="password"><br> <input type="submit"
		value="Entrar" name="enviar">
</form>
<?php
}
if (! empty ( $mensajeError )) {
	echo "<h3>$mensajeError</h3>";
}
?>
<a href="alta.php">¿aún no tienes cuenta? Haz clic aquí para crear una</a>
</body>
</html>