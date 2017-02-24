<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>PROBLEMA 4</title>
</head>
<body>
<?php include 'header.php'?>
<h5> Vamos a gestionar un sistema sencillo de bloc de notas estilo post-it.</h5>

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