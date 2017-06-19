<!DOCTYPE html>
<html lang="es">
<head>
<title>FP conecta</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link REL="stylesheet" TYPE="text/css" HREF="<?php echo base_url();?>assets/css/inicio.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
<link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" id="nav-def">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img alt="" src="<?php echo base_url();?>assets/img/logoFP.png"
					width="100px" height="100px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" id ="nav-nav" >
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Catalogo de Centros</a></li>
					<li><a href="#">Familias Profesionales</a></li>
					<li><a href="#">Ciclos Formativos</a></li>
					<li><a href="#">Usuarios</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="nav-cuenta">
					<li><a href="login/login.php"><span
							class="glyphicon glyphicon-user"></span>   Tu cuenta</a></li>
					<!-- <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito</a></li> -->
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group input-group">
						<input type="text" class="form-control" id="form-cont" placeholder="Buscar Centro">
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
			<h1>FP Conecta</h1>
			<p>Información sobre los ciclos formativos, centros y más</p>
		</div>
	</div>
