<?php
/*En un formulario se recogerá un valor en un cuadro de texto y un radio group para indicar si el
año actual es bisiesto o no. Habrá que comprobar si el valor leído corresponde al número de
un mes (de 1 a 12) o a su nombre (“enero”, “febrero”). Si es así se mostrará el número de días
que tiene ese mes, y si no es así se mostrará un error. Nota: para comparar String, busca
referencia de las funciones strcmp y strcasecmp.*/
?>
<?php
if (!isset($_POST['enviar'])) {
?>
	<form name="meses" method="post" action="ecf-meses.php">
	Introduzca una cadena de texto: <input type="text" name="mes" > 	
	¿El año es bisiesto ? 
	Sí <input type="radio" name="bisiesto" value="si"> No <input type="radio" name="bisiesto" value="no" checked>
	<input type="submit" name="enviar"/>
	</form>
<?php 
} else {
	
	switch ($_POST['mes']) {
		case 1: case (strcasecmp("enero",$_POST['mes'])==0): 
		case 3: case (strcasecmp("marzo",$_POST['mes'])==0):
		case 5: case (strcasecmp("mayo",$_POST['mes'])==0):
		case 7: case (strcasecmp("julio",$_POST['mes'])==0):
		case 8: case (strcasecmp("agosto",$_POST['mes'])==0):
		case 10: case (strcasecmp("octubre",$_POST['mes'])==0):
		case 12: case (strcasecmp("diciembre",$_POST['mes'])==0):
			echo " tiene 31 dias";
		break;
		case 4: case (strcasecmp("abril",$_POST['mes'])==0):
		case 6: case (strcasecmp("junio",$_POST['mes'])==0):
		case 9: case (strcasecmp("septiembre",$_POST['mes'])==0):
		case 11: case (strcasecmp("noviembre",$_POST['mes'])==0):
		echo " tiene 30 dias";
			break;
		case 2: case (strcasecmp("febrero",$_POST['mes'])==0):
			if (strcasecmp("si",$_POST['bisiesto'])==0) {
				echo " tiene 29 dias";
			} else if (strcasecmp("no",$_POST['bisiesto'])==0) {
				echo " tiene 28 dias";
			}
			break;
		default:
			echo "<p>ERROR. Valor inválido </p>";
		break;
	}
	
}
?>	
<form action="index.php"><input type="submit" name="volver" value="VOLVER"/></form> 
