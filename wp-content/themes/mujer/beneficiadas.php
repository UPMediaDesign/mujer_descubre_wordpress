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
                        <div class="col-md-12 jumbotron caption centered">
                            <h2><?php echo $post->post_title?></h2>
                            <span class="top-line"></span>
                            <p><?php echo $post->post_excerpt?></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <section class="container light-grey border-ccc">
                <div class="row">
                    <div class="col-md-12 medic-ask jumbotron intro-testimonios">
                        <h2>Historias Reales</h2>
                        <div class="line-green"></div>
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                        <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/<?php //echo get_field('video_beneficiadas') ?>" frameborder="0" allowfullscreen></iframe> -->
                        
                    </div>
                </div>
        </section>
 		

        <section class="container white">
        	<div class="row">
        		<div class="col-md-12 medic-ask jumbotron ">
        			<h2>Testimonios</h2>
        			<!-- Slider Casos Beneficiadas -->
        			<div class="line-green"></div>
                    <ul class="benefit bxslider">
                       
                        <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                       
                       <?php $ctest = 0;?>
                       <?php $testimonios = get_posts(array('post_type' => 'testimonio', 'numberposts' => 8))?>
                       <?php foreach($testimonios as $testimonio):?>
                       <?php $ctest++?>
                       <li class="col-md-3">
                        <a style="background:none !important; padding:0 !important;" title="<?php the_permalink(); ?>" rel="nofollow" data-target="#modal-<?php echo $ctest?>" data-toggle="modal" >
                      		<?php echo get_the_post_thumbnail($testimonio->ID , 'tratamiento' , array('class' => 'testiimagen'))?>
                        </a>
                        	
                        	<h4><?php echo $testimonio->post_title?></h4>
                        	<div class="line-text"></div>
                        	<?php echo apply_filters('the_content' , $testimonio->post_content)?>
                            
                            
                            <a title="<?php the_permalink(); ?>" rel="nofollow" data-target="#modal-<?php echo $ctest?>" data-toggle="modal" >
                                Ver testimonio
                            </a>
                            
                            <div class="modal fade" id="modal-<?php echo $ctest?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" id="cerrar2-v-<?php echo get_field('video_id' , $testimonio->ID)?>" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    
                                  </div>
                                  <div class="modal-content">
                                      <div class='embed-container'>
                                        <iframe src='<?php echo get_field('video_id' , $testimonio->ID)?>' id="vi-<?php echo get_field('video_id' , $testimonio->ID)?>" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        <script type="text/javascript">
                                        jQuery(document).ready(function($) {
                                            var iframe = document.getElementById('vi-<?php echo get_field('video_id' , $testimonio->ID)?>');
                                            $f == Froogaloop
                                            var player = $f(iframe);
                                            
                                            var pauseButton = document.getElementById("cerrar2-v-<?php echo get_field('video_id' , $testimonio->ID)?>");
                                            pauseButton.addEventListener("click", function() {
                                              player.api("pause");
                                            });
                                            
                                            var pauseButton = document.getElementById("modal-<?php echo $ctest?>");
                                            pauseButton.addEventListener("click", function() {
                                              player.api("pause");
                                            });
                                            
                                        }); 
                                        </script>
                                        <script>
                                            jQuery(document).ready(function($) {
                                            jQuery('.modal .close').on('click', function() {
                                                //$('#popup-youtube-player').stopVideo();
                                              jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
                                            });
                                            jQuery('.modal').on('click', function() {
                                                //$('#popup-youtube-player').stopVideo();
                                              jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
                                            });
                                            });
                                        </script> 
                                      </div>
                                </div>
                                  
                                </div>
                              </div>
                            </div>
                            
                            
                       	</li>
                        <?php endforeach;?>
                    
                    </ul>

                    <nav class="slides-navigation benefit-ctrl">
                    	<a href="#" class="slides-navigation righta"><span class="fa fa-chevron-right"></span></a>
                    	<a href="#" class="slides-navigation lefta"><span class="fa fa-chevron-left"></span></a>
                    </nav> 
                    <!-- Fin Slider Casos Beneficiadas -->
                </div>
        	</div>
        </section>
		
        <section class="container white videos pdbottom30">
        	<div class="row">
        		<div class="col-md-12 videos">
        			<h2>Videos</h2>
        			<div class="line-green"></div>
        		</div>
        	</div>

        	<div class="row videos-area slider">
            	
            	<?php $cvideo = 0?>
				<?php $videos = get_posts(array('post_type' => 'videos' , 'tipo'=>'testimonios' , 'numberposts' => 10 ))?>
                <?php foreach($videos as $video):?>
                <?php $cvideo++?>

        		<div class="col-md-4 pdlr0 ">
                
                	<figure class="slide">
                    	<?php echo get_the_post_thumbnail($video->ID , 'filosofia' , array('data-toggle' => 'modal' , 'data-target'=> '#modalb-'.$cvideo , 'class' => 'btn btn-primary'))?>
                    	<figcaption>
                        	<img src="<?php bloginfo('template_directory')?>/images/play.png" alt="" width="90" data-toggle="modal" data-target="#modalb-<?php echo $cvideo?>" />
                        </figcaption>
                        <h3><?php echo get_the_title($video->ID , array('data-toggle' => 'modal' , 'data-target'=> '#modal-'.$cvideo , 'class' => 'btn btn-primary'))?></h3>
                    </figure>
						
					
					<!-- Fin Ventana Modal -->
				</div>
                <?php endforeach?>


				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                </style>

        	</div>

            <!-- Llamado a inscripción -->
        </section>
		<div class="clear separator"></div>
 		<section class="container-fluid suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Conoce a más sobre los tratamientos</h3>
                        <a title="" href="<?php echo get_page_link(6)?>" >Ingresa Aquí</a>
                    </div>
                </div>
        </section>
        

            <!-- Modal Videos -->
            <?php $cvideo = 0;?>
            <?php foreach($videos as $video):?>
            <?php $cvideo++?>
                <div class="modal fade bs-example-modal-lg" id="modalb-<?php echo $cvideo?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-header">
                                <button type="button" id="cerrar-v-<?php echo get_field('id_del_video' , $video->ID)?>" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
                            </div>
                            <div class="modal-content">
                                  <div class='embed-container'>
                                    <iframe src='http://player.vimeo.com/video/<?php echo get_field('id_del_video' , $video->ID)?>?api=1' id="vi-<?php echo get_field('id_del_video' , $video->ID)?>" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        var iframe = document.getElementById('vi-<?php echo get_field('id_del_video' , $video->ID)?>');
                                        $f == Froogaloop
                                        var player = $f(iframe);
                                        
                                        var pauseButton = document.getElementById("cerrar-v-<?php echo get_field('id_del_video' , $video->ID)?>");
                                        pauseButton.addEventListener("click", function() {
                                          player.api("pause");
                                        });
                                        
                                        var pauseButton = document.getElementById("modalb-<?php echo $cvideo?>");
                                        pauseButton.addEventListener("click", function() {
                                          player.api("pause");
                                        });
                                        
                                    }); 
                                    </script>
                                  </div>
                            </div>
                        </div>
                </div>

            <?php endforeach ?>
                    <!-- Fin Modal Videos -->

        <!-- Modal -->
        <div class="modal fade container modal-inscripcion" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog col-md-10 " style="width:100%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscríbete</h4>
              </div>
              <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="79" title="Formulario inscripcion"]')?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Fin Contenido Varices -->
        <script>
            jQuery('.slider').bxSlider({
                slideWidth: 600,
                slideMargin:5,
                minSlides: 3,
                maxSlides: 3,
                pager:false,    
            });    
        </script>

        <!-- Slider Beneficiadas script -->
        <script>
            // jQuery('.bxslider').bxSlider({
            //     nextSelector: '#slider-next',
            //     prevSelector: '#slider-prev',
            //     slideWidth: 360,
            //     slideMargin:4,
            //     maxSlides: 2,
            //     minSlides: 2,
            //     pager: true,
            // });
        </script>

<?php get_footer(); ?>