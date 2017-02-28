<?php
session_start();
$mensajeError="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (empty($_POST['usuario'])) {
		$mensajeError = "Debes introducir un nombre";
	}
	else {
		$_SESSION['usuario']=$_POST['usuario'];
// 		$servidor = "localhost";
// 		$usuario = $_SESSION['usuario'];
// 		$clave = $_POST['password'];
// 		$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
// 		$conexion->query ( "SET NAMES 'UTF8'" );
// 		if ($conexion->connect_errno) {
// 			$mensajeError = "Error al establecer la conexión: " . $conexion->connect_errno . "-" . $conexion->connect_error;
// 		}
	}
}
?>
<html>
<head>
<title>Autenticación en PHP</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php 

if (isset($_SESSION['usuario'])) {
	echo "<h2>Bienvenido, ".$_SESSION['usuario']."</h2>";
}
else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label>Introduce tu nombre:</label><br><input type="text" name="usuario"><br>
    <label>Contraseña:</label><br><input type="password" name="password"><br>
    <input type="submit" value="Entrar" name="enviar">
</form>
<?php 
}
if (!empty($mensajeError)) {
	echo "<h3>$mensajeError</h3>";
}
?>
</body>
</html>