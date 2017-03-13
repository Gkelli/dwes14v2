<?php
// login.php: muestra un formulario para iniciar sesión. El formulario será tratado en esta misma página, y si las credenciales son correctas se iniciará sesión y se redirigirá automáticamente a index.php
?>
<?php

session_start();
if (isset($_SESSION['login']) && strcmp($_SESSION['login'], "1")==0) {
	header ("Location:index.php");
}
$mensajeError="";
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if (isset ( $_REQUEST ['enviar'] )) {
	if (empty ( $_REQUEST ['usuario'] ) && empty ( $_REQUEST ['password'] )){
		$mensajeError = "Debes introducir un nombre y contraseña, serás redigirido nuevamente a la página de login";
		header ( 'Refresh:5;login.php' );
	} else {
		$login = $_REQUEST ["usuario"];
		$password = $_REQUEST ["password"];

		$consulta = "SELECT * FROM usuario WHERE login = '$login'";

		$resultado = $conexion->query ( $consulta );
		$row = $resultado->fetch_assoc();
		if ($resultado->num_rows == 0) {
			$mensajeError = "Usuario no existe";
		} else {
			if (strcmp ( $row ['password'], $password ) != 0) {
				$mensajeError = "Contraseña erronea";
				//echo "<br><a href='login.php'>Volver a Intentarlo</a>";
			} else {
				$_SESSION ['login'] = 1;
				$_SESSION ['usuario'] = $_POST ['usuario'];
				header ( 'Location: index.php' );
			}
		}
		mysqli_close ( $conexion );
	}
	if (! empty ( $mensajeError )) { echo "<h3 class='error'>$mensajeError</h3><br>";}
}

?>
<html>
<head>
<title>Autenticación en PHP</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Introduce tu login:</label><br> <input type="text" name="usuario"><br> 
	<label>Contraseña:</label><br> <input type="password" name="password"><br> 
	<input type="submit" value="Entrar" name="enviar">
</form>
<a href="alta.php">¿aún no tienes cuenta? Haz clic aquí para crear una</a>
</body>
</html>