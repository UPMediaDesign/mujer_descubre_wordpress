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
                            <li><a href="" title="" rel="">¿Qué es?</a></li>
                            <li><a href="" title="" rel="">Tratamientos</a></li>
                            <li><a href="" title="" rel="">Preguntas Frecuentes</a></li>
                            <li><a href="" title="" rel="">Precauciones</a></li>
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
                        <h2>¿Qué es?</h2>
                        <div class="line-green"></div>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 treatments">
                        
                        <h2>Tratamientos</h2>
                        <div class="line-green"></div>
                        

                        <!-- Button trigger modal 1-->
                        <figure class="col-md-3 mlr0 pdlr05 treatments">
                        <img src="<?php bloginfo('template_directory'); ?>/images/treatment4.jpg" alt="">
                            <figcaption>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="" title="">Masajes</a>
                                <div class="line-pink"></div>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem... </p> 
                            </figcaption>
                        </figure>


                        <!-- Modal 1 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                <p>En los pacientes que no tienen indicación de cirugía, se pueden mencionar las siguientes medidas de tartamiento conservador para aliviar los síntomas y ayudar a evitar la progresión de la enfermedad</p>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin Modal 1 -->

                        <!-- Button trigger modal 2-->
                        <figure class="col-md-3 mlr0 pdlr05 treatments">
                        <img src="<?php bloginfo('template_directory'); ?>/images/treatment4.jpg" alt="">
                            <figcaption>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="" title="">Masajes</a>
                                <div class="line-pink"></div>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem... </p> 
                            </figcaption>
                        </figure>


                        <!-- Modal 2 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                <p>En los pacientes que no tienen indicación de cirugía, se pueden mencionar las siguientes medidas de tartamiento conservador para aliviar los síntomas y ayudar a evitar la progresión de la enfermedad</p>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin Modal 2 -->

                        <!-- Button trigger modal 3-->
                        <figure class="col-md-3 mlr0 pdlr05 treatments">
                        <img src="<?php bloginfo('template_directory'); ?>/images/treatment4.jpg" alt="">
                            <figcaption>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="" title="">Masajes</a>
                                <div class="line-pink"></div>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem... </p> 
                            </figcaption>
                        </figure>


                        <!-- Modal 3 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                <p>En los pacientes que no tienen indicación de cirugía, se pueden mencionar las siguientes medidas de tartamiento conservador para aliviar los síntomas y ayudar a evitar la progresión de la enfermedad</p>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin Modal 3 -->

                        <!-- Button trigger modal 4-->
                        <figure class="col-md-3 mlr0 pdlr05 treatments">
                        <img src="<?php bloginfo('template_directory'); ?>/images/treatment4.jpg" alt="">
                            <figcaption>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="" title="">Masajes</a>
                                <div class="line-pink"></div>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem... </p> 
                            </figcaption>
                        </figure>


                        <!-- Modal 4 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                <p>En los pacientes que no tienen indicación de cirugía, se pueden mencionar las siguientes medidas de tartamiento conservador para aliviar los síntomas y ayudar a evitar la progresión de la enfermedad</p>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin Modal 4 -->

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 questions">
                        <h2>Preguntas Frecuentes</h2>
                        <div class="line-green"></div>
                    <!-- Contenido Colapsable -->
                        <div class="panel-group questions" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  Collapsible Group Item #1
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  Collapsible Group Item #2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  Collapsible Group Item #2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  Collapsible Group Item #3
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                    <!-- Fin Contenido Colapsable -->
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 cautions mbottom30">
                        <h2>Precauciones</h2>
                        <div class="line-green"></div>
                    </div>
                    <div class="col-md-4 cautions">
                        <img src="<?php bloginfo('template_directory'); ?>/images/1.png" alt="">
                        <h4>Consectetuer Adipiscing</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>
                    </div>
                    <div class="col-md-4 cautions">
                        <img src="<?php bloginfo('template_directory'); ?>/images/2.png" alt="">
                        <h4>Consectetuer Adipiscing</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>
                    </div>
                    <div class="col-md-4 cautions">
                        <img src="<?php bloginfo('template_directory'); ?>/images/3.png" alt="">
                        <h4>Consectetuer Adipiscing</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>
                    </div>
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