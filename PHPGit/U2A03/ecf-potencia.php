<?php
/*Pedir dos números A y B y calcular la potencia A elevado a B utilizando iteraciones (no una
función matemática predefinida).S*/
?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="potencia" method="post" action="ecf-potencia.php">
	Primer numero: <input type="text" name="primero" > 
	Segundo numero: <input type="text" name="segundo" > 
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {
	$potencia = 1;
	for ($i = 1; $i <= $_POST["segundo"]; $i++) {
		$potencia *= ($_POST["primero"] );
	}
	echo "<p>La potencia de  ". $_POST["primero"] . " elevado a  ". $_POST["segundo"] . " es " . $potencia. "  </p>";
}

?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>