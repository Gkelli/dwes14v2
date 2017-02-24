<?php
/*Pedir un número X y generar un cuadrado como el que se muestra en la figura (en este caso X
vale 10). Una vez resuelto, mejorarlo para que las filas pares salgan en un color más claro
(lightblue por ejemplo) para facilitar la lectura. En la figura se ha usado un “padding” de 3 para
los elementos de celda (td).*/
?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="cuadrado" method="post" action="ecf-cuadrado.php">
	Introduzca un número x: <input type="text" name="numero" >
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {	
	?>
	<table border="1">
	<?php
	$cont = 1;	
	//filas
	for($i=1;$i<=$_POST['numero'];$i++){
		echo "<tr>";		
		// columnas
		for($j=1;$j<=$_POST['numero'];$j++){
			$resultado=$j*$cont;
			if($cont%2==0){				
				echo "<td style='padding:3px; text-align:center; background-color:lightblue;'>".$resultado."</td>";
			} else {
				echo "<td style='padding:3px; text-align:center;'>".$resultado."</td>";
			}
		}
		echo "</tr>";
		$cont++;
	}	
	?>
	 </table>
<?php } ?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>
