<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Examen 1 EV rec - 4.2 Aplicación web 2: Libro de visitas</title>
</head>
<body>
<?php include 'class.php';	include 'header.php'?>

<h3> -- Comentarios Visitas --  </h3>
<?php 
//function mostrar_archivo(){
	$rutaArchivo = "files/comentarios.txt";
	$archivo = fopen($rutaArchivo, "a") or die("Imposible abrir el archivo");
	while(!feof($archivo)) {
		$c = fgetc($archivo);
		if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
		else echo $c;
	}
	fclose($archivo);
//}
?>

<?php	if (!isset($_POST['enviar'])) {	?>
	<h5>¿Quieres hacer un nuevo comentario?</h5>
	<form name="datos_formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
	Nombre autor :<br/>
	<input type="text" name="autor" ><br/>
	Comentario a realizar : <br/>
	<textarea name="comentario" rows="4" cols="50"> </textarea><br/>		
	<br/><input type="submit" value = "ENVIAR" name="enviar"/><br/>
	</form>
	<?php 
	} else {	
		if (isset($_POST['enviar'])) {	
			
			//escribimos el comentario en el archivo de comentarios
			date_default_timezone_set('UTC');
			$rutaArchivo = "files/comentarios.txt";
			echo readfile("files/comentarios.txt");
			$archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");
			fwrite($archivo,date('l jS \of F Y h:i:s A') . " " . ($_POST['autor']) . " escribió:\n ");
			fwrite($archivo,$_POST['comentario']."\n");
			fclose($archivo);
			
			// imprimimos el comentario
			
			echo date('l jS \of F Y h:i:s A') . " <strong>" . ($_POST['autor']) . "</strong> escribió:</br> ";
			echo ($_POST['comentario']);
			?>
			
			<!--  <br/><input type="submit" value = "VOLVER" name="volver"/><br/>-->
			<?php 
		}
	}
	?>	
</body>
</html>