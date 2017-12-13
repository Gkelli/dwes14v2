<!DOCTYPE html>
<html lang="es">

<head>
<title><?php echo $titulo; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Geyse Canquerino">
<link href="<?php echo base_url();?>assets/css/profile.css"
	rel="stylesheet">
<link rel='stylesheet prefetch'
	href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link
	href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css"
	integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE"
	crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Sección de Búsqueda</h4>
					</div>
					<div class="modal-body">

						<section class="search-box1" id="panel">
							<div class="container">
								<form class="form-inline" role="form">
									<div class="col-sm-8 col-xs-8 form-group top_search"
										style="padding-right: 0px;">
										<div class="row">
											<label class="sr-only" for="search">Buscar aqui...</label> <span
												class="serach-footer"><img src="images/srch.png" /></span> <input
												type="text" class="form-control search-wrap" id="search"
												placeholder="Search here...">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4 col-xs-4 form-group top_search"
											style="padding-left: 0px;">
											<button type="submit" class="btn btn-default search-btn">Buscar</button>
										</div>
									</div>
								</form>
							</div>
						</section>



					</div>

				</div>
			</div>

		</div>
	</div>
	<br>	<br>	<br>

	<section>

		<div class="container" style="margin-top: 30px;">
			<div class="profile-head">
				<div class="col-md- col-sm-4 col-xs-12">
					<img
						src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png"
						class="img-responsive" />
					<h6><?php echo $usuario_data -> username;?></h6>
				</div>
				<!--col-md-4 col-sm-4 col-xs-12 close-->


				<div class="col-md-5 col-sm-5 col-xs-12">
					<h5><?php echo $usuario_data -> username;?></h5>
					<br/>
					<ul>
						<li><span class="glyphicon glyphicon-briefcase"></span> <?php echo $usuario_data -> trabajo;?> </li>
						<li><span class="glyphicon glyphicon-map-marker"></span> <?php echo $usuario_data -> ciudad;?> </li>
						<li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call"><?php echo $usuario_data -> telefono;?></a></li>
						<li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail"><?php echo $usuario_data -> email;?></a></li>
						<li><span class="glyphicon glyphicon-hand-up"></span> <?php echo $usuario_data -> linkedIn;?> </li>

					</ul>


				</div>
				<!--col-md-8 col-sm-8 col-xs-12 close-->

			</div>
			<!--profile-head close-->
		</div>
		<!--container close-->


		<div id="sticky" class="container">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-menu" role="tablist">
				<li class="active"><a href="#profile" role="tab" data-toggle="tab">
						<i class="fa fa-male"></i> Perfil
				</a></li>
				<li><a href="#change" role="tab" data-toggle="tab"> <i
						class="fa fa-key"></i> Editar Perfil
				</a></li>
			</ul>
			<!--nav-tabs close-->

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade active in" id="profile">
					<div class="container">
						<div class="col-sm-11" style="float: left;">
							<div class="hve-pro">
								<p><?php echo $usuario_data -> username;?></p>
							</div>
							<!--hve-pro close-->
						</div>
						<!--col-sm-12 close-->
						<br clear="all" />
						<div class="row">
							<div class="col-md-12">
								<h4 class="pro-title">Datos del perfil</h4>
							</div>
							<!--col-md-12 close-->


							<div class="col-md-6">

								<div class="table-responsive responsiv-table">
									<table class="table bio-table">
										<tbody>
											<tr>
												<td>Nombre</td>
												<td>: <?php echo $usuario_data -> nombre_usuario;?></td>
											</tr>
											<tr>
												<td>Apellidos</td>
												<td>: <?php echo $usuario_data -> apellidos;?></td>
											</tr>
											<tr>
												<td>F. Nacimiento</td>
												<td>: <?php echo date("d-m-Y", strtotime($usuario_data -> fecha_nacimiento)) ?></td>
											</tr>
											<tr>
												<td>Ciudad </td>
												<td>: <?php echo $usuario_data -> ciudad;?></td>
											</tr>
											<tr>
												<td>Pais</td>
												<td>: <?php echo $usuario_data -> pais;?></td>
											</tr>

										</tbody>
									</table>
								</div>
								<!--table-responsive close-->
							</div>
							<!--col-md-6 close-->

							<div class="col-md-6">

								<div class="table-responsive responsiv-table">
									<table class="table bio-table">
										<tbody>
											<tr>
												<td>Email </td>
												<td>: <?php echo $usuario_data -> email;?></td>
											</tr>
											<tr>
												<td>Teléfono</td>
												<td>: <?php echo $usuario_data -> telefono;?></td>
											</tr>
											<tr>
												<td>Móvil</td>
												<td>: <?php echo $usuario_data -> movil;?></td>
											</tr>
											
											<tr>
												<td>Trabajo</td>
												<td>: <?php echo $usuario_data -> trabajo;?></td>
											</tr>
											
											<tr>
												<td>LinkedIn </td>
												<td>: <?php echo $usuario_data -> linkedIn;?> </td>
											</tr>
											

										</tbody>
									</table>
								</div>
								<!--table-responsive close-->
							</div>
							<!--col-md-6 close-->

						</div>
						<!--row close-->

					</div>
					<!--container close-->
				</div>
				<!--tab-pane close-->


				<div class="tab-pane fade" id="change">
					<div class="container fom-main">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="register">Editar tu Perfil</h2>
							</div>
							<!--col-sm-12 close-->

						</div>
						<!--row close-->
						<br />
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
								<?= form_open('usuarios/update_user')?>
	
								<fieldset>


									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Nombre</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="nombre_usuario" value="<?php echo $usuario_data -> nombre_usuario;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>

									<!-- Text input-->

									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Apellidos</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="apellidos" value="<?php echo $usuario_data -> apellidos;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">F. Nacimiento</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="fecha_nacimiento" value="<?php echo $usuario_data -> fecha_nacimiento;?>"
													class="form-control" type="date">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Ciudad</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="ciudad" value="<?php echo $usuario_data -> ciudad;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Pais</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="pais" value="<?php echo $usuario_data -> pais;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									

									<!-- Text input-->
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">E-Mail</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="email" value="<?php echo $usuario_data -> email;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>


									<!-- Text input-->

									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Teléfono</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="telefono" value="<?php echo $usuario_data -> telefono;?>"
													class="form-control" type="tel">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Móvil</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="movil" value="<?php echo $usuario_data -> movil;?>"
													class="form-control" type="tel">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Trabajo</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="trabajo" value="<?php echo $usuario_data -> trabajo;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">LinkedIn</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="linkedIn" value="<?php echo $usuario_data -> linkedIn;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									

									<!-- Text input-->							


									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Contraseña</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="password" placeholder="Contraseña"
													class="form-control" type="password">
											</div>
										</div>
									</div>

									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Confirmar Contraseña</label>
										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<input name="password" placeholder="Confirmar Contraseña"
													class="form-control" type="password">
											</div>
										</div>
									</div>


									<!-- radio checks
									<div class="form-group col-md-12">
										<label class="col-md-10 control-label">Género</label>
										<div class="col-md-6">
											<div class="radio col-md-2">
												<label> <input type="radio" name="genero" value="yes" />
													Hombre
												</label>
											</div>
											<div class="radio col-md-2">
												<label> <input type="radio" name="genero" value="no" />
													Mujer
												</label>
											</div>
										</div>
									</div>
 									-->
									<!-- upload profile picture -->
									<div class="col-md-12 text-left">
										<div class="uplod-picture">
											<span class="btn btn-default uplod-file"> Actualizar foto <input
												type="file" />								
											</span>
										</div>
										<!--uplod-picture close-->
									</div>
									<!--col-md-12 close-->
									<!-- Button -->
									<div class="form-group col-md-10">
										<div class="col-md-6">
											<button type="submit" class="btn btn-warning submit-button">Guardar</button>
											<button type="submit" class="btn btn-warning submit-button">Cancelar</button>
											<input class="btn btn-xl btn-block btn-signin" type="submit"
				value="ok" />

										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<!--row close-->
					</div>
					<!--container close -->
				</div>
				<!--tab-pane close-->
			</div>
			<!--tab-content close-->
		</div>
		<!--container close-->

	</section>
	<!--section close-->

 <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>


    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/portada.min.js"></script>
</body>
</html>