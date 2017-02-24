
<?php 
echo "<ul>";

echo "<li> Comentarios de los tres tipos </li>";
echo "</br>";
// comentario de línea 
# otro forma de comentario de línea
/*
 * comentario
 */
echo "<li> Sentencias echo con los dos tipos de comillas</li>";
	$nombre = 'Geyse';
	echo "<p>Probamos comportamiento $nombre el comportamiento de las comillas </p>";
	echo '<p>Probamos comportamiento $nombre el comportamiento de las comillas </p>';

echo "<li> Uso de al menos tres operadores de comparación y dos operadores lógicos</li>";
	// operadores de comparación
	$a =4; $b = 2; $c = 2;
	$resultado = ($a<$b);
	echo "$resultado </br>";
	$resultado = ($a==$b);
	echo "$resultado </br>";
	$resultado = $a!=$b;
	echo "$resultado </br>";
	//operadores lógico
	$resultado = $c && $b;
	echo "$resultado </br>";
	$resultado = $c || $b;
	echo "$resultado </br>";
echo "<li> Uso de un operador de asignación</li>";
	$x = 4;
	$y = $x;
	echo 'El valor de $y es '. $y."</br>";

echo "<li> Declaración y uso de una variable por referencia</li>";
	$nombre = "Geyse";
	$apellido = "Canquerino";
	$nombre_apellido = $nombre . $apellido;
	echo 'Nombre completo es ' . $nombre_apellido ."</br>";		

echo "<li> Declaración y uso de dos constantes, una que obligue a respetar las mayúsculas en su uso y otra que no lo haga</li>";
	// con restricción
	define("ALUMNO", "Geyse");
	echo "Alumno es " .ALUMNO."</br>";
	echo "Alumno es " .Alumno."</br>";
	// sin restricción
	define("ALUMNO", "Geyse", true);
	echo "Alumno es " .Alumno."</br>";
echo "<li> Declaración y uso de un variable booleana y otra de tipo double</li>";
	$precio = 20.5;
	$es_valido = true;
	echo ' $precio es: ' . gettype($precio)."</br>";
	echo ' $es_valido es: ' . gettype($es_valido)."</br>";

echo "<li> Uso de is_numeric, is_boolean y is_double con estas variables</li>";
	echo ' ¿ $precio es double ?  ' . is_numeric($precio)."</br>";
	echo ' ¿ $precio es double ?  ' . is_string($precio)."</br>";
	echo ' ¿ $es_valido es: ?' . is_bool($es_valido)."</br>";
	
echo "<li> Declaración de una variable de tipo string. Pruebas con la función strlen y con tres de las funciones indicadas en el enlace.</li>";
	// strlen , trim , strtoupper 
	echo strlen($nombre)."</br>";
	echo trim($nombre,"e")."</br>";
	echo strtoupper($nombre)."</br>";
echo "<li> Declaración de un array escalar y uno asociativo</li>";
	//array escalar
	$nombres = array("Pepe","Juan","Maria","Ana","Cristina");
	print_r($nombres)."</br>";
	//array asociativo
	$nombres_edades = array("Pepe"=>23,"Juan"=>28,"Maria"=>20,"Ana"=>23,"Cristina"=>22);
	print_r($nombres_edades)."</br>";
echo "<li> Ordenación y volcado de información con var_dump siguiendo dos criterios de ordenación en cada uno de los arrays</li>";
	//ordenación
	sort($nombres)."</br>";
	asort($nombres_edades)."</br>";
	// volcado
	var_dump($nombres)."</br>";
	var_dump($nombres_edades)."</br>";

echo "<li> Una estructura de control de cada tipo (if-elsif-else, switch, while, do-while, for)</li>";
	//Estructura de control if-elsif-else;
	$edad = 15;
	if ($edad<18) {
		echo "Es menor de edad </br>";
	} elseif ($edad==18){
		echo "Ha cumplido la mayoria de edad </br>";
	} else{
		echo "Es mayor de edad </br>";
	}
	//Estructura de control switch;
	switch ($edad) {
		case 18:
			echo "Ha cumplido la mayoria de edad </br>";
		break;
		case ($edad<18):
			echo "Es menor de edad </br>";
			break;
		case ($edad>18):
			echo "Es mayor de edad </br>";
			break;
		default:
			echo "ERROR </br>";
		break;
	}
	//Estructura de control while;
	$cont =0;
	while ($cont<=5) {
		echo $cont . " ";
		$cont++;
	}
	echo "</br>";
	//Estructura de control do-while;
	$cont =0;
	do{
		echo $cont . " ";
		$cont++;
	}while ($cont<=5);
	echo "El contador vale " . $cont . " porque do-while da una vuelta más";
	echo "</br>";
	//Estructura de control for;	
	for ($i = 1; $i <= 5; $i++) {
		echo $i . " ";
	}
	
echo "<li> Un recorrido por cada uno de los dos arrays utilizando foreach, generando por ejemplo una lista ordenada con sus elementos</li>";
	echo "Nombres:";
	foreach ($nombres as $name) {
		echo $name. " </br>";
	}
	echo "Nombres + edades :";
	foreach ($nombres_edades as $nombre => $edad) {
		echo $nombre. " " . $edad . "</br>";
	}
echo "<li> Dos pruebas con la variable superglobal _SERVER</li>";
	//nombre del archivo ejecutandose
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	// contenido de la cabecera 'Server' de la petición HTTP
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";	
echo "<li> Dos pruebas de funciones: una devolverá algun tipo, la otra no</li>";
	function suma($a,$b){
		return ($a + $b);
	}
	echo "<p>Suma es: " . suma(2, 3) ." </p><br>";
	
	function suma2(){
		$a=9;
		$b=6;
		echo "<p>Suma es: " .($a + $b) ." </p><br>";
	}
	
	echo "<p>". suma2() ." </p><br>";

echo "<li> Una función que utilice una variable global</li>";
	function precio($coste){
		global $descuento;
		$total = $coste * ($descuento/100);
		return $total;
	}
	echo "<p>El precio rebajado es " . precio(20) ." </p> <br>";

echo "<li> Un formulario que reciba datos y los muestre por pantalla</li>";
	if (!isset($_POST['enviar'])) {
	?>
		<form name="U2A02" method="post" action="U2A02.php">
		Nombre: <input type="text" name="nombre" > 
		Edad: <input type="text" name="edad" > 
		<input type="submit" name="enviar"/>
		</form>
<?php 
	} else {	
		echo "<p> Has introducido nombre: ". $_POST["nombre"] ." </p>";
		echo "<p> Has introducido edad: ". $_POST["edad"] ." </p>";
	}
	echo "</ul>";
?>