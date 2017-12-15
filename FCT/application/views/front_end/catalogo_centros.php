<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">
	<h1>Centros de la Comunidad de Madrid que imparten Formación
		Profesional</h1>
	<!-- <p><?php echo count($fct_centros)?></p> -->
	<div class="row">
	<?php
		foreach ( $fct_centros as $centro ) :
		$url = 'centro/';
		$url .= url_title ( convert_accented_characters ( $centro->nombre_centro ), "-", TRUE );
	?>
		<div class="col-sm-6 col-md-6">
			<div class="thumbnail">
				<img class="img-responsive" src="<?php if(isset($centro->imagen)) { echo base_url();?>assets/img/centros/<?php echo $centro->imagen; } else { echo base_url();?>assets/img/university-icon.png<?php }?>" alt="..." >
				
				<div class="caption">
					<h3><?php echo anchor($url , $centro->nombre_centro); ?></h3>
					<p><?php echo $centro->localidad;?></p>
					<p><?php echo substr($centro->descripcion, 0,  800);?></p>
					<p>
						<a href="<?php echo base_url() . $url ; ?>"
							class="btn btn-primary" role="button">Más información</a>
					</p>
				</div>
			</div>
		</div> 
		<?php endforeach ;?>
	   </div>
	<nav aria-label="Page navigation" id="div-pagination">
		<ul class="pager">
			<li><a href="#" aria-label="Anterior"> <span aria-hidden="true">«</span>
			</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#" aria-label="Siguiente"> <span aria-hidden="true">»</span>
			</a></li>
		</ul>
	</nav>
</div>
<?php
$this->load->view ( 'templates/front_end/footer' );