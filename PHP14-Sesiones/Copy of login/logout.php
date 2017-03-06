<?php
//logout.php: cierra la sesión y redirige de forma automática a login.php
?>

<?php 
session_start();
unset ($SESSION['usuario']);
session_destroy();
	 
header('Location: index.html');
?>