<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Gestor de Nombres</title>
</head>
<body>
<?php include 'header.php'?>
<h3>-- Almacenamiento de nombres en un archivo --</h3>

<?php

/*
 * Codifica una aplicación web que funcione de la siguiente forma:
 * - Habrá un archivo para almacenar nombres de persona. El archivo estará inicialmente vacío
 * - Se mostrarán dos cosas en pantalla:
 * - La lista de nombres (sacada del archivo) ordenada alfabéticamente. Si está vacía, se mostrará un mensaje indicándolo
 * - Un formulario con un campo de texto para introducir un nombre, y un botón de tipo radio para escoger *añadir* o *borrar*
 * - Se irán añadiendo o borrando nombres del archivo. Se mostrará un error si se intenta añadir un nombre que ya existe, o borrar un nombre que no existe.
 * se mostrará una lista de nombres de persona, extraídas de un un formulario con un campo de texto
 */

$rutaArchivo = "files/nombres.txt";
$archivo = fopen ( $rutaArchivo, "r" ) or die ( "Imposible abrir el archivo" );
while ( ! feof ( $archivo ) ) {
	$c = fgetc ( $archivo );
	if (($c == "\n") or ($c == "\r\n"))
		echo "<br/>";
	else
		echo $c;
}
fclose ( $archivo );

?>


<?php	if (!isset($_POST['enviar'])) {	?>
	<form name="nombres" method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
		Introduzca un nombre <input type="text" name="nombre"><br /> AÑADIR <input
			type="radio" value="annadir" name="elegir" /> BORRAR <input
			type="radio" value="borrar" name="elegir" /><br /> <br />
		<input type="submit" value="ENVIAR" name="enviar" /><br />
	</form>
	<?php
} else {
	if (isset ( $_POST ['enviar'] )) {
		
		//echo $_POST ['elegir'];
		
		// escribir
		$rutaArchivo = "files/nombres.txt";
		//$existe = false;
		// echo readfile("files/comentarios.txt");
		$archivo = fopen ( $rutaArchivo, "r" ) or die ( "Imposible  abrir el archivo para escritura" );
		if ($_POST ['elegir'] == "annadir") {
			while ( ! feof ( $archivo ) ) {
				$c = fgetc ( $archivo );
				if ($_POST['nombre'] == $c) {
					echo "NOMBRE YA EXISTE";echo "hola";
				//	$existe = true;
				} else {
					fwrite ( $archivo, $_POST ['nombre'] . "\n" );
					echo "zzzzz";
				}
				echo $c;
			}
			// fwrite($archivo,$_POST['nombre']."\n");
		}
		
		fclose ( $archivo );
	}
}
?>	

</body>
</html>