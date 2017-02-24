<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/modulos.txt";
// Pruebas
	echo readfile("files/modulos.txt");
	
// echo "<h5>Lee ahora las líneas del archivo a un array:</h5>>";
// 	$lineasArchivo = file($rutaArchivo);
// 	print_r($lineasArchivo);

// echo "<h5>Muestra todo el archivo sin separación de líneas:</h5>";
// 	$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
// 	echo fread($archivo,filesize($rutaArchivo));
// 	fclose($archivo);
	
// echo "<h5>Muestra todas las líneas del archivo</h5>";
// 	$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
// 	while(!feof($archivo)) {
// 		echo fgets($archivo) . "<br/>";
// 	}
// 	fclose($archivo);
	
// echo "<h5>Lee ahora carácter a carácter, detectando fin de línea</h5>";
// 	$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
// 	while(!feof($archivo)) {
// 		$c = fgetc($archivo);
// 		if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
// 		else echo $c;
// 	}
// 	fclose($archivo);

// creo función para mostrar todas la lineas del archivo

function mostrar_archivo(){
	$rutaArchivo = "files/modulos.txt";
	$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
	while(!feof($archivo)) {
		echo fgets($archivo) . "<br/>";
	}
	fclose($archivo);
}
/*
//Abre el archivo para escritura, y escribe el nombre de dos módulos de primero
$rutaArchivo = "files/modulos.txt";
echo readfile("files/modulos.txt");
	$archivo = fopen($rutaArchivo, "w") or die("Imposible  abrir el archivo para escritura");
	fwrite($archivo,"Programación\n");
	fwrite($archivo,"Entornos de desarrollo\n");
	fclose($archivo);

echo "<h5>Ahora muestra el contenido del archivo utilizando la función que has creado. Recuerda que es imprescindible abrir de nuevo el fichero para lectura: el puntero ha quedado al final del archivo y ya no habría nada que leer.
 Comprueba el resultado. ¿Se mantiene el texto original?</h5>";
mostrar_archivo();

echo "<h5>Recupera el contenido original del archivo *modulos.txt*, 
 		y repite la ejecución del código anterior sustituyendo 'w' 
 		por 'r+' (lectura y escritura con el puntero al inicio) en el parámetro de `fopen`. 
 		¿Entiendes bien lo que ha ocurrido?</h5>";
	$rutaArchivo = "files/modulos.txt";
	echo readfile("files/modulos.txt");
	$archivo = fopen($rutaArchivo, "r+") or die("Imposible  abrir el archivo para escritura");
	fwrite($archivo,"Programación\n");
	fwrite($archivo,"Entornos de desarrollo\n");
	fclose($archivo);
	

echo "<h5>Recupera el contenido original del archivo *modulos.txt*, 
			y repite la ejecución del código anterior sustituyendo 'w' por 'a' (append)
			. Comprueba que ahora sale bien</h5>";
	$rutaArchivo = "files/modulos.txt";
	echo readfile("files/modulos.txt");
	$archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");
	fwrite($archivo,"Programación\n");
	fwrite($archivo,"Entornos de desarrollo\n");
	fclose($archivo);
*/

echo "<h5>Programa un ejemplo en el que se escriban datos en un archivo *nuevo.txt* que previamente no existía.</h5>";
$archivo = fopen ( "files/nuevo.txt", "a" ) or die ( "Imposible abrir el archivo" );
?>
<form name="texto" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8"); ?> ">
Introduzca un número <input type="text" name="texto" ><br/>
</form>
<?php 
$texto =  $_POST['texto'];
fwrite($archivo,$texto."\n");
fclose ( $archivo );

?>
</body></html>