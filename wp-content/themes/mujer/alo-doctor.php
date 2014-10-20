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
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                    </div>
                </div>
        </section>

        <section class="container spokesman">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/images/docarancibia.png">
                </div>
                <div class="col-md-6">
                    <h3><?php echo get_field('vocero_medico')?></h3>
                    <div class="line-green-0"></div>
                    <span>Vocero Médico</span>
                    <?php echo apply_filters('the_content' , get_field('comentario_vocero'))?>
                </div>
            </div>
        </section>

        <section class="container chat-consult">
        	<div class="row">
        		<?php comments_template('comments_template_doctor.php'); ?>
                <?php wp_list_comments("callback=my_custom_comments"); ?>
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