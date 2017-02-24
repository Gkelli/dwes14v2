<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Venta GeyseCanquerino - Examen</title>
<style> .error {color: #FF0000;}</style>
</head>
<body>
<?php include 'class.php';	include 'header.php'?>
<h4>Venta GeyseCanquerino</h4>

---------------------------------------------------------------------------------------
<?php
$marcaErr = $modeloErr = $fechaErr = $colorErr = $kilometrosErr = $precioErr = $descripcionErr= $nombreErr= $contrasenaErr = $confirmacionErr = $emailErr= "";
$marca = $modelo = $fecha = $color = $kilometros = $precio = $descripcion = $nombre = $contrasena = $confirmacion = $email= "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	// Comprobamos que la marca contenga solo letras y espacios
	if (empty ( $_POST ["marca"] )) {
		$marcaErr = "Se requiere una marca";
	} else {
		$marca = test_input ( $_POST ["marca"] );
		if (! preg_match ( "/^[a-zA-Z ]*$/", $marca )) { // funcion para comprobar que solo existen letras y espacios
			$marcaErr = "Solo espacios y letras";
		}
	}
	// Comprobamos que el modelo contenga solo letras y espacios
	if (empty ( $_POST ["modelo"] )) {
		$modeloErr = "Se requiere un modelo";
	} else {
		$modelo = test_input ( $_POST ["modelo"] );
		if (! preg_match ( "/^[a-zA-Z ]*$/", $modelo )) { // funcion para comprobar que solo existen letras y espacios
			$modeloErr = "Solo espacios y letras";
		}
	}
	
	
	// Comprobamos que la fecha no sea mayor del año actual ni menor que la fecha de nacimiento que la persona más vieja del mundo
	if (empty ( $_POST ["fecha"] )) {
		$fechaErr = "Se requiere un año";
	} else {
		$fecha = test_input ( $_POST ["fecha"] );
		if ($fecha > date ( "Y" )) { // Comprobamos que la fecha no es mayor del año actual
			$fechaErr = "El año introducido es demasiado grande";
		}elseif ($fecha < date ( "Y" ) - 116) { // Comprobamos que la fecha no es menor que la fecha de nacimiento de la persona más vieja del mundo
			$fechaErr = "El año introducido es demasiado pequeño";
		}
		if (! preg_match ( "/^[0-9]*$/", $fecha )) { // Comprobamos que la fecha solo contiene numeros
			$fechaErr = "Solo 4 numeros";
		}
	}
	
	// Comprobamos que el color contenga solo letras y espacios
	if (empty ( $_POST ["color"] )) {
		$colorErr = "Se requiere un color";
	} else {
		$color = test_input ( $_POST ["color"] );
		if (! preg_match ( "/^[a-zA-Z ]*$/", $color )) { // funcion para comprobar que solo existen letras y espacios
			$colorErr = "Solo espacios y letras";
		}
	}
	
	// Comprobamos que los kilometros no esté vacio
	if (empty ( $_POST ["kilometros"] )) {
		$kilometrosErr = "Se requiere el kilometraje";
	} else {
		$kilometros = test_input ( $_POST ["kilometros"] );
	}
	
	// Comprobamos que el precio no esté vacio
	if (empty ( $_POST ["precio"] )) {
		$precioErr = "Se requiere el precio";
	} else {
		$precio = test_input ( $_POST ["precio"] );
	}
	// Comprobamos que la descripción no esté vacia
	if (empty ( $_POST ["descripcion"] )) {
		$descripcionErr = "Se requiere una descripción del vehiculo";
	} else {
		$descripcion =  $_POST ["descripcion"] ;
	}
	
	//-validar con los metodos creados en la clase los datos del usuario 
	//como contraseña nombre y email 
	if (empty ( $_POST ["email"] )) {
		$emailErr = "Email es campo obligatorio";
	} else {
		$email = test_input ( $_POST ["email"] );
		if (! filter_var ( $email, FILTER_VALIDATE_EMAIL )) { //Comprobamos que el email es valido
			$emailErr = "Formato de email es invalido";
		}
	}

}
function test_input($data) {
	$data = trim ( $data );
	$data = stripslashes ( $data );
	$data = htmlspecialchars ( $data );
	return $data;
}
?>

----------------------------------------------------------------------

	<?php	if (!isset($_POST['enviar'])) {	?>
	<h5>Datos Vehiculo</h5>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca la marca del vehiculo : <input type="text" name="marca" ><br/>
	Introduzca el modelo del vehiculo : <input type="text" name="modelo" ><br/>
	Introduzca la fecha de compra del vehiculo : <input type="date" name="fecha_compra" ><br/>
	Introduzca el color del vehiculo : <input type="text" name="color" ><br/>
	Introduzca los kilometros de uso del vehiculo : <input type="text" name="kilometros" ><br/>
	Introduzca el precio del vehiculo : <input type="text" name="precio" ><br/>
	Introduzca la descripción del estado del vehiculo : <textarea name="descripcion"> </textarea><br/>	
	<h5>Datos Usuario</h5>
	<!-- Los datos que utilizará para gestionar posteriormente su anuncio: -->
	Introduzca el nombre de usuario : <input type="text" name="nombre" ><br/>
	Introduzca la contraseña : <input type="password" name="contrasena" value="contraseña"><br/>
	Introduzca la confirmación de la contraseña : <input type="password" name="confirmacion" value="confirmacion"><br/>
	Introduzca el correo electrónico : <input type="text" name="email" ><br/>
	<input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		if (isset($_POST['enviar'])) {			
		
		$vehiculo = new Vehiculo();
		$vehiculo->set_marca($_POST['marca']);
		$vehiculo->set_modelo($_POST['modelo']);
		$vehiculo->set_fecha_compra($_POST['fecha_compra']);
		$vehiculo->set_color($_POST['color']);
		$vehiculo->set_kilometros($_POST['kilometros']);
		$vehiculo->set_precio($_POST['precio']);
		$vehiculo->set_descripcion($_POST['descripcion']);
		
		echo $vehiculo->ver_datos_vehiculo();
		
		$usuario = new Usuario();
		$usuario ->set_nombre($_POST['nombre']);
		$usuario ->set_contrasena($_POST['contrasena']);
		$usuario ->set_confirmacion($_POST['confirmacion']);
		$usuario ->set_email($_POST['email']);
		
		if ($usuario->validar_correo()) {
			echo 'OK';
		} else {
			echo 'NO';
		}
		
	}
		
	}
	?>	
</body>
</html>