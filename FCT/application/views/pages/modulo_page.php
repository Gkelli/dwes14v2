<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">

	<section id="familiasprofesionales" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading"><?php echo $aaa-> nombre_modulo?></h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit
						amet, consectetuer adipiscing elit. Aenean commodo ligula eget
						dolor. Aenean massa.</h3>
				</div>
			</div>
			<div class="row">
				<div class="familiasprofesionales-type">
					<p class="text-muted"><?php echo $aaa->descripcion?></p>

					<ul class="list-inline social-buttons text-right">
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i
								class="fa fa-users"></i></a></li>
						<li><a href="#"><i class="fa fa-list-alt"></i></a></li>
						<li><a href="#"><i class="fa fa-tags"></i></a></li>
					</ul>
				</div>

			</div>

		</div>
	</section>

</div>


<?php
$this->load->view ( 'templates/front_end/footer');