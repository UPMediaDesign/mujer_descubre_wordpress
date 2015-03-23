<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

            

            <div id="bigcarousel">
                <div id="slides">
                  <ul class="slides-container">
                    
                    <?php $slides = get_posts(array('post_type'=>'slider' , 'posts_per_page'=>4));?>
                    <?php $scount = 0?>
                    <?php foreach($slides as $slide):$scount++?>
                    <?php
                    $thumb_id = get_post_thumbnail_id($slide->ID);
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    ?>
                    <li style="background-image:url(<?php echo $thumb_url[0];?>); background-position:center top; height:580px; background-size:cover !important">
                      <?php //echo get_the_post_thumbnail($slide->ID , 'full')?>
                        <div class="carousel-caption jumbotron">
                            <h1><?php echo get_the_title($slide->ID)?></h1>
                            <h3><?php echo $slide->post_content?></h3>
                            <!-- <span class="left-line"></span>
                            <p><?php //echo $slide->post_excerpt?></p> -->
                        </div>
                    </li>
                    <?php endforeach;?>
                    
                    
                  </ul>
                  <nav class="slides-navigation">
                    <a href="#" class="next"><span class="fa fa-chevron-right"></span></a>
                    <a href="#" class="prev"><span class="fa fa-chevron-left"></span></a>
                  </nav>
                  
                  
                  
                </div>
                
                
                <script>
                jQuery(document).ready(function($) {
                    jQuery('#slides').superslides();
                });
              </script>
    
                        <?php /*
                        <div id="slides">
                          <ul class="slides-container">
                            
                            <?php $slides = get_posts(array('post_type'=>'slider' , 'posts_per_page'=>3));?>
                            <?php $scount = 0?>
                            <?php foreach($slides as $slide):$scount++?>
                            <?php
                            $thumb_id = get_post_thumbnail_id($slide->ID);
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                            ?>
                            <li style="background-image:url(<?php echo $thumb_url[0];?>); background-position:center top; height:580px; background-size:cover !important">
                              <?php //echo get_the_post_thumbnail($slide->ID , 'full')?>
                              <div class="carousel-caption jumbotron">
                                <h1><?php echo get_the_title($slide->ID)?></h1>
                                <h3><?php echo get_the_content($slide->ID)?></h3>
                                <span class="left-line"></span>
                                <p><?php echo $slide->post_excerpt?></p>
                              </div>
                            </li>
                            <?php endforeach;?>
                          </ul>

                          
                        </div>
                        
                        <script>
                            jQuery(document).ready(function($) {
                                jQuery('#slides').superslides();
                            });
                        </script>
                        */?>
            </div>

        

        <!-- Listado de casos -->
        <section>
            <div class="container">
                <h3 class="title-case">Mujer Descubre Tus Piernas</h3>
                <!-- <div class="title-line"></div> -->
                <span class="reference-case">Un Proyecto de la Fundación Banmédica</span>
            </div>
            <div class="container-fluid">
                <div class="row mgauto">

                    <?php query_posts( 'page_id=6' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="col-md-4 col-md-offset-2 case">
                        <?php the_post_thumbnail('home-boxes'); ?>
                        <figcaption>
                            <h3><?php the_title(); ?></h3>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>" >Ver Más</a>
                        </figcaption>
                    </figure>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

                    <?php query_posts( 'page_id=10' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="col-md-4 case">
                        <?php the_post_thumbnail('home-boxes'); ?>
                        <figcaption>
                            <h3><?php the_title(); ?></h3>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>" >Ver Más</a>
                        </figcaption>
                    </figure>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

                </div>
            </div>
        </section>

        <section class="arrow">
            
        </section>
        <!-- Fin Listado de casos -->

        <section class="bg-doctor">
            <div class="container doc-new">
                <div class="col-md-6 col-md-offset-6">
                    <?php query_posts( 'page_id=8' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                        <?php the_post_thumbnail('home-boxes'); ?>
                        
                        <h3>Dr. Fuenzalida</h3>
                        <p class="upper">Vocero Médico</p>
                        <p><?php echo substr(strip_tags($post->post_content), 0, 288); ?></p>
                            
                        <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>" >Ingresa a Aló Doctor</a>
                        
                    
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>

        </section>

        <!-- Sugerencias del Médico -->
        <section class="deep-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 consult">
                        <h3>Probabilidad de Varices por Edad</h3>

                        <div class="col-md-3 col-md-offset-2 stadistics">
                            <img src="<?php bloginfo('template_directory'); ?>/images/graph-3.png" title="" rel="">
                        </div>
                       
                        <div class="col-md-3 col-md-offset-1 stadistics">
                            <img src="<?php bloginfo('template_directory'); ?>/images/graph-4.png" title="" rel="">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Sugerencias del Médico -->

        <!-- Sugerencias para varices  -->
        <section>
            <div class="container-fluid sugerences">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tratamientos Várices</h4>
                        <div class="border-solid"></div>
                        <p>En los pacientes que no tienen indicación de cirugía, se pueden mencionar las siguientes medidas de tratamiento conservador para aliviar los síntomas y ayudar a evitar la progresión de la enfermedad</p>
                        <a href="<?php echo get_page_link(6)?>/#tratamientos" title="" rel="">Infórmate Más</a>
                    </div>
                </div>
            </div>  

        </section>
        <!-- Fin -->
        
        
        <!-- Modal -->
        <div class="modal fade container modal-inscripcion" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog col-md-10" style="width:100%">
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
        
<?php get_footer(); ?>