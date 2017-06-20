<?php
$this->load->view ( 'templates/front_end/header');
$this->load->view ( 'templates/front_end/sidebar');
?>
<div class="container">
<h1>Centros de la Comunidad de Madrid que imparten Formación Profesional</h1>
<?php
foreach ($fct_centros as $centro):
$url = 'centro/';
$url .= url_title(convert_accented_characters($centro -> nombre_centro) , "-", TRUE);
?>
		<h3><?php echo anchor($url , $centro->nombre_centro); ?></h3>
		<p><?php echo $centro->localidad;?></p>
		<?php 
	endforeach;
	?>
	
	<div id="body">	
	</div>
</div>
<?php 
$this->load->view ( 'templates/front_end/footer');