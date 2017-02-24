<?php
/*Pedir un número X y calcular su factorial utilizando iteraciones.*/

?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="factorial" method="post" action="ecf-factorial.php">
	Introduzca un número: <input type="text" name="numero" > 	
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {
	$factorial = 1;
	for ($i = $_POST["numero"]; $i >= 1; $i--){
		$factorial *= $i;
	}	
	echo "<p>El factorial de  " . $_POST["numero"] . " es " . $factorial . "  </p>";
}
?>
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>	