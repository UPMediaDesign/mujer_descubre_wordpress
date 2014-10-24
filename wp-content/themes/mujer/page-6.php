<?php
/*
Template Name: Las Varices
*/
?>
<?php get_header()?>
		<?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="varices" style="background-image:url(<?php echo $topimagen?>)">
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

        <!-- Subnavegación verde -->
        <section>
            <div class="container">
                    <div class="row green-nav">
                        <ul class="col-md-12 ">
                            <li><a href="#que-son-las-varices" title="" rel="">¿Qué son las várices?</a></li>
                            <li><a href="#tratamientos" title="" rel="">Tratamientos</a></li>
                            <li><a href="#preguntas-frecuentes" title="" rel="">Preguntas Frecuentes</a></li>
                            <li><a href="#precauciones" title="" rel="">Precauciones</a></li>
                        </ul>
                    </div>
                </div>
            
        </section>
        <!-- Fin Subnavegación verde -->

        <!-- Contenido Varices -->
        <section>
            <div class="container white">
                <div class="row">
                    <div class="col-md-12 about">
                        <h2 id="que-son-las-varices">¿Qué son las várices?</h2>
                        <div class="line-green"></div>
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                    </div>
                </div>

            <div class="container white videos">
                <div class="row">
                  <div class="col-md-12 videos">
                    <h2>Videos</h2>
                    <div class="line-green"></div>
                  </div>
                </div>

               <div class="row videos-area slider">
                  <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                    <?php $cvideo = 0?>
                    <?php $videos = get_posts(array('post_type' => 'videos' , 'numberposts' => 10 ))?>
                    <?php foreach($videos as $video):?>
                    <?php $cvideo++?>

                <div class="col-md-4 pdlr0 ">
                      <figure class="slide">
                          <?php echo get_the_post_thumbnail($video->ID , 'filosofia' , array('data-toggle' => 'modal' , 'data-target'=> '#modal-'.$cvideo , 'class' => 'btn btn-primary'))?>
                          <figcaption>
                              <img src="<?php bloginfo('template_directory')?>/images/play.png" alt="" width="90" data-toggle="modal" data-target="#modal-<?php echo $cvideo?>" />
                            </figcaption>
                        </figure>
                <!-- Fin Ventana Modal -->
                </div>
                <?php endforeach?>
          </div>


        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                </style>

          </div>

            <!-- Llamado a inscripción -->
        </div>

                <div class="row">
                    <div class="col-md-12 treatments">
                        
                        <h2 id="tratamientos">Tratamientos</h2>
                        <div class="line-green"></div>
                        
                        <?php $ctrata = 0?>
                        <?php $tratamientos = get_posts(array('post_type' => 'tratamientos' , 'numberposts' => 4 ))?>
                        <?php foreach($tratamientos as $tratamiento):?>
                        <?php $ctrata++?>

                        <!-- Button trigger modal 1-->
                        <figure class="col-md-3 mlr0 pdlr05 treatments">
                        <?php echo get_the_post_thumbnail($tratamiento->ID, 'tratamiento')?>
                        <!--<img src="<?php bloginfo('template_directory'); ?>/images/treatment4.jpg" alt=""> -->
                            <figcaption>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-<?php echo $ctrata?>" href="" title=""><?php echo $tratamiento->post_title?></a>
                                <div class="line-pink"></div>
                                <p><?php echo $tratamiento->post_excerpt?></p> 
                            </figcaption>
                        </figure>


                        <!-- Modal 1 -->
                        <div class="modal fade" id="myModal-<?php echo $ctrata?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $tratamiento->post_title?></h4>
                              </div>
                              <div class="modal-body">
                                <?php echo apply_filters('the_content' , $tratamiento->post_content)?>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin Modal 1 -->

                        <?php endforeach;?>

                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12 questions">
                        <h2 id="preguntas-frecuentes">Preguntas Frecuentes</h2>
                        <div class="line-green"></div>
                    </div>

                </div>

                <div class="row">
                           Elastislide Carousel -->
                    <!-- <div class="col-md-12">
                    <ul class="bxSlider panel-group questions">
                        
                        
                         <?php $npreg //= 0;?>
                          <?php $preguntas //= get_posts(//array('post_type' => 'preguntas_frecuentes' , 'numberposts' => 10 ))?>
                          <?php //foreach($preguntas as $pregunta):?>
                          <?php $npreg//++?>
                          <li class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="modal" data-target="#myModalb-<?php //echo $npreg?>" >
                                  <?php //echo $pregunta->post_title?>
                                </a>
                              </h4>
                            </div>

                            <div id="collapse-<?php //echo $npreg?>" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>
                                <?php //echo $pregunta->post_content?>
                                </p>
                              </div>
                            </div> 
                            
                        </li>
                        <?php //endforeach ?>
                    </ul> -->
                    <!-- End Elastislide Carousel -->

                <div class="row">
                    <div class="col-md-12 questions">
                        <h2 id="preguntas-frecuentes">Preguntas Frecuentes</h2>
                        <div class="line-green"></div>
                    <!-- Contenido Colapsable -->
                        
                        <div class="panel-group questions" id="accordion">
                          
                          <?php $npreg = 0;?>
                          <?php $preguntas = get_posts(array('post_type' => 'preguntas_frecuentes' , 'numberposts' => 5 ))?>
                          <?php foreach($preguntas as $pregunta):?>
                          <?php $npreg++?>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $npreg?>">
                                  <?php echo $pregunta->post_title?>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse-<?php echo $npreg?>" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>
                                <?php echo $pregunta->post_content?>
                                </p>
                              </div>
                            </div>
                          </div>
                          
                          <?php endforeach?>
        
                         
                        </div>
                    <!-- Fin Contenido Colapsable -->
                    </div>

                </div>

            

                <div class="row">
                    <div class="col-md-12 cautions mbottom30">
                        <h2 id="precauciones">Precauciones</h2>
                        <div class="line-green"></div>
                    </div>
                    
                    <?php $precauciones = get_field('precauciones' )?>
                    <?php $pcounter = 0;?>
                    <?php foreach($precauciones as $precaucion):?>
                    <?php $pcounter++?>
                    <div class="col-md-4 cautions">
                        <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $pcounter;?>.png" alt="">
                        <h4><?php echo $precaucion['precaucion']?></h4>
                        <p><?php echo $precaucion['precaucion_bajada']?></p>
                    </div>
                    <?php endforeach?>
                    
                </div>
            </div>
            
            <div class="separator"></div>
            
            <div class="container-fluid suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Inscríbete en el Programa</h3>
                        <a title="" rel="" data-toggle="modal" data-target="#myModal" >Ingresa Aquí</a>
                    </div>
                </div>
            </div>
       					<!-- Modal preguntas -->
<!--                         <?php $npreg //= 0;?>
                        <?php //foreach($preguntas as $pregunta):?>
                        <?php $npreg//++?>
                        <div class="modal fade" id="myModalb-<?php //echo $npreg?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php //echo $pregunta->post_title?></h4>
                              </div>
                              <div class="modal-body">
                                <?php //echo $pregunta->post_content?>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <?php //endforeach;?> -->
                        <!-- Fin Modal  -->
        <!-- Modal Videos -->
            <?php $cvideo = 0;?>
            <?php foreach($videos as $video):?>
            <?php $cvideo++?>
                <div class="modal fade bs-example-modal-lg" id="modal-<?php echo $cvideo?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                        
                                        var pauseButton = document.getElementById("modal-<?php echo $cvideo?>");
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
            
            
        </section>
        <!-- Fin Contenido Varices -->

        <script>
            jQuery('.slider').bxSlider({
                slideWidth: 600,
                slideMargin:5,
                minSlides: 3,
                maxSlides: 3,
                pager:true,    
            });    
        </script>
        <script>
          jQuery('.qSlider').bxSlider({
            mode: 'vertical',
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            minSlides: 5,
            maxSlides: 5,
            pager: true
          });
    </script>

<?php get_footer()?>