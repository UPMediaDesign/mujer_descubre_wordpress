       <!-- Inicio Footer -->
        <footer class="pinkfoot">
            <div class="container">
                <div class="row">
                    <ul class="col-md-3 ">
                       <li class="tupp">About</li> 
                       <li><a href="" title="Las Varices" rel="nofollow">Las Varices</a></li>
                       <li><a href="" title="Aló Doctor" rel="nofollow">Aló Doctor</a></li>
                       <li><a href="" title="Mujeres Beneficiadas" rel="nofollow">Mujeres Beneficiadas</a></li>
                       <li><a href="" title="Inscribete en el Programa" rel="nofollow">Inscríbete en el Programa</a></li>  
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
                                  <a href="<?php echo $clinica['link_clinica']?>" target="_blank" title="Adquirir Pack de la vida en <?php echo $clinica['nombre_de_la_clinica']?>"><img src="<?php echo $clinica['logo_clinica']?>" width="100%" alt="" /></a>
                              </div>
                        <?php endforeach;?>
                      </div>
                                
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