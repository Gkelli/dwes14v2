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
// recoger datos
if (isset ( $_POST ["enviar"] )) {
	setcookie ( "visitante", $_POST ["nombre"], time () + (300), "/PHP14-Sesiones/cookies" ); // 86400 = segundos en 1 día
} elseif (isset ( $_POST ["eliminar"] )) {
	setcookie ( "visitante", $_POST ["nombre"], time () + (-1), "/PHP14-Sesiones/cookies" ); // -1 para una fecha anterior a la actual
}
if (isset ( $_COOKIE ["visitante"] )) {
	echo "<h2>Damos la bienvenida a $_COOKIE[visitante]</h2>";
} else {
	
	// solicitar nombre al usuario
	?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<label>Escribe tu nombre para dirigirnos a ti:</label> 
		<input type="text" name="nombre"><br /> 
		<input type="submit" value="Enviar"	name="enviar">
		<input type="submit" value="Eliminar"	name="eliminar">
</form>
<?php

}
?>
<p><a href="<?php echo $_SERVER['PHP_SELF']?>">Enlace a esta misma página</a></p>
</body>
</html>