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
                        <div class="jumbotron caption centered">
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
            <div class="container green-nav">
                    <div class="row">
                        <ul class="col-md-12 ">
                            <li><a href="#quees" title="" rel="">¿Qué es?</a></li>
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
                        <h2 id="quees">¿Qué es?</h2>
                        <div class="line-green"></div>
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                    </div>
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
            <div class="container suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Inscribete en el Programa</h3>
                        <a href="" title="" rel="">Ingresa Aquí</a>
                    </div>

                </div>

            </div>
        </section>
        <!-- Fin Contenido Varices -->

<?php get_footer()?>