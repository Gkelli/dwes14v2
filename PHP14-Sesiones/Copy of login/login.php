<?php
session_start ();
$mensajeError = "";
?>
<?php

$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
echo "Hola 1";
$conexion->query ( "SET NAMES 'UTF8'" );
if ($conexion->connect_errno) {
	$mensajeError = "Error al establecer la conexión: " . $conexion->connect_errno . "-" . $conexion->connect_error;
}
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	if (empty ( $_POST ['usuario'] )) {
		$mensajeError = "Debes introducir un nombre";
	} else {
		$username = $_POST ['usuario'];
		$password = $_POST ['password'];
		
		$consulta = "SELECT * FROM usuario WHERE nombre =". $username;
		echo "Hola 2";
		$result = $conexion->query ( $consulta );
		// detectar error en la consulta
		$mensajeError = $conexion->error;
		if (empty ( $mensajeError ))
			header ( "Location: index.php" );
			
// 		if ($result->num_rows > 0) {
// 		}
		$row = $result->fetch_array ( MYSQLI_ASSOC );
		if (password_verify ( $password, $row ['password'] )) {
			echo "Hola 3";
			$_SESSION ['loggedin'] = true;
			$_SESSION ['usuario'] = $username;
			$_SESSION ['start'] = time ();
			$_SESSION ['expire'] = $_SESSION ['start'] + (5 * 60);
			
			echo "Bienvenido! " . $_SESSION ['username'];
			echo "<br><br><a href=index.php>Inicio</a>";
		} else {
			echo "Nombre de usuario o contraseña son incorrectos.";
			echo "<br><a href='index.html'>Volver a Intentarlo</a>";
		}
		mysqli_close ( $conexion );
	}
}


/*
 if(isset($_SESSION["usuario"])){
// echo "Debes introducir un nombre"; 
header("Location: intropage.php");
}
 
if($_SERVER ['REQUEST_METHOD'] == 'POST')){
 
if(!empty($_POST['usuario']) && !empty($_POST['password'])) {
 $username=$_POST['usuario'];
 $password=$_POST['password'];
 
$query =mysql_query("SELECT * FROM usuario WHERE nombre='".$username."' AND password='".$password."'");
 
$numrows=mysql_num_rows($query);
 if($numrows!=0)
 
{
 while($row=mysql_fetch_assoc($query))
 {
 $dbusername=$row['nombre'];
 $dbpassword=$row['password'];
 }
 
if($username == $dbusername && $password == $dbpassword)
 
{
 
 $_SESSION['usuario']=$username;
 
// Redirect browser 
 header("Location: index.php");
 }
 } else {
 
$message = "Nombre de usuario ó contraseña invalida!";
 }
 
} else {
 $mensajeError = "Todos los campos son requeridos!";
}
}

mysqli_close ( $conexion );
?>
 * */

?>
 



