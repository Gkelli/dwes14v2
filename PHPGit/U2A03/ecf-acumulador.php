<?php
/*Ir pidiendo por formulario una serie de números enteros (de uno en uno) e irlos sumando. Se
deja de pedir números al usuario cuando la cantidad supera el valor 50. Escribir entonces la
suma de todos los números introducidos. Pista: para poder mantener el valor acumulado
(antes de estudiar técnicas más avanzadas) utilizar un campo de formulario de tipo oculto
(“hidden”).*/
?>
<?php
if (isset($_POST['enviar'])) {
	$suma = $_POST['numero'] + $_POST['suma'];	
} else {
	$suma =0;
} 
if($suma>50){
	echo "<p>FIN. La suma total es " . $suma ."</p>";
} else{
	echo "<p>CONTADOR: " . $suma ."</p>";
?>
	<form name="acumulador" method="post" action="ecf-acumulador.php">
	Introduzca un número: <input type="text" name="numero" /> 	
	<input type="hidden" name="suma" value="<?php echo $suma?>" />
	<?php if($suma==0){?> <input type="submit" name="enviar" value="SUMAR"/> 
	<?php } else { ?><input type="submit" name="enviar" value="SUMAR OTRO NUMERO"/> <?php }?>
	</form>
	
<?php } ?>
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form>
