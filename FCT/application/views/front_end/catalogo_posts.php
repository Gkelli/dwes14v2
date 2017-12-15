<?php
$this->load->view ( 'templates/front_end/header' );
?>

<div class="jumbotron">
	<div class="container text-center">
		<h1>FP Conecta</h1>
		<p>Información sobre los ciclos formativos, centros y más</p>
	</div>
</div>

<div class="btn-toolbar" role="toolbar">
	<a href="#myModalNorm" class="btn-toolbar btn-default btn-lg pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo post</a>
</div>
<div class="container">
	<h1>Últimos posts</h1>
<?php
foreach ( $fct_posts as $post ) :
	$url = 'post/';
	$url .= url_title ( strtolower ( $post->url_post ) );
	?>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h4><strong><?php echo anchor($url , $post->titulo_post); ?></strong></h4>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<a href="#" class="thumbnail"> <img class="img-fluid" src="<?php echo base_url();?>assets/img/posts/post_default.jpg" alt="">
				</a>
				<p><?php echo  substr( $post->cuerpo_post , 0 , 800); ?></p>
				<p>
						<?php echo anchor($url , "Leer más..."); ?> 
					</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">

				<i class="icon-user"></i> Creado por: <a href="#"><?php echo  $post->id_usuario ?></a>
				<i class="icon-calendar"></i> <?php echo  date("d-m-Y", strtotime($post->fecha_post)) ?> 
						<i class="icon-comment"></i> <a href="#"><?php echo  $post->likes ?> Likes</a>
				<i class="icon-tags"></i> Palabras clave : <a href="#">
						<?php
	$palabras_clave = explode ( ",", $post->keywords );
	foreach ( $palabras_clave as $palabra ) {
		echo "<a href='#'><span class='label label-info'>" . $palabra . "</span></a> &#32;";
	}
	?>
						</a> <i class="fa fa-thumbs-up" aria-hidden="true" id="#like"></i>Te
				gusta

			</div>
		</div>
	</div>
	<hr>
	<?php endforeach;?>	
</div>
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary" style="padding: 20px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
				</button>
				<h3 class="modal-title" id="lineModalLabel">Nuevo post</h3>
			</div>
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
			<?= form_open('posts/insertar_post')?>
				<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="text" class="form-control" name="titulo_post"
							autocomplete="off" id="titulo_post"
							placeholder="Titulo post (Mínimo 10 caracteres)" required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<input type="text" class="form-control" name="keywords"
							autocomplete="off" id="keywords"
							placeholder="Palabras-clave (separadas por ,)" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control textarea" rows="24"
							name="cuerpo_post" id="cuerpo_post" placeholder="Cuerpo Post"
							required></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn main-btn pull-right">Publicar post</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php
$this->load->view ( 'templates/front_end/footer' );