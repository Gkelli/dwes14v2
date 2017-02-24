<?php
/*Pedir un número X y calcular la suma de los X primeros números naturales (1 + 2 + 3 + ...).*/
?>
<?php
if (!isset($_POST['enviar'])) {
	

?>
	<form name="suma" method="post" action="ecf-suma.php">
	Introduzca un numero: <input type="text" name="numero" > 
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {
	echo "<p> Has introducido ". $_POST["numero"] ." </p>";
	$suma=0;
	for ($i = 1; $i <= $_POST["numero"]; $i++) {
		$suma+=$i;
	}
	echo "<p>La suma total de números hasta ". $_POST["numero"] . " es " . $suma. "  </p>";
}

?>
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>	