<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
$url = $_SERVER ['SERVER_NAME'] . $_SERVER ['REQUEST_URI'];

if (! strpos ( $url, 'register/register_success' )) {
	if ((! isset ( $_SESSION ['logged_in'] ) && $_SESSION ['logged_in'] != true)) {
		redirect ( '/' );
	}
}
?>
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
<?php 
//función para obtener la utl y así dar visibilidad a botones
function getCurrentURL()
{
	$currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$currentURL .= $_SERVER["SERVER_NAME"];

	if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
	{
		$currentURL .= ":".$_SERVER["SERVER_PORT"];
	}

	$currentURL .= $_SERVER["REQUEST_URI"];
	return $currentURL;
}
?>
	<nav class="navbar navbar-default" id="nav-def">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="<?php echo base_url();?>"><img id="img_logo" alt="" src="<?php echo base_url();?>assets/img/logoFP.png"
					width="100px" height="100px"></a>
			</div>
			<div class="navbar-collapse collapse" id="myNavbar">
				<ul class="nav navbar-nav" id ="nav-nav" >
					<li class="active"><a href="<?php echo base_url();?>posts/catalogo">Posts</a></li>
					<li><a href="<?php echo base_url();?>centros/catalogo">Catalogo de Centros</a></li>
					<li><a href="<?php echo base_url();?>familias_profesionales/catalogo">Familias Profesionales</a></li>
					<li><a href="<?php echo base_url();?>modulos/catalogo">Ciclos Formativos</a></li>
					<li><a href="<?php echo base_url();?>usuarios/catalogo">Usuarios</a></li>					
				</ul>
				<ul class="nav navbar-nav pull-right" id="nav-cuenta">					
						<?php
						$url = $_SERVER ['SERVER_NAME'] . $_SERVER ['REQUEST_URI'];
						
						if (strpos ( $url, 'usuarios/' ) ) {
							?>
							<li><a href="<?php echo base_url();?>usuarios/logout"><span class=" glyphicon glyphicon-log-out">&#32;&#32;&#32;</span>Logout</a></li>
							
							<?php
						} else {
							?>
							<li class=" dropdown"><a href="#" class="dropdown-toggle active"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><span class="glyphicon glyphicon-user">&#32;&#32;</span>Tu
							cuenta </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>usuarios/info_user"><span></span>Perfil</a></li>
							<li><a href="<?php echo base_url();?>usuarios/logout"><span></span>Logout</a></li>

						</ul></li>
							<?php
						}
						?>
							
					</ul>
				<div class="navbar-form navbar-right">
					<?= form_open('searchs/search_centro')?>
					<div class="form-group input-group">
						<div class="input-group">
							<input name="busqueda" placeholder="Búsqueda de centro" class="form-control" type="text">
											</div><span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
					</form>
				</div>
			</div>
		</div>
	</nav>
<?php if (validation_errors()) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
		<?= validation_errors()?>
		</div>
	</div>
<?php endif; ?>
<?php if (isset($error)) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= $error?>
		</div>
	</div>
<?php endif; ?>