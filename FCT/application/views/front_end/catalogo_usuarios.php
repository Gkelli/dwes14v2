<?php
$this->load->view ( 'templates/front_end/header');
$this->load->view ( 'templates/front_end/sidebar');
?>
<div class="container">
<h1>Usuarios</h1>
<?php
foreach ($fct_usuarios as $usuario):
?>
		<h3><?php echo $usuario->username ?></h3>
		<p><?php echo  $usuario->email ?></p>
		<p><?php echo  $usuario->fecha_alta ?></p>
		<a href="#"><span class="glyphicon glyphicon-comment"></span> Chat </a>
		<?php 
	endforeach;
	?>
</div>
<?php 
$this->load->view ( 'templates/front_end/footer');