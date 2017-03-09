<?php
//logout.php: cierra la sesión y redirige de forma automática a login.php
?>

<?php 
session_start();
$_SESSION['login'] = "0";
session_destroy();
header("Location: login.php");
?>