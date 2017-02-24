<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>PROBLEMA 1</title>
</head>
<body>
<?php include 'header.php'?>
<h5>Pedir por formulario un número X y mostrar una pirámide de números con marco.</h5>

<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Introduzca un número <input type="text" name="numero" ><br/>		
	<br/><input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		if (isset($_POST['enviar'])) {	
			$numero=$_POST['numero'];
			echo "/";
			for ($i = 0; $i < $numero; $i++) {
				echo " - ";
			}
			echo "\\";
			
			for ($i = 1; $i <= $numero; $i++) {
				echo  "<br/>"; echo "| ";
				for ($j = 1; $j <= $i; $j++) {
					echo $j;
				}
					
			}
			
			echo "<br/>"; echo "\\";
			for ($i = 0; $i < $numero; $i++) {
				echo " - ";
			}
			echo "/";

		}
	}
	?>	

</body>
</html>