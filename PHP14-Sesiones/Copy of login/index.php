<?php 
//index.php: simulará el contenido real de nuestra aplicación, sólo disponible para usuarios autenticados (en esta práctica será simplemente un saludo al usuario autenticado). Si un usuario accede a esta página sin estar autenticado, será redirigido de forma automática a login.php
?>

<?php
session_start();
$mensajeError="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (empty($_POST['usuario'])) {
		$mensajeError = "Debes introducir un nombre";
	}
	else {
		$_SESSION['usuario']=$_POST['usuario'];
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

<?php 
}
if (!empty($mensajeError)) {
	echo "<h3>$mensajeError</h3>";
}
?>
</body>
</html>