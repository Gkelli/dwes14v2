<html>
<head>
<title>Cookies y sesiones</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
// // comprobar si navegador tiene habilitada las cookies
// setcookie("test", "test", time() + 3600, '/');
// if(count($_COOKIE) ==0) echo "<h3>Advertencia: tu navegador tiene las cookies deshabilitadas. Esta aplicación no funcionará</h3>";

if (isset ( $_COOKIE ["visitante"] )) {
	echo "<h2>Damos la bienvenida a $_COOKIE[visitante]</h2>";
} else {
	echo "<h2>No se encuentra el nombre del visitante</h2>";
}
?>
<a href="<?php echo $_SERVER['PHP_SELF']?>">Enlace a esta misma página</a>
</body>
</html>