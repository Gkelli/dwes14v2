<?php
/*Pedir al usuario dos números A y B entre el 1 y el 10. Escribir en pantalla tantos asteriscos
como diferencia haya entre los números (resolviéndolo con while, mientras uno sea menor
que otro se escribe asterisco) y repetir con almohadillas (resolviéndolo con for utilizando la
diferencia entre a y b como número de repeticiones).*/

?>

<?php
if (!isset($_POST['enviar'])) {
	

?>
	<form name="diferencia" method="post" action="ecf-diferencia.php">
	Primer numero (1 a 10): <input type="text" name="primero" > 
	Segundo numero (1 a 10): <input type="text" name="segundo" > 
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {	
	$cont = 0;
	$aux = 0;
	if (($_POST["primero"] > $_POST["segundo"]))  {
		$aux = $_POST["primero"] - $_POST["segundo"];
	} else if (($_POST["primero"] < $_POST["segundo"])){
		$aux = $_POST["segundo"] - $_POST["primero"];
	}
	
	echo "<p> La diferencia es : " . $aux . " (utilizando while)</p>";
		while ($cont!=$aux ) {
			$cont++;
			echo "* <br/>";
		}	
		
	echo "<p> La diferencia es : " . $aux . " (utilizando for)</p>";
	
		for ($i = 0; $i < $aux; $i++) {
			echo "# <br/>";
		}	
}

?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>