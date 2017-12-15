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
	<section>
		<div class="container" style="margin-top: 30px;">
			<div class="profile-head">
				<div class="col-md- col-sm-4 col-xs-12">
					<img
						src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png"
						class="img-responsive" />
					<h6><?php echo $usuario_data -> username;?></h6>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<h5><?php echo $usuario_data -> username;?></h5>
					<br/>
					<ul>
						<li><span class="glyphicon glyphicon-briefcase"></span> <?php echo $usuario_data -> trabajo;?> </li>
						<li><span class="glyphicon glyphicon-map-marker"></span> <?php echo $usuario_data -> ciudad;?> </li>
						<li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="telefono"><?php echo $usuario_data -> telefono;?></a></li>
						<li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="email"><?php echo $usuario_data -> email;?></a></li>
						<li><span class="glyphicon glyphicon-calendar"></span> Miembro desde: <?php echo date("d-m-Y", strtotime($usuario_data -> fecha_alta));?> </li>

					</ul>
				</div>
			</div>
		</div>
		<div id="sticky" class="container">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-menu" role="tablist">
				<li class="active"><a href="#profile" role="tab" data-toggle="tab">
						<i class="fa fa-male"></i> Perfil
				</a></li>
				<li><a href="#change" role="tab" data-toggle="tab"> <i
						class="fa fa-pencil-square-o"></i> Editar Perfil
				</a></li>
				<li><a href="#change_password" role="tab" data-toggle="tab"> <i
						class="fa fa-key"></i> Cambiar Contraseña
				</a></li>
			</ul>
			<div class="tab-content">			
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
				<div class="tab-pane fade active in" id="profile">
					<div class="container">
						<div class="col-sm-11" style="float: left;">
							<div class="hve-pro">
								<p><?php echo $usuario_data -> username;?></p>
							</div>
						</div>
						<br clear="all" />
						<div class="row">
							<div class="col-md-12">
								<h4 class="pro-title">Datos del perfil</h4>
							</div>
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
												<td>: <?php if(($usuario_data -> fecha_nacimiento)!= 0000-00-00){ echo date("d-m-Y", strtotime($usuario_data -> fecha_nacimiento));} ?></td>
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
							</div>
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
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="change">
					<div class="container fom-main">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="register">Editar tu Perfil</h2>
							</div>
						</div>
						<br />
						<div class="row">				
								<?= form_open('usuarios/update_user')?>	
								<fieldset>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Nombre</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="nombre_usuario" value="<?php echo $usuario_data -> nombre_usuario;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Apellidos</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="apellidos" value="<?php echo $usuario_data -> apellidos;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">F. Nacimiento</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="fecha_nacimiento" value="<?php echo $usuario_data -> fecha_nacimiento; ?>"
													class="form-control" type="date" required>
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Ciudad</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="ciudad" value="<?php echo $usuario_data -> ciudad;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Pais</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="pais" value="<?php echo $usuario_data -> pais;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">E-Mail</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="email" placeholder="<?php echo $usuario_data -> email;?>" value="<?php echo $usuario_data -> email;?>"
													class="form-control" type="text" disabled>
											</div>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Teléfono</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="telefono" value="<?php echo $usuario_data -> telefono;?>"
													class="form-control" type="tel">
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Móvil</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="movil" value="<?php echo $usuario_data -> movil;?>"
													class="form-control" type="tel">
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Trabajo</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="trabajo" value="<?php echo $usuario_data -> trabajo;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>									
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">LinkedIn</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="linkedIn" value="<?php echo $usuario_data -> linkedIn;?>"
													class="form-control" type="text">
											</div>
										</div>
									</div>
									
									<!-- Text input-->	
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
											<button type="button" class="btn btn btn-default submit-button" onClick="confirmar_borrado()">Borrar cuenta</button>											

										</div>
									</div>
									<div class="form-group col-md-10">
										<div class="col-md-6">
											<button type="submit" class="btn btn-warning submit-button">Guardar</button>
											<button type="button"  class="btn btn-warning submit-button" onClick="window.location='/usuarios/info_user';">Cancelar</button>											

										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="change_password">
					<div class="container fom-main">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="register">Cambiar tu contraseña</h2>
							</div>
						</div>
						<br />
						<div class="row">				
							<?= form_open('usuarios/update_password')?>	
								<fieldset>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Contraseña</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="password" placeholder="Contraseña"
													class="form-control" type="password">
											</div>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label class="col-md-12 control-label">Confirmar Contraseña</label>
										<div class="col-md-11 inputGroupContainer">
											<div class="input-group">
												<input name="confirm_password" placeholder="Confirmar Contraseña"
													class="form-control" type="password">
											</div>
										</div>
									</div>
									<div class="form-group col-md-10">
										<div class="col-md-6">
											<button type="submit" class="btn btn-warning submit-button">Guardar</button>
											<button type="button" class="btn btn-warning submit-button" onClick="window.location='/usuarios/info_user';">Cancelar</button>
											
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
    <script type="text/javascript">
		function confirmar_borrado(){
			if(confirm("Estás seguro que quieres borrar tu cuenta?")){
				window.location='/usuarios/delete';
			} else {
				alert("Gracias por quedarte con nosotros");
			}
		}
	</script>
