<?php
$this->load->view ( 'templates/front_end/header');
$this->load->view ( 'templates/front_end/sidebar');
?>
<style>
.post-slide{margin:0 15px;position:relative;background:#FFF}.post-slide .post-img{position:relative;overflow:hidden}.post-slide .post-img img{width:100%;height:auto}.post-slide .over-layer{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;background:rgba(0,0,0,.6);transition:all .3s ease}.post-slide:hover .over-layer{opacity:1}.post-slide .post-link{margin:0;padding:0;position:relative;top:45%;text-align:center}.post-slide .post-link li{display:inline-block;list-style:none;margin:-9px 0 0}.post-slide .post-link li a{color:#FFF;font-size:39px}.post-slide .date,.post-slide .month{font-size:20px;display:inline-block;font-weight:700}.post-slide .post-link li a:hover{color:#FF8B3D;text-decoration:none}.post-slide .post-date{position:absolute;top:10%;left:4%}.post-slide .date{border-radius:3px 0 0 3px;padding:5px 10px;color:#FFF;text-align:center;background:#333;float:left}.post-slide .month{border-radius:0 3px 3px 0;padding:5px 13px;color:#111;background:#FF8B3D}.post-slide .post-content{padding:30px;background-color:#F5F5F6}.post-slide .post-title{margin:0 0 15px}.post-slide .post-title a{font-size:17px;font-weight:700;color:#333;display:inline-block;transition:all .3s ease 0s}.post-slide .post-title a:hover{text-decoration:none;color:#FF8B3D}.post-slide .post-description{font-size:14px;line-height:22px;color:#444;padding:0 0 10px}.post-slide .read-more{color:#333;font-size:14px;font-weight:700;text-transform:uppercase;position:relative;transition:color .2s linear}.post-slide .read-more:hover{text-decoration:none;color:#FF8B3D}.post-slide .read-more:after{content:"";position:absolute;width:30%;display:block;border:1px solid #FF8B3D;transition:all .3s ease}.post-slide .read-more:hover:after{width:100%}@media only screen and (max-width:479px){.post-slide .date,.post-slide .month{font-size:14px}}div.clanky .row{padding-top:35px}
</style>
<div class="container">
<h1>Centros de la Comunidad de Madrid que imparten Formación Profesional</h1>
<p><?php echo count($fct_centros)?></p>
<div class="row">
<?php
foreach ($fct_centros as $centro):
$url = 'centro/';
$url .= url_title(convert_accented_characters($centro -> nombre_centro) , "-", TRUE);
?>

            
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/img/university-icon.png" alt="...">
                        <div class="caption">
                            <h3><?php echo anchor($url , $centro->nombre_centro); ?></h3>
                            <p><?php echo $centro->localidad;?></p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p><a href="<?php echo base_url() . $url ; ?>" class="btn btn-primary" role="button">Más información</a></p>
                        </div>
                    </div>
                </div>

		<?php 
	endforeach;
	?>
	   </div> 
 <nav aria-label="Page navigation" id="div-pagination">
                    <ul class="pager">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
</div>
<?php 
$this->load->view ( 'templates/front_end/footer');