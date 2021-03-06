<?php 
//index.php: simulará el contenido real de nuestra aplicación, sólo disponible para usuarios autenticados (en esta práctica será simplemente un saludo al usuario autenticado). Si un usuario accede a esta página sin estar autenticado, será redirigido de forma automática a login.php
?>

<?php
session_start();
$mensajeError="";
if ($_SESSION['login']!="1") {
	header ("Location: login.php");
}
$mensajeError = "";
?>
<html>
<head>
<title>Autenticación en PHP</title>
<meta charset="UTF-8"/>
<link REL="stylesheet" TYPE="text/css" HREF="../styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
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
$login = $_SESSION ["usuario"];
$consulta = "SELECT * FROM usuario WHERE login = '$login'";

$resultado = $conexion->query ( $consulta );
$row = $resultado->fetch_assoc();
if ($resultado->num_rows == 0) {	
	$mensajeError = "Serás redirigido a la página de login";
	header ( 'Refresh:5;login.php' );	
} else {
	echo "<h2>Bienvenido, ". $login ."</h2>";
	echo "<a href='logout.php'>cerrar sesión</a><br>";
	echo "<a href='baja.php'>eliminar cuenta</a>";
}
mysqli_close ( $conexion );     

if (! empty ( $mensajeError )) { echo "<h3 class='error'>$mensajeError</h3><br>";}
?>
</body>
</html>