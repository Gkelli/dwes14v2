<?php
$this->load->view ( 'templates/front_end/header' );
$this->load->view ( 'templates/front_end/sidebar' );
?>

<div class="jumbotron">
	<div class="container text-center">
		<h1>FP Conecta</h1>
		<p>Información sobre los ciclos formativos, centros y más</p>
	</div>
</div>

<div class="btn-toolbar" role="toolbar">
    <a href="#postModal" class="btn-toolbar btn-default btn-lg pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo post</a>
 
</div>
<div class="container">
	<h1>Últimos posts</h1>
<?php
foreach ( $fct_posts as $post ) :
	$url = 'post/';
	$url .= url_title ( convert_accented_characters ( $post->titulo_post ), "-", TRUE );
	?>
	<div class="row">

		<div class="span12">
			<div class="row">
				<div class="span8">
					<h4>
						<strong><a href="#"><?php echo anchor($url , $post->titulo_post); ?></a></strong>
					</h4>
				</div>
			</div>
			<div class="row">
				<div class="span2">
					<a href="#" class="thumbnail"> <img src="http://www.lorenafdezblog.com/wp-content/uploads/2013/09/ID-100207234.jpg" alt="">
					</a>
				</div>
				<div class="span10">
					<p><?php echo  $post->cuerpo_post ?></p>
					<p>
						<a class="btn" href="#">Leer más..</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p>
						<i class="icon-user"></i> Creado por: <a href="#"><?php echo  $post->id_usuario ?></a> 
						<i class="icon-calendar"></i> <?php echo  $post->fecha_post ?> 
						<i class="icon-comment"></i> <a href="#"><?php echo  $post->likes ?> Likes</a> 
						<i class="icon-tags"></i> Palabras clave : <a href="#">
						<?php 
						$palabras_clave = explode(",",  $post->keywords);  						
						foreach ($palabras_clave as $palabra){
							echo "<span class='label label-info'>".$palabra."</span></a> <a href='#'>";
						
						}						
						?>
					 <i class="fa fa-thumbs-up" aria-hidden="true" id="#like"></i>Te gusta
					</p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php endforeach;?>	
</div>
<div class=".post-modal modal fade" id="postModal"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-lg-offset-2">
							<div class="modal-body">
							<?=form_open(base_url().'posts/insertar_post');
 							    $titulo_post = array(
        						'name' => 'titulo_post',
        						'id' => 'titulo_post',
        						'size' => '50',
        						'style' => 'width:50%',
        						'value' => set_value('titulo_post')
    							); 
    						 
    						$keywords = array(
        					'name' => 'keywords',
        					'id' => 'keywords',
        					'size' => '50',
        					'style' => 'width:50%',
        					'value' => set_value('keywords')
    						);
 	
    						$mensaje = array(
        					'name' => 'mensaje',
        					'id' => 'mensaje',
        					'rows' => 10,
        					'cols' => 40,
        					'value' => set_value('mensaje')
    						);
 
    						$submit = array(
        					'name' => 'submit',
        					'id' => 'submit',
        					'value' => 'Enviar comentario',
        					'title' => 'Enviar comentario'
    						);
    						?>
							<?php
							echo form_fieldset('Nuevo comentario');
							?>
							            <table>
							                <tr>
							                    <td>
							                        <?php echo form_label('Titulo: '); ?>
							                    </td>
							                    <td>
							                        <?php echo form_input($titulo_post); ?>
							                    </td>
							                </tr>							                
							                <tr>
							                    <td>
							                        <?php echo form_label('Palabras Claves: '); ?>
							                    </td>
							                    <td>
							                        <?php echo form_input($keywords); ?>
							                    </td>
							                </tr>
							                 <tr>
							                    <td>
							                        <?php echo form_label('Cuerpo: '); ?>
							                    </td>
							                    <td>
							                        <?php echo form_textarea($mensaje); ?>
							                    </td>
							                </tr>
							                <tr>
							                    <td>
							 
							                    </td>
							                    <td>
												<!--mostramos los errores-->
							                  <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
							                    </td>
							                </tr>
							                <tr>
							                    <td>
							 
							                    </td>
							                    <td>
							                        <?php echo form_submit($submit);
							                        ?>
							                    </td>
							                </tr>
							                <?php
							                echo form_close();
							                ?>
							        </table>
							        <?php
							               echo form_fieldset_close();
							       ?>							
								<button type="button" class="btn btn-primary pull-right"
									data-dismiss="modal">
									<i class="fa fa-times"></i> Salir
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$this->load->view ( 'templates/front_end/footer' );