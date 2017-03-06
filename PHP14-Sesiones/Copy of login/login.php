<?php
// login.php: muestra un formulario para iniciar sesión. El formulario será tratado en esta misma página, y si las credenciales son correctas se iniciará sesión y se redirigirá automáticamente a index.php
?>
<?php
session_start ();
$mensajeError = "";
/*
Si el usuario está ya logueado se ha a index directamente:
if($_SESSION ['usuario'] = $_POST ['usuario'];)
	header ( 'Location: index.php' );
*/
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
echo "hola ";
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if (isset ( $_REQUEST ['enviar'] )) {
	echo "hola 2";
	
	if (empty ( $_REQUEST ['usuario'] ) && empty ( $_REQUEST ['password'] )) {
		$mensajeError = "Debes introducir un nombre y contraseña";
	} else {
		
		$login = $_REQUEST ["usuario"];
		$password = $_REQUEST ["password"];
		
		$consulta = "SELECT * FROM usuario WHERE login = " . $login;
		
		$resultado = $conexion -> query($consulta);
// 		if($resultado->num_rows === 0) 
// 			echo "<p>No hay resultados en la base de datos</p>"; 
			
		
		
// 		if ( $conexion-> mysql_num_rows($resultado) == 0) {
// 			echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
// 			exit;
// 		}
		

	// dado que es solamente un resultado que saco de la consulta, usar otra cosa que no sea fecth array

		$usuario = $resultado-> fetch_array(MYSQLI_ASSOC);
		
		//$número_filas = mysql_num_rows ( $resultado );

		if (empty($usuario)) 
			//die ( "<h3>ERROR en la petición. Nombre de usuario no existe</h3>" );
			$mensajeError = "El usuario no existe";
		
		
		echo "hola 3";
		
		if (password_verify ( $password, $usuario ['password'] )) {
		//if (strcmp ( $usuario ['password'], $password ) == 0) {
			$mensajeError = "Contraseña erronea";
		} else {
			echo "hola hola";
			$_SESSION ['login'] = 1;
			$_SESSION ['usuario'] = $_POST ['usuario'];
			header ( 'Location: index.php' );
		}
	}
	echo "hola 4";
	mysqli_close ( $conexion );
} else {
	?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<label>Introduce tu login:</label><br> <input type="text" name="usuario"><br> 
	<label>Contraseña:</label><br> <input type="password" name="password"><br> 
	<input type="submit" value="Entrar" name="enviar">
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