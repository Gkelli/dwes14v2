<?php
$this->load->view ( 'templates/front_end/header' );
?>
<div class="container">
	<h1>Módulos de la Formación Profesional</h1>
<?php
foreach ( $fct_modulos as $modulo ) :
	$url = 'modulo/';
	$url .= url_title ( convert_accented_characters ( $modulo->nombre_modulo ), "-", TRUE );
	?>
		<h3><?php echo anchor($url , $modulo->nombre_modulo); ?></h3>
		<?php
endforeach
;
?>
</div>
<?php
$this->load->view ( 'templates/front_end/footer' );