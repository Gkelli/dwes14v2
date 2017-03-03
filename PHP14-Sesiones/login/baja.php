<?php 
session_start();
$mensajeError = "";
?>
<?php

echo "<h2>Bienvenido, ".$_SESSION['usuario']."</h2>";


// Recuperar la sesión actual


// Si el usuario ha enviado el formulario...
// ¿El campo de contraseña está vacío?
// Sí: Actualizar la variable $mensajeError
// No: ¿Coincide la contraseña con la almacenada en la base de datos?
// No: actualizar $mensajeError
// Sí: ¿surge error al intentar eliminar el usuario de la base de datos?
// Sí: Actualizar la variable $mensajeError con el atributo error del objeto $conexion
// No: redirigir a 'logout.php'
// 		Después de emitir la cabecera HTML (sólo se llega hasta aquí si el usuario no envió el formulario, o bien lo envió pero surgieron errores, de lo contrario se habrá redirigido a logout.php))
// 		Mostrar el formulario de confirmación de contraseña para proceder al borrado de la cuenta. El formulario será procesado por este mismo archivo.
// 		Incluir un enlace para volver a index.php por si el usuario cambia de idea y no desea dar de baja la cuenta.


?>