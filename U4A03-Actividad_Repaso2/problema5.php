<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>PROBLEMA 5</title>
</head>
<body>
<?php include 'header.php'?>
<h5> Programa un sencillo juego en el que se irán introduciendo números X entre 1 y 50 a través de un formulario. Cada vez que se introduzca uno, 
en pantalla se mostrará el número de valores introducidos hasta el momento</h5>

<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca un número <input type="text" name="numero" ><br/>
	<br/><input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		if (isset($_POST['enviar'])) {	
			
			
			

		}
	}
	?>	

</body>
</html>