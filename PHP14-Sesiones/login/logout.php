<?php
session_start();
$mensajeError="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (empty($_POST['usuario'])) {
		$mensajeError = "ERROR";
	}
	else {
		$_SESSION['usuario']=0;
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

echo "<h2>ADIOS, ".$_SESSION['usuario']."</h2>";

if (!empty($mensajeError)) {
	echo "<h3>$mensajeError</h3>";
}
?>
</body>
</html>