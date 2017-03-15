<!DOCTYPE html>
<html lang="es">
<head>
<title>Proyecto final - Geyse Canquerino</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link REL="stylesheet" TYPE="text/css" HREF="styles/inicio.css"> -->
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron , .panel-heading{
      margin-bottom: 0;
      background-color: white;
	 font-weight: bold;
	 font-family: 'Quattrocento', serif;
    }
/* Remove the navbar's default rounded borders and increase the bottom margin */
.navbar {
	background-color: lightyellow;
	margin-bottom: 50px;
	border-radius: 0;	
}
/* Add a gray background color and some padding to the footer */
footer {
	background-color: lightyellow;
	padding: 25px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"	data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Geyse Canquerino</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="catalogo/MostrarCatalogo.php">Catalogo</a></li>
					<li><a href="#">Series</a></li>
					<li><a href="#">Autores</a></li>
					<li><a href="#">Usuarios</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login/login.php"><span class="glyphicon glyphicon-user"></span>Tu cuenta</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group input-group">
						<input type="text" class="form-control" placeholder="Buscar Serie">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
  		<div class="container text-center">
    	<h1>Proyecto Final de Desarrolo Entorno Servidor</h1>      
    	<p>Elaborado con PHP, Bootstrap, CSS</p>
    	<p>Incluye sesiones, autenticación y conexión a base de datos</p>
  	</div>
	</div>
	<br/><br/>
<?php
	include "catalogo/Serie.php";
	$servidor = "localhost";
	$usuario = "alumno";
	$clave = "alumno";
?>
<?php

	$conexion = new mysqli ( $servidor, $usuario, $clave, "catalogo" );
	$conexion->query ( "SET NAMES 'UTF8'" );
	if ($conexion->connect_errno) {
		echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
	}
	$resultado = $conexion->query ( "SELECT *,nombre AS autor FROM obra,autor WHERE autor.id_autor=obra.id_autor" );
	$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
	if (empty ( $autor ))
		die ( "<h4>ERROR en la petición.</h4>" );
	echo "<div class='container'>";
		echo "<div class='row'>";
		while ( $autor != null ) {
			echo "<div class='col-sm-4'>";
			echo "<div class='panel panel-default'>";
				echo "<div class='panel-heading'>" . $autor ['titulo'] . "</div>";
				echo "<div class='panel-body'><img src='img/$autor[portada]' class='img-responsive' style='width:100%' alt='Image'></div>";
				echo "<div class='panel-footer'>" . $autor ['nombre'] . "</div>";
			echo "</div>";
		echo "</div>";	
	$autor = $resultado->fetch_array ( MYSQLI_ASSOC );
	}
	echo "</div>";
	echo "</div>";
	mysqli_close ( $conexion );
?>
	<footer class="container-fluid text-center">
		<p>2º DAW - Desarrollo web en entorno servidor - Geyse Kelli Canquerino Rege</p>
	</footer>
</body>
</html>