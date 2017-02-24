<?php /*Pedir un número X y mostrar su tabla de multiplicar.*/?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="multiplicacion" method="post" action="ecf-multiplicacion.php">
	Introduzca un número : <input type="text" name="numero" >
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {	
	echo "<table border=\"1\">";
	echo "<p> La tabla de multiplicación de ". $_POST['numero'] . " es: </p>";
	for ($i = 0; $i <= 10; $i++) {
		echo "<tr>";
		echo "<td>" .$_POST['numero'] . " x " . $i . " = " . ($i * $_POST['numero']) . "</td>";
		echo "</tr>";
	}
	echo "</table></br>";
}
?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>