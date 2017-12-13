<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
			<div class="row">
			<button type="submit" class="close"
			onclick="window.location.href='/'">Volver a principal</button>
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
					<?= form_open('usuarios/register') ?>
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