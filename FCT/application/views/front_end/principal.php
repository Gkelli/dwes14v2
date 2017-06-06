<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Geyse Canquerino">

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
					<li><a class="page-scroll" href="<?php echo base_url();?>index">Regístrese</a></li>
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
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary"></i> <i
						class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
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
					<h3 class="section-subheading text-muted">Los centros más recomendados o con más cantidad de alumnos</h3>
				</div>
			</div>
			<div class="row">
			
			
			
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal1" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>IES VIRGEN DE LA PALOMA</h4>
						<p class="text-muted">Calle De Francos Rodríguez, 106 	Madrid</p>
					</div>
				</div>
				
				
				
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal2" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>IES CLARA DEL REY</h4>
						<p class="text-muted">Calle Del Padre Claret, 8 	Madrid</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal3" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>IES LEONARDO DA VINCI</h4>
						<p class="text-muted"> 	Calle Del General Romero Basart, 90 </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal4" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>CPR INF-PRI-SEC SAGRADO CORAZON</h4>
						<p class="text-muted">Calle De San Jaime, 21 	Madrid</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal5" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>IES ISLAS FILIPINAS</h4>
						<p class="text-muted">Calle De Jesús Maestro, 3 	Madrid</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 centros-item">
					<a href="#centrosModal6" class="centros-link"
						data-toggle="modal">
						<div class="centros-hover">
							<div class="centros-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img
						src="<?php echo base_url();?>assets/img/university-icon.png"
						class="img-responsive" alt="">
					</a>
					<div class="centros-caption">
						<h4>CPR FPE CESUR-MADRID</h4>
						<p class="text-muted">Calle De Luis Cabrera, 63 	Madrid</p>
					</div>
				</div>
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
						<li>
							<div class="timeline-image">
								<img class="img-circle img-responsive"
									src="<?php echo base_url();?>assets/img/post-image.png" alt="">
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>martes, 6 de junio de 2017 (CEST) 1</h4>
									<h4 class="subheading">Our Humble Beginnings</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Sunt ut voluptatum eius sapiente, totam
										reiciendis temporibus qui quibusdam, recusandae sit vero unde,
										sed, incidunt et ea quo dolore laudantium consectetur!</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<img class="img-circle img-responsive"
									src="<?php echo base_url();?>assets/img/post-image.png" alt="">
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>viernes, 2 de junio de 2017 (CEST) </h4>
									<h4 class="subheading">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Sunt ut voluptatum eius sapiente, totam
										reiciendis temporibus qui quibusdam, recusandae sit vero unde,
										sed, incidunt et ea quo dolore laudantium consectetur!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-image">
								<img class="img-circle img-responsive"
									src="<?php echo base_url();?>assets/img/post-image.png" alt="">
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>martes, 6 de junio de 2017 (CEST) </h4>
									<h4 class="subheading">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Sunt ut voluptatum eius sapiente, totam
										reiciendis temporibus qui quibusdam, recusandae sit vero unde,
										sed, incidunt et ea quo dolore laudantium consectetur!</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<img class="img-circle img-responsive"
									src="<?php echo base_url();?>assets/img/post-image.png" alt="">
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>lunes, 29 de mayo de 2017 (CEST) </h4>
									<h4 class="subheading">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Sunt ut voluptatum eius sapiente, totam
										reiciendis temporibus qui quibusdam, recusandae sit vero unde,
										sed, incidunt et ea quo dolore laudantium consectetur!</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>
									Encuentra más posts!
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
				<img src="http://static.tumblr.com/6f435667d54bcd899bb7fab5ba4fe99c/dseyjhb/nV4mvkc1r/tumblr_static_kirby.gif" alt=""/>
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
				<div class="col-lg-12">
					<form name="sentMessage" id="registroForm" method="post" action="<?php echo base_url();?>usuarios/login">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="tel" class="form-control"
										placeholder="Tu login" id="login" required
										data-validation-required-message="Tienes que introducir un login">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="email" class="form-control"
										placeholder="Tu email" id="email" required
										data-validation-required-message="Tienes que introducir un email">
									<p class="help-block text-danger"></p>
								</div>								
								<div class="form-group">
									<input type="text" class="form-control"
										placeholder="Tu nombre" id="name" required
										data-validation-required-message="Tienes que introducir tu nombre">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">	
							
								<div class="form-group">
									<input type="text" class="form-control"
										placeholder="Apellidos" id="apellidos">
									<p class="help-block text-danger"></p>
								</div>						
								<div class="form-group">
									<input type="tel" class="form-control"
										placeholder="Tu telefono" id="phone">
									<p class="help-block text-danger"></p>
								</div>														
								<div class="form-group">
									<input type="file" class="form-control" id="avatar" >
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

	<!-- Portfolio Modals -->
	<!-- Use the modals below to showcase details about your portfolio projects! -->

	<!-- Portfolio Modal 1 -->
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
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/roundicons-free.png"
									alt="">
								<p>Use this area to describe your project. Lorem ipsum dolor sit
									amet, consectetur adipisicing elit. Est blanditiis dolorem
									culpa incidunt minus dignissimos deserunt repellat aperiam
									quasi sunt officia expedita beatae cupiditate, maiores
									repudiandae, nostrum, reiciendis facere nemo!</p>
								<p>
									<strong>Want these icons in this portfolio item sample?</strong>You
									can download 60 of them for free, courtesy of <a
										href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>,
									or you can purchase the 1500 icon set <a
										href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.
								</p>
								<ul class="list-inline">
									<li>Date: July 2014</li>
									<li>Client: Round Icons</li>
									<li>Category: Graphic Design</li>
								</ul>
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

	<!-- Portfolio Modal 2 -->
	<div class="centros-modal modal fade" id="centrosModal2"
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
								<h2>Project Heading</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/startup-framework-preview.png"
									alt="">
								<p>
									<a href="http://designmodo.com/startup/?u=787">Startup
										Framework</a> is a website builder for professionals. Startup
									Framework contains components and complex blocks (PSD+HTML
									Bootstrap themes and templates) which can easily be integrated
									into almost any design. All of these components are made in the
									same style, and can easily be integrated into projects,
									allowing you to create hundreds of solutions for your future
									projects.
								</p>
								<p>
									You can preview Startup Framework <a
										href="http://designmodo.com/startup/?u=787">here</a>.
								</p>
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

	<!-- Portfolio Modal 3 -->
	<div class="centros-modal modal fade" id="centrosModal3"
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
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/treehouse-preview.png"
									alt="">
								<p>
									Treehouse is a free PSD web template built by <a
										href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
									This is bright and spacious design perfect for people or
									startup companies looking to showcase their apps or other
									projects.
								</p>
								<p>
									You can download the PSD template in this portfolio sample item
									at <a
										href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.
								</p>
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

	<!-- Portfolio Modal 4 -->
	<div class="centros-modal modal fade" id="centrosModal4"
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
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/golden-preview.png"
									alt="">
								<p>
									Start Bootstrap's Agency theme is based on Golden, a free PSD
									website template built by <a
										href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
									Golden is a modern and clean one page web template that was
									made exclusively for Best PSD Freebies. This template has a
									great portfolio, timeline, and meet your team sections that can
									be easily modified to fit your needs.
								</p>
								<p>
									You can download the PSD template in this portfolio sample item
									at <a
										href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.
								</p>
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

	<!-- Portfolio Modal 5 -->
	<div class="centros-modal modal fade" id="centrosModal5"
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
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/escape-preview.png"
									alt="">
								<p>
									Escape is a free PSD web template built by <a
										href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
									Escape is a one page web template that was designed with
									agencies in mind. This template is ideal for those looking for
									a simple one page solution to describe your business and offer
									your services.
								</p>
								<p>
									You can download the PSD template in this portfolio sample item
									at <a
										href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.
								</p>
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

	<!-- Portfolio Modal 6 -->
	<div class="centros-modal modal fade" id="centrosModal6"
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
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>
								<img class="img-responsive img-centered"
									src="<?php echo base_url();?>assets/img/portfolio/dreams-preview.png"
									alt="">
								<p>
									Dreams is a free PSD web template built by <a
										href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
									Dreams is a modern one page web template designed for almost
									any purpose. It’s a beautiful template that’s designed with the
									Bootstrap framework in mind.
								</p>
								<p>
									You can download the PSD template in this portfolio sample item
									at <a
										href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.
								</p>
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
	
	
	<!-- Model Login -->
	
	
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
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
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
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Iniciar Sesión</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                ¿Te has olvidado la contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
		</div>
		</div>
	</div>
	
	
	
	
	<!-- End Modal Login -->

	<!-- jQuery -->
	<script
		src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script
		src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"
		integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
		crossorigin="anonymous"></script>

	<!-- Contact Form JavaScript -->
	<script
		src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
	<script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

	<!-- Theme JavaScript -->
	<script src="<?php echo base_url();?>assets/js/portada.min.js"></script>

</body>

</html>
