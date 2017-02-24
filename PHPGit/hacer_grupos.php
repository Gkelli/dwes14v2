<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Hacer grupos 2º DAW</title>
</head>
<body>
<?php include 'header.php'?>
<h4>Hacer grupos 2º DAW</h4>
	<?php 
	$alumnos;
	$alumnos[0]= "Geyse Kelli Canquerino Rege";
	$alumnos[1]= "Guzmán de Arozarena Barbero";
	$alumnos[2]= "Pablo Gil Prieto";
	$alumnos[3]= "Cesar Augusto Martinez Alvaro";
	$alumnos[4]= "Rodrigo Morera García";
	$alumnos[5]= "Cristian Martin";
	$alumnos[6]= "David Morán Delgado";
	$alumnos[7]= "Hugo Asorey Pedrero";
	$alumnos[8]= "Fernando Carrasco Lopez";
	$alumnos[9]= "Daniel Soriano Salgado";
	$alumnos[10]= "Iván Rodrigo Hidalgo García";
	$alumnos[12]= "Iván Gallego Rivas";
	$alumnos[13]= "America Jhasmine Almanza";
	$alumnos[14]= "Jesus David Martin Ramirez";
	$alumnos[15]= "Sergio Girón Oller";
	$alumnos[16]= "Jesús María Viera";
	$alumnos[17]= "Daniel Vicho Rojas";
	$alumnos[18]= "Javier Lopez Hidalgo";
	$alumnos[19]= "Alvaro Villanova";
	//$alunmos[20]= "Jose Luis Oliva López";
	
	if (count($alumnos)%2==0) {
		$n_grupos = count($alumnos)/2;
	} else {
		$n_grupos = (count($alumnos)/2)+1;
	}
	
	for ($i = 1; $i <= $n_grupos ; $i++) {		
		echo "<h4>GRUPO " . $i . " </h4>";		
			$alumno_elegido = array_rand($alumnos);
			print($alumnos[$alumno_elegido]);
			unset($alumnos[$alumno_elegido]);
			$alumnos= array_values($alumnos);
			echo "<br/>";
			if(count($alumnos)!=0){
			$alumno_elegido = array_rand($alumnos);
			print($alumnos[$alumno_elegido]);
			unset($alumnos[$alumno_elegido]);
			$alumnos= array_values($alumnos);
			}		
	}	
	?>
</body>
</html>