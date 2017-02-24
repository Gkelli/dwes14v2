<?php
/*Pedir una cadena de texto y mostrarla varias veces: en cada línea se mostrará un carácter
menos que en la anterior. Sólo se puede usar una función de strings: “strlen()”
Mi casa
Mi cas
Mi ca
Mi c
Mi
Mi
M
*/
?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="recorte" method="post" action="ecf-recorte.php">
	Introduzca una cadena de texto: <input type="text" name="cadena" > 	
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {
	
	for ($i = strlen($_POST['cadena']); $i >=0; $i--) {			
		
		for ($j = 0; $j < $i; $j++) {
			echo $_POST["cadena"][$j];
			
		}	
		echo "<br/>";
	}
	
	
}
?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>	