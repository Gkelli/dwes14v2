<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">
	<h1>Familias profesionales de Formación Profesionales</h1>
<?php
foreach ( $fct_familias as $familia ) :
	$url = 'familia_profesional/';
	$url .= url_title ( convert_accented_characters ( $familia->nombre_familia_profesional ), "-", TRUE );
	?>
		<h3><?php echo anchor($url , $familia->nombre_familia_profesional); ?></h3>
		<?php
endforeach
;
?>
	
	<div id="body"></div>
</div>
<?php
$this->load->view ( 'templates/front_end/footer' );
