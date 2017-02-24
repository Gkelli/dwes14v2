<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>PROBLEMA 2</title>
</head>
<body>
<?php include 'header.php'?>
<h5>
El usuario introducirá un número X y un texto mediante un formulario. La aplicación escribirá el texto tras una flecha del tamaño indicado por X. </h5>

<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca un número <input type="text" name="numero" ><br/>	
	Introduzca el texto <input type="text" name="texto" ><br/>	
	<br/><input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {
	if (isset ( $_POST ['enviar'] )) {
		
		$numero = $_POST ['numero'];
		$texto = $_POST ['texto'];
		//falta usar la etiqueta <pre>
		for($i = 1; $i <= $numero; $i ++) {
			echo "|" . str_repeat ( '&nbsp;', $i-1 ) . "\\" . "</br>";
		}
		echo "|" . str_repeat ( '&nbsp;', $numero ) . "> " . $texto . "</br>";
		
		for($i = $numero; $i > 0; $i --) {
			echo "|" . str_repeat ( '&nbsp;', $i-1 ) . "/" . "</br>";
		}
	}
	}
	?>	

</body>
</html>