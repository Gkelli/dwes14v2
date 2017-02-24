<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>U2A04 - Clases y objetos</title>
</head>
<body>
<?php include '../header.php'?>
<?php include 'class.php'?>
<h4>U2A04 - Clases y objetos</h4>
	<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="clases_objetos" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca el nombre del alumno : <input type="text" name="nombre" ><br/>
	Introduzca la edad del alumno : <input type="text" name="edad" ><br/>
	Introduzca el sexo del alumno : Hombre <input type="radio" name="sexo" value="hombre" checked > Mujer <input type="radio" name="sexo"  value="mujer"><br/>
	Introduzca las notas del alumno : <input type="text" name="nota1" ><input type="text" name="nota2" ><input type="text" name="nota3" ><br/>
	<input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		
		// $alumno = new Alumno($_POST['nombre'],$_POST['edad'],$_POST['sexo']);
		$alumno = new Alumno();
		$alumno->set_nombre($_POST['nombre']);
		$alumno->set_edad($_POST['edad']);
		$alumno->set_sexo($_POST['sexo']);
		echo $alumno->ver_datos_alumno();
		echo $alumno->media_notas($_POST['nota1'], $_POST['nota2'], $_POST['nota3']);
	}
	?>	
</body>
</html>