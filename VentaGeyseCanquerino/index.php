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
	<?php	if (!isset($_POST['enviar'])) {	?>
	<h5>Datos Vehiculo</h5>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca la marca del vehiculo : <input type="text" name="marca" ><br/>
	Introduzca el modelo del vehiculo : <input type="text" name="modelo" ><br/>
	Introduzca la fecha de compra del vehiculo : <input type="date" name="fecha_compra" ><br/>
	Introduzca el color del vehiculo : <input type="text" name="color" ><br/>
	Introduzca los kilometros de uso del vehiculo : <input type="text" name="kilometros" ><br/>
	Introduzca el precio del vehiculo : <input type="text" name="precio" ><br/>
	Introduzca la descripciósn del estado del vehiculo : <textarea name="descripcion"> </textarea><br/>	
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
		
		if ($usuario->validar_correo($usuario->ver_email())) {
			echo 'OK';
		} else {
			echo 'NO';
		}
		if ($usuario->validar_contrasena($usuario->ver_contrasena(), $error_contrasena)) {
			echo 'OK';
		} else {
			echo 'NO';
		}
	}
		
	}
	?>	
</body>
</html>