<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">

	<section id="post_page" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading"><?php echo $post_detalle->titulo_post?></h2>
					<h3 class="section-subheading text-muted"> <?php echo str_replace("-", " ",$post_detalle->keywords) ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="post_page-type">
					<p class="text-muted"><?php echo $post_detalle->cuerpo_post?></p>
					<!-- 
						<ul class="list-inline social-buttons text-right">
							<li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
							<li><a href="#"><i class="fa fa-list-alt"></i></a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
						</ul>
						-->
				</div>

			</div>

		</div>
	</section>
</div>
<?php
$this->load->view ( 'templates/front_end/footer' );