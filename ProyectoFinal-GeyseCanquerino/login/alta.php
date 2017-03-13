<?php
// alta.php: muestra un formulario para dar de alta un usuario. El formulario será tratado en esta misma página: si no hay errores añadirá el nuevo usuario a la base de datos y redirigirá a login.php
?>
<?php
session_start ();
$mensajeError = "";
if (! empty ( $_SESSION ['usuario'] )) {
	header ( 'Location: index.php' );
}
?>
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
	$login = $_REQUEST ["usuario"];
	$password = $_REQUEST ["password"];
	$nombre_completo = $_REQUEST ["nombre"];
	$tipo_cuenta = $_REQUEST ["tipo"];
	$descripcion = $_REQUEST ["descripcion"];
	
	if (empty ( $_REQUEST ['usuario'] )) {
		$mensajeError = "Debes introducir un login para registrarte";
		// header ( 'Refresh:5;login.php' );
	} else {
		if (empty ( $_REQUEST ['password'] )) {
			$mensajeError = "Debes introducir una contraseña para registrarte";
		} else {
			
			$consulta = "SELECT * FROM usuario WHERE login = '$login'";
			$resultado = $conexion->query ( $consulta );
			$row = $resultado->fetch_assoc();
			if ($resultado->num_rows != 0) {
				$mensajeError = "El usuario ya existe";
			} else {
				mysqli_free_result ( $resultado );
				$consulta_insertar = "INSERT INTO usuario (login ,password, nombre, admin, descripcion) VALUES('$login', '$password', '$nombre_completo', '$tipo_cuenta', '$descripcion')";
				$resultado = $conexion->query ( $consulta_insertar );
				if ($conexion->error) {
					$mensajeError = $conexion->error;
				} else {
					echo "<h3 class='error'> Te has dado de alta correctamente,serás redirigido a la página de login </h3>";
					header ( 'Refresh:3;logout.php' );
				}
			}
		}
		mysqli_close ( $conexion );
	}
	
	if (! empty ( $mensajeError )) {echo "<h3 class='error'>$mensajeError</h3><br>";}
}
?>
<html>
<head>
<title>Alta de Usuario</title>
<meta charset="UTF-8" />
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
</head>
<body>
<H3> DATOS PARA EL REGISTRO </H3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Login:</label><br> <input type="text" name="usuario"><br> 
	<label>Contraseña:</label><br> <input type="password" name="password"><br> 
	<label>Nombre Completo:</label><br> <input type="text" name="nombre"><br> 
	<label>Descripción:</label><br> <textarea rows="4" cols="50" name="descripcion"></textarea><br> 
	<label>Tipo de cuenta:</label><br> Cuenta estándar <input type="radio" name="tipo" value="0" checked>Cuenta administrador<input type="radio" name="tipo" value="1"><br> 
	<input type="submit" value="Entrar" name="enviar">
</form>
<a href="login.php">¿Ya tienes cuenta? Haz clic aquí para iniciar sesión.</a>
</body>
</html>

