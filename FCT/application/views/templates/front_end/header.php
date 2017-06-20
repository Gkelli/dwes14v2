<!DOCTYPE html>
<html lang="es">
<head>
<title>FP conecta</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link REL="stylesheet" TYPE="text/css" HREF="<?php echo base_url();?>assets/css/inicio.css">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
<link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
					<li class="active"><a href="<?php echo base_url();?>posts/catalogo">Posts</a></li>
					<li><a href="<?php echo base_url();?>centros/catalogo">Catalogo de Centros</a></li>
					<li><a href="<?php echo base_url();?>familias_profesionales/catalogo">Familias Profesionales</a></li>
					<li><a href="<?php echo base_url();?>modulos/catalogo">Ciclos Formativos</a></li>
					<li><a href="<?php echo base_url();?>usuarios/catalogo">Usuarios</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right" id="nav-cuenta">
					<li><a href="<?php echo base_url();?>usuarios/login"><span
							class="glyphicon glyphicon-user"></span>Tu cuenta</a></li>
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

