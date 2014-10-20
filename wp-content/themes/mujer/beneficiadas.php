<?php
/*
Template Name: Beneficiadas
*/
?>
<?php get_header(); ?>
		<?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="beneficiadas" style="background-image:url(<?php echo $topimagen?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 single-container ">
                        <div class="jumbotron caption centered">
                            <h2><?php echo $post->post_title?></h2>
                            <span class="top-line"></span>
                            <p><?php echo $post->post_excerpt?></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <section class="container white">
                <div class="row">
                    <div class="col-md-12 medic-ask jumbotron">
                        <h2>¿Tienes consultas?</h2>
                        <div class="line-green"></div>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                </div>
        </section>
 		
		<section class="container actress">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/images/solange.png">
                </div>
                <div class="col-md-6">
                    <h3>Solange Lackington</h3>
                    <div class="line-green-0"></div>
                    <span>Actriz</span>
                    <p>
                        Chambray authentic aute paleo. Street art accusamus nesciunt excepteur, Thundercats try-hard kogi dolor bitters asymmetrical magna pop-up. Twee skateboard pork belly delectus, blog irony Neutra artisan organic commodo. 
                    </p>
                    <p>
                        Qui asymmetrical mollit, eiusmod Thundercats selfies vero wayfarers tempor butcher put a bird on it chillwave cardigan. Portland letterpress hoodie, distillery anim cardigan kale chips reprehenderit craft beer. In stumptown cornhole, locavore PBR kogi nulla ut ethical plaid PBR&B Godard YOLO non labore.
                    </p>
                </div>
            </div>
        </section>

        <section class="container white">
        	<div class="row">
        		<div class="col-md-12 medic-ask jumbotron">
        			<h2>Testimonios</h2>
        			<!-- Slider Casos Beneficiadas -->
        			<div class="line-green"></div>
                    <ul class="benefit">
                       <li class="col-md-6">
                        	<img src="<?php bloginfo('template_directory')?>/images/marcelagarrido.png" alt="">
                        	<h4>Marcela Garrido</h4>
                        	<div class="line-text"></div>
                        	<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        	<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, dolore eu feugiat nulla facilisis.</p>
                       	</li>
                        <li class="col-md-6">
                        	<img src="<?php bloginfo('template_directory')?>/images/doragonzalez.png" alt="">
                        	<h4>Dora Gonzalez</h4>
                        		<div class="line-text"></div>
                        		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        		<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, dolore eu feugiat nulla facilisis.</p>
                        </li>
                    </ul>
                    <nav class="slides-navigation benefit-ctrl">
                    	<a href="#" class="slides-navigation righta"><span class="fa fa-chevron-right"></span></a>
                    	<a href="#" class="slides-navigation lefta"><span class="fa fa-chevron-left"></span></a>
                    </nav>
                    <!-- Fin Slider Casos Beneficiadas -->
                </div>
        	</div>
        </section>

        <section class="container white">
        	<div class="row">
        		<div class="col-md-12 videos">
        			<h2>Videos</h2>
        			<div class="line-green"></div>
        			<ul class="videos-area">
        				<li class="col-md-4"><!-- Large modal -->
							<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='http://player.vimeo.com/video/66140585' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
							    </div>
							  </div>
							</div>
						</li>

						<li class="col-md-4"><!-- Large modal -->
							<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='http://player.vimeo.com/video/66140585' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
							    </div>
							  </div>
							</div>
						</li>

						<li class="col-md-4"><!-- Large modal -->
							<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='http://player.vimeo.com/video/66140585' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
							    </div>
							  </div>
							</div>
						</li>
        			</ul>
        			<nav class="slides-navigation videos-ctrl">
        				<a href="#" class="slides-navigation"><span class="fa fa-chevron-right"></span></a>
        				<a href="#" class="slides-navigation"><span class="fa fa-chevron-left"></span></a>
         			</nav>
        		</div>
        	</div>
        </section>

 		<section class="container suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Inscribete en el Programa</h3>
                        <a href="" title="" rel="">Ingresa Aquí</a>
                    </div>
                </div>
        </section>
        <!-- Fin Contenido Varices -->

<?php get_footer(); ?>