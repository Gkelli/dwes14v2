<html>
<head>
<meta charset='UTF-8' />
<style>
* {margin: 5px;}
.error { color: red; }
</style>
</head>
<body>
<h2>Formulario sencillo:</h2>
<?php

/* DWES - IES Leonardo Da Vinci

Este programa procesa un formulario de forma que el código del formulario se codifique una sola vez.
El plan general seguido es:
-----
completado = false
si se ha pulsado Enviar (hay datos)
> Anotar los datos recibidos en variables
> Validar: si todo está bien, completado = true

si completado == true
> Mostrar datos, continuar con la aplicación
en otro caso
> Mostrar el formulario, teniendo en cuenta:
* Recordar los campos que el usuario ya había rellenado (esto es muy apreciado por el usuario)
* Mostrar los mensajes de error correspondientes
-----

Si la validación es muy compleja, puedes apoyarte en funciones

Observa que en cada campo se gestionan los errores de una forma:
* Con 'nombre' es más sencillo: siempre se pone el 'span' error (que a veces estará vacío)
y siempre se recuerda lo que tecleó el usuario, aunque fuera erróneo (en este caso, demasiado largo)
* Con 'apellidos' comprobamos previamente si ha habido un error para, en ese caso, NO recordar lo que
escribió el usuario. Tú decides qué te parece más conveniente

*/



$completado = false;
// Campos:
$nombre= $apellidos="";
// Errores:
$errorNombre= $errorApellidos="";

if (isset ( $_POST ['enviar'] )) {
	// El formulario ha sido enviado: validación
	$nombre = $_POST ['nombre'];
	$apellidos = $_POST ['apellidos'];

	if ($nombre == "")
		$errorNombre = "El campo nombre no puede estar vacío";
		if (strlen($nombre)>10)
			$errorNombre = "El campo nombre no puede tener más de 10 caracteres";
			if ($apellidos == "")
				$errorApellidos = "El campo apellidos no puede estar vacío";
				// Comprobar si todo está bien
				if (strlen($apellidos)>20)
					$errorApellidos = "El campo apellidos no puede tener más de 20 caracteres";
					// Recuento de errores:
					if ($errorNombre=="" and $errorApellidos=="")
						$completado = true;
}

if ($completado) {
	// Continúa la aplicación
	echo "<h4>Datos recibidos:</h4>\n";
	echo "<ul>\n";
	echo "<li>Nombre:" . $_POST ['nombre'] . "</li>\n";
	echo "<li>Apellidos:" . $_POST ['apellidos'] . "</li>\n";
	echo "</ul>\n";
	echo "<p><a href='".$_SERVER ['PHP_SELF']."'>Volver</a></p>";
} else {
	// Mostramos el formulario
	echo "<form action='" . htmlspecialchars ( $_SERVER ['PHP_SELF'], ENT_QUOTES, "UTF-8" ) . "' method='post'>\n";
	echo "<label>Nombre:</label>";
	echo "<input name='nombre' type='text' value='" .$nombre. "'/><span class='error'>".$errorNombre."</span><br/>\n";
	echo "<label>Apellidos:</label>";
	if ($errorApellidos=="")
		echo "<input name='apellidos' type='text' value='" .$apellidos. "'/><br/>";
		else
			echo "<input name='apellidos' type='text' value=''/><span class='error'>".$errorApellidos."</span><br/>\n";
			echo "<input name='enviar' type='submit' value='Enviar datos'/></form>";
}

?>
</body>
</html>