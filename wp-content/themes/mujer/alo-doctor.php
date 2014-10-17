<?php
/*
Template Name: Alo Doctor
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

        <section class="container spokesman">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/images/docarancibia.png">
                </div>
                <div class="col-md-6">
                    <h3>Dr. Arancibia</h3>
                    <div class="line-green-0"></div>
                    <span>Vocero Médico</span>
                    <p>
                        Chambray authentic aute paleo. Street art accusamus nesciunt excepteur, Thundercats try-hard kogi dolor bitters asymmetrical magna pop-up. Twee skateboard pork belly delectus, blog irony Neutra artisan organic commodo. 
                    </p>
                    <p>
                        Qui asymmetrical mollit, eiusmod Thundercats selfies vero wayfarers tempor butcher put a bird on it chillwave cardigan. Portland letterpress hoodie, distillery anim cardigan kale chips reprehenderit craft beer. In stumptown cornhole, locavore PBR kogi nulla ut ethical plaid PBR&B Godard YOLO non labore.
                    </p>
                </div>
            </div>
        </section>

        <section class="container chat-consult">
        	<div class="row">
        		<?php comments_template(); ?>
        		
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