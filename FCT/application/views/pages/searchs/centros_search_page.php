<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">
	<section id="centros_resultados" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h3 class="section-subheading text-muted">Resultado de la búsqueda de centros</h3>
				</div>
			</div>
			<div class="row">
			<?php
			$url = 'centro/';
			?>
				<div class="centros_resultados-type">
					<?php
					if (isset ( $resultados )) {
						
						foreach ( $resultados as $resultado ) :							
							$url .= url_title ( convert_accented_characters ( $resultado->nombre_centro ), "-", TRUE );
					?>
					<p class="text-muted"><?php echo anchor($url , $resultado->nombre_centro); ?></p>
					<?php
						endforeach
						;
					}
					?>						<!-- 
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