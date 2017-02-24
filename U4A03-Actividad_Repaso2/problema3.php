<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>PROBLEMA 3</title>
</head>
<body>
<?php include 'header.php'?>
<h5> Dado un número X, mostrar una tabla cuadrada con números de forma que cada número siempre esté en una 
celda contigua al número anterior, y las filas se distingan con colores de fondo diferentes.</h5>

<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca un número <input type="text" name="numero" ><br/>
	<br/><input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		if (isset($_POST['enviar'])) {	
			$numero=$_POST['numero'];
			for ($i = 1; $i <= $numero; $i++) {
				echo "| " . $i . " ";
				for ($j = 0; $j < $numero; $j++) {
					
				}
			}

		}
	}
	?>	

</body>
</html>