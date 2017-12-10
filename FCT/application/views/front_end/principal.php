<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Geyse Canquerino">
<meta name="google-signin-client_id" content="AIzaSyDlB5pDDEkRkVVA3bplCX_Y0Fwr-23qRUA.apps.googleusercontent.com">
<title><?php echo $titulo;?></title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->

<link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"	rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script'	rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- Theme CSS -->
<link href="<?php echo base_url();?>assets/css/portada.css" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body id="page-top" class="index">

	<!-- Navigation -->
	<nav id="mainNav"
		class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Barra de navegación</span> Menu <i class="fa fa-bars"></i>
				
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">
					<img class="img-responsive"	src="<?php echo base_url();?>assets/img/logoFP.png" width="130"	height="130" alt="">
				</a>
			</div>

			<!-- Barra del menu -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="#info">Sobre la página</a></li>
					<li><a class="page-scroll" href="#centros">Centros</a></li>
					<li><a class="page-scroll" href="#posts">Posts</a></li>
					<li><a class="page-scroll" href="#familiasprofesionales">Familias Profesionales</a></li>
					<li><a class="page-scroll" href="#registro">Regístrese</a></li>
					<li><a href="#loginModal" class="centros-link"
						data-toggle="modal"><span class="glyphicon glyphicon-user"></span>Tu cuenta</a></li>			
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">Bienvenid@s a FP Conecta</div>
				<div class="intro-lead-in">Toda la información que necesitas sobre la Formación Profesional</div>
				<a href="#info" class="page-scroll btn btn-xl">Descubre más</a>
			</div>
		</div>
	</header>

	<!-- Secciones -->
	<section id="info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Información sobre la página</h2>
					<h3 class="section-subheading text-muted">Todo lo que tienes que saber sobre FP Conecta</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary" ></i> <i
						class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="info-heading">Valora los centros</h4>
					<p class="text-muted">Puedes encontrar los centros más valorados en la comunidad de Madrid, también elegir cuál es el 
					más apropiado para ti según la valoración de otros alumnos.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary"></i> <i
						class="fa fa-book fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="info-heading">Busca tu FP</h4>
					<p class="text-muted">Toda la información sobre las diversas familias profesionales de Formación Profesional, elige tu camino
					y tu futuro, toda la información que necesitas!!</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> 
					<i class="fa fa-circle fa-stack-2x text-primary"></i> 
					<i class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="info-heading">Conoce alumnos</h4>
					<p class="text-muted">Comparte información y conocimientos con otros alumnos de Formación Profesional de los diversos centros
					que hay en la comunidad de Madrid</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Sección centros -->
	<section id="centros" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Centros</h2>
					<h3 class="section-subheading text-muted">Los centros más
						recomendados o con más cantidad de alumnos</h3>
				</div>
			</div>
			<div class="row">			
			<?php
			for($i = 0; $i < 6; $i ++) {
				
				?>
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#loginModal" class="centros-link" data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> 					
						 <?php 
						 if($fct_centros[$i]->imagen == null){
						 ?>										
						<img src="<?php echo base_url();?>assets/img/university-icon.png" class="img-responsive" alt="">
						<?php } else {?>
						<img src="<?php echo base_url();?>assets/img/centros/<?php echo $fct_centros[$i]->imagen ?>"  class="img-responsive" alt="">
						<?php }  ?>
					</a>
					<div class="centros-caption">
						<h4><?php echo $fct_centros[$i]->nombre_centro ?></h4>
						<p class="text-muted"><?php echo $fct_centros[$i]->direccion;?></p>
					</div>
				</div>
				
				<?php
				$fct_centros[$i]->imagen;
			}
			?>			
			</div>
		</div>
	</section>

	<!-- Secciones de ultimos posts -->
	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Últimos posts</h2>
					<h3 class="section-subheading text-muted">Comprueba las últimas publicaciones en FP Conecta</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="timeline">
					
					<?php
					for($i = 0; $i < 4; $i ++) {
						if ($i % 2 == 0) {
							?>

						<li>
							<div class="timeline-image">
							 <?php
							if ($fct_posts [$i]->imagen == null) {
								?>
								<img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/post-image.png" alt="">
								<?php } else {?>
								<img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/posts/<?php echo $fct_posts[$i]->imagen ?>" alt="">
								<?php }  ?>
							
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4><?php echo $fct_posts[$i]->fecha_post ?></h4>
									<h4 class="subheading"><?php echo $fct_posts[$i]->titulo_post ?></h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted"><?php echo $fct_posts[$i]->cuerpo_post ?></p>
								</div>
							</div>
						</li>
						<?php
						} else {
							?>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<?php
							if ($fct_posts [$i]->imagen == null) {
								?>
								<img class="img-circle img-responsive"
									src="<?php echo base_url();?>assets/img/post-image.png" alt="">
								<?php } else {?>
								<img
									src="<?php echo base_url();?>assets/img/posts/<?php echo $fct_posts[$i]->imagen ?>"
									class="timeline-image" alt="">
								<?php }  ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4><?php echo $fct_posts[$i]->fecha_post ?></h4>
									<h4 class="subheading"><?php echo $fct_posts[$i]->titulo_post ?></h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted"><?php echo $fct_posts[$i]->cuerpo_post ?></p>
								</div>
							</div>
						</li>

						<?php
						}
					}
					?>						
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>
									<a class="page-scroll" href="#registro" style="color:black;"> Encuentra más posts!</a>
								</h4>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Seccion familias profesionales -->
	<section id="familiasprofesionales" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Familias profesionales</h2>
					<h3 class="section-subheading text-muted"> Las familias profesionales más demandadas de la Formación profesional son:</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="familiasprofesionales-type">
						<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary" ></i> <i
						class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
					</span>
						<h4>Sanidad</h4>
						<p class="text-muted">Una de las carreras más importantes y demandadas</p>
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
							<li><a href="#"><i class="fa fa-users"></i></a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="familiasprofesionales-type">
						<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary" ></i> <i
						class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
					</span>
						<h4>Educación</h4>
						<p class="text-muted">La base de la enseñanza</p>
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
							<li><a href="#"><i class="fa fa-users"></i></a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="familiasprofesionales-type">
						<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary" ></i> <i
						class="fa fa-usb fa-stack-1x fa-inverse"></i>
					</span>
						<h4>Informática y Comunicaciones </h4>
						<p class="text-muted">Cada vez más demandada por el sector laboral</p>
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
							<li><a href="#"><i class="fa fa-users"></i></a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<p class="large text-muted">La  Formación Profesional actual está formada por diferentes Familias Profesionales que constan de varios Ciclos Formativos. Estos Ciclos Formativos tienen dos niveles: de Grado Medio y de Grado Superior. </p>
				</div>
			</div>
		</div>
	</section>

	<!-- Sección modulos -->
	<aside class="gif">
		<div class="container">
			<div class="row"><div class="col-xl-12 text-center">
				<!-- <img src="http://static.tumblr.com/6f435667d54bcd899bb7fab5ba4fe99c/dseyjhb/nV4mvkc1r/tumblr_static_kirby.gif" alt=""/> -->
				<hr>
			</div></div>
		</div>
	</aside>

	<!-- Sección registro -->
	<section id="registro">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Únete a nosotros</h2>
					<h3 class="section-subheading text-muted">Crea tu cuenta y forma parte de FP Conecta</h3>
				</div>
			</div>
			<div class="row">
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
				<div class="col-lg-12">
					<?= form_open('user/register') ?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Tu Username"
									id="username" name="username" required
									data-validation-required-message="Tienes que introducir un username">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Tu email"
									id="email" name="email" required
									data-validation-required-message="Tienes que introducir un email">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="password" class="form-control"
									placeholder="Tu contraseña" id="password" name="password" required
									data-validation-required-message="Tienes que introducir una contraseña">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Tu nombre"
									id="nombre_usuario" name="nombre_usuario" required
									data-validation-required-message="Tienes que introducir tu nombre">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Apellidos"
									id="apellidos" name="apellidos" >
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Tu móvil"
									id="movil" name="movil">
								<p class="help-block text-danger"></p>
							</div>

						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl">Registrarse</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; FP Conecta - Geyse Canquerino</span>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="#">Info proyecto</a></li>
						<li><a href="#">Términos de uso</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Centroos modal -->
	<div class="centros-modal modal fade" id="centrosModal1"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
							<h1>Para poder acceder a esta información debes registrarte antes.</h1>								
								<button type="button" class="btn btn-primary"
									data-dismiss="modal">
									<i class="fa fa-times"></i> Close Project
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Login -->
	<div class="modal fade" id="loginModal" role="dialog">

		<div class="card card-container">

			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<img id="profile-img" class="profile-img-card"
				src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
			<p id="profile-name" class="profile-name-card"></p>
					<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<?= form_open('user/login') ?>
			<div class="form-group">
			
					<input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
				</div>
			<div id="remember" class="checkbox">
				<label> <input type="checkbox" value="remember-me"> Recordarme
				</label>
			</div>
			<input class="btn btn-xl btn-block btn-signin" type="submit"
				value="Iniciar
					Sesión" />

			<!-- /form -->
			<br /> 
			<a href="#" class="forgot-password" > ¿Te has olvidado la contraseña?
			</a> <br /> <br />
			<p style="clear: right">También puedes acceder con tu cuenta de Gmail</p>
			<div class="g-signin2" style="float: right; margin: 10px;"
				data-onsuccess="onSignIn"></div>
			<br /> <br />
			</form>
			<!-- /container -->
		</div>

	</div>
	<!-- 
	<div class="login-modal modal fade" id="loginModal"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
		<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="loginForm" method="post" action="<?php echo base_url();?>usuarios/login">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="username" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Iniciar Sesión </button>
            </form><!-- /form 
            <a href="#" class="forgot-password">
                ¿Te has olvidado la contraseña?
            </a>
            <br/><br/>
            <p style= "clear:right">También puedes acceder con tu cuenta de Gmail </p>
            <div class="g-signin2" style= "float:right" data-onsuccess="onSignIn"></div>
        </div>
    </div><!-- /container 
		</div>
		</div>
	</div>
	-->
	<!-- End Modal Login -->
	
	<!-- interación con google -->
	<script type="text/javascript">
	function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); 
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail()); 
		}


	</script>
	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"
		integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
		crossorigin="anonymous"></script>

	<!-- Contact Form JavaScript -->
	<script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
	<script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

	<!-- Theme JavaScript -->
	<script src="<?php echo base_url();?>assets/js/portada.min.js"></script>
	<!--<script type="text/javascript">$(document).ready(function(){
        $("#loginModal").modal('show');
    });</script>-->

</body>

</html>
