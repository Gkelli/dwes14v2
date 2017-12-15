<?php
$this->load->view ( 'templates/front_end/header');
?>
<div class="container">

<section id="familiasprofesionales" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading"><?php echo $centro->nombre_centro?></h2>
					<h3 class="section-subheading text-muted"> <?php echo $centro->localidad?></h3>
				</div>
			</div>
			<div class="row">
					<div class="familiasprofesionales-type">
						<p class="text-muted"><?php echo $centro->descripcion?></p>
						
						<ul class="list-inline social-buttons text-right">
							<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span>Localización Centro</span>  <i class="fa fa-map-marker"></i></a></li>
							<li><a href="#"><i class="fa fa-users"></i></a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
						</ul>
				</div>
				
			</div>
			
		</div>
	</section>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Localización <?php echo $centro-> nombre_centro?></h4>
        </div><div class="col-xs-12">
        <div class="modal-body" style="margin-left: 110px">
          <?php $direccion = rawurlencode ( $centro->direccion . $centro->localidad ); ?>
<iframe width="600" height="450" frameborder="0" style="border: 0"
	src="https://www.google.com/maps/embed/v1/search?q=<?php echo $direccion ?>&key=AIzaSyDlB5pDDEkRkVVA3bplCX_Y0Fwr-23qRUA"
	allowfullscreen></iframe>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>





</div>


<?php 
$this->load->view ( 'templates/front_end/footer');