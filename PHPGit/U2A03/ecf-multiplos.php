<?php
/*Mostrar en pantalla los múltiplos de 3 y 5 entre el 1 y el 1000. A continuación mostrar en
pantalla los 20 primeros múltiplos de 3 y 5.*/
?>



<?php
	echo "<p>Los múltiplos de 3 y 5 entre el 1 y el 1000 son: </p><br>";
	for($i = 1; $i <=1000; $i++) {		
		if ($i%3==0 && $i%5==0) {
			echo $i. " ";
		}		
	}

if (!isset($_POST['enviar'])) {
?>
	<form name="multiplos" method="post" action="ecf-multiplos.php">
	Para seleccionar los 20 primeros múltiplos de 3 y 5: 	<input type="submit" name="enviar"/>
	</form>
<?php 

} else {	
	echo "<br>";
	echo "<p>Los 20 primeros múltiplos de 3 y 5: </p><br>";
	$cont=0;
		for ($i = 1; $i < 1000 && $cont <20; $i++) {
			if ($i%3==0 && $i%5==0) {
			echo $i. " ";
			$cont++;			
		}		
	}
}
?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>