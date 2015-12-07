       <!-- Inicio Footer -->
        <footer class="pinkfoot">
            <div class="container">
                <div class="row">
                    <ul class="col-md-3 ">
                       <li class="tupp">About</li> 
                       <li><a href="<?php home_url( ); ?>/las-varices/" title="Las Varices" rel="nofollow">Las Varices</a></li>
                       <li><a href="http://alodoctor.mujerdescubretuspiernas.cl/" title="Aló Doctor" rel="nofollow">Aló Doctor</a></li>
                       <li><a href="<?php home_url(); ?>/mujeres-beneficiadas" title="Mujeres Beneficiadas" rel="nofollow">Mujeres Beneficiadas</a></li>
                       <?php /* <li><a href="http://inscripciones.mujerdescubretuspiernas.cl/" title="Inscribete en el Programa" rel="nofollow">Inscríbete en el Programa</a></li> */?>
                       <li><a href="http://www.fundacionbanmedica.cl" title="Fundacion">Fundación</a>
                       </li>  
                    </ul> 

                    <div class="col-md-3 credits">
                        <span>Una iniciativa de:</span>
                        <a href="http://www.fundacionbanmedica.cl" title="Fundación Banmédica" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png"></a>
                        <p>Por un Chile más saludable y feliz.</p>
                    </div>

                    <div class="col-md-6 credits">
                      
                      <span>Clínicas asociadas:</span>
                      <div class="clear"></div>
                      <div class="clinicas">
                                    
                        <?php $clinicas = get_field('clinicas_asociadas' , 'options')?>
                          <?php foreach( $clinicas as $clinica):?>
                              <div class="col-xs-4 col-md-3 clicnics">
                                  <a href="<?php echo $clinica['link_clinica']?>" target="_blank" title="Ir a <?php echo $clinica['nombre_de_la_clinica']?>"><img src="<?php echo $clinica['logo_clinica']?>" width="100%" alt="" /></a>
                              </div>
                        <?php endforeach;?>
                      </div>

                      <ul class="credits" style="padding-left:0;">
                        <span>Visitanos en las redes:</span>
                          <div class="clear display-on-mobile"></div>
                        <?php $redes = get_field('redes_sociales' , 'options')?>
                          <?php foreach($redes as $red):?>
                          <li class="col-xs-1" style="padding: 10px 0px 5px 5px;">
                            <a href="<?php echo $red['link_red']?>" target="_blank" title="Mujer Descubre tus Piernas - <?php echo $red['nombre_de_la_red'] ?>">
                              <img src="<?php echo $red['logo_red']?>" alt="<?php echo $red['nombre_de_la_red'] ?>" width="100%">
                            </a>
                          </li>
                        <?php endforeach;?>
                      </ul>
                                
                    </div>
                </div>
            </div>

            <div class="container bordered-foot">
                <div class="row ">
                    <div class="col-md-12 copyrighted">
                        <span class="">Todos los derechos reservados</span>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Fin del footer -->

    </body>

<?php wp_footer()?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56208002-1', 'auto');
  ga('send', 'pageview');

</script>

</html>