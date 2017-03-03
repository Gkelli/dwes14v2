<?php
session_name("idSesionU5A02-14-");
session_start ();

if (session_status () == PHP_SESSION_NONE)
	$mensaje = "No hay sesión iniciada";

else {
	//$nombre_sesion = session_name("idSesionU5A02-14-contador");
	if (isset ( $_SESSION ['contador'] ))
		$_SESSION ['contador'] += 1;
		//session_name(idSesionU5A02-14-contador);		
	else
		$_SESSION ['contador'] = 1;
	
	$mensaje = "Has visitado esta página " . $_SESSION ['contador'] . " veces en esta sesión"  ;
}
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8" />
</head>
<body>
	<h3><?php echo $mensaje;?></h3>
	<p>
		<a href="<?php echo $_SERVER['PHP_SELF']?>">Recargar la página</a>
	</p>
</body>
</html>