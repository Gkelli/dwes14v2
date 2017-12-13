<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">

		<button type="submit" class="close"
			onclick="window.location.href='/'">Volver a principal</button>
		<div class="card card-container">
			<img id="profile-img" class="profile-img-card"
				src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
			<p id="profile-name" class="profile-name-card"></p>
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
		<?= form_open('usuarios/login')?>
			<div class="form-group">

				<input type="text" class="form-control" id="username"
					name="username" placeholder="Usuario" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="password"
					name="password" placeholder="Contraseña" required>
			</div>
			<div id="remember" class="checkbox">
				<label> <input type="checkbox" value="remember-me"> Recordarme
				</label>
			</div>
			<input class="btn btn-xl btn-block btn-signin" type="submit"
				value="Iniciar
					Sesión" />

			<!-- /form -->
			<br /> <a href="#" class="forgot-password"> ¿Te has olvidado la
				contraseña? </a> <br /> <br />
			<p style="clear: right">También puedes acceder con tu cuenta de Gmail</p>
			<div class="g-signin2" style="float: right; margin: 10px;"
				data-onsuccess="onSignIn"></div>
			<br /> <br />
			</form>
			<!-- /container -->
		</div>
	</div>
	<!-- .row -->
</div>
<!-- .container -->