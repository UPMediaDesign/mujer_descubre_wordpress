<?php get_header()?>


<div id="bigcarousel" style="background-image:url(<?php echo get_field('superbackground')?>)">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 cols">
				<h1><?php the_title()?></h1>
				<p><?php echo get_the_excerpt()?></p>
			</div>
			<div class="col-md-6 cols">
				<!--<a href="#" class="btn btn-default">Inscríbete en el programa</a> -->
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>

	<?php 
	if ( $post->post_parent != '0' ) {?>
		<?php $parent_aid = $post->post_parent;?>
		<?php $parent_name = get_post($parent_aid)?>
		<div id="insidemenu" class="clr-<?php echo $parent_name->post_name?>">
	<?php }else{?>
		<div id="insidemenu" class="clr-<?php echo $post->post_name?>">
	<?php }?>

	<div class="container">
		<div class="row">
		<?php 
		if ( $post->post_parent != '0' ) {?>
			<?php $parent_aid = $post->post_parent;?>
			<?php $parent_name = get_post($parent_aid)?>
		<?php wp_nav_menu( array('menu' => $parent_name->post_title , 'container' => 'none' , 'menu_id' =>  $parent_name->post_name , 'menu_class' => 'menu-insider desktop'));?>
		<?php }else{?>
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => $post->post_title , 'container' => 'none' , 'menu_id' =>  $post->post_name , 'menu_class' => 'menu-insider desktop'));?>
		<?php }?>			
			
		</div>
	</div>
</div>

<div id="undermain" style="background-image:url(<?php echo get_field('superbackground_b' , $post->ID)?>)">
	<div class="container">
		<div class="row">
		
			<div class="col-md-8">
				<div class="content">
                	<?php if(is_page(537) || is_page(535) || $post->post_parent == 535 || $post->post_parent == 537){?>
					<div class="clear separator"></div>
                    <?php }?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php echo apply_filters('the_content', get_the_content())?>
					<?php endwhile; else: ?>
					Sorry, no posts matched your criteria.
					<?php endif; ?>
					
					<?php if(is_page(452)){?>
						<?php echo do_shortcode('[gallery columns="5"]')?>
					<?php }?>
					
				</div>
			</div>
			
			<div class="col-md-4">
			
			<?php if($post->post_parent == 9){?>
			
				<h2>Misión</h2>
				<p><?php echo get_field('mision' , 9)?></p>
				
				<?php if(get_field('vision' , 9)){?>
				<h2>Objetivos</h2>
				<?php echo get_field('vision' , 9)?>
				<?php }?>
				
			<?php }elseif($post->post_parent == 11){?>
			
				<h2>Alimentación saludable</h2>
				
				<?php $tips = get_posts(array( 'post_type' => 'tips' , 'seccion' => 'vive_sano' , 'posts_per_page' => 3 ));
				$tipscount = 0; 
				foreach ($tips as $tip):
				$tipscount++;?>
				
					<div class="tip">
						<h4><span class="numerodetip"><?php echo $tipscount?></span> <?php echo $tip->post_title?></h4>
						<p><?php echo substr($tip->post_content , 0 , 80)?> ...</p>
					</div>
				
				<?php endforeach; ?>
				<div class="morelink"><a href="<?php echo get_post_type_archive_link('tips')?>?seccion=vive_sano">Ver más consejos <span class="fa fa-plus fa-fw"></span></a></div>
				
				<!--<h2>Clínicas Asociadas</h2> -->
			<?php }elseif($post->post_parent == 13){?>
			
			
				<h2>Pack de la vida</h2>
				
				<iframe src="//player.vimeo.com/video/104046514?color=00bb6a&badge=0&byline=0&portrait=0" width="100%" height="170" frameborder="0"  portrait="0" color="#00bb6a" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				
				<h2>5 Tests</h2>
				<?php $tips = get_posts(array( 'post_type' => 'tips' , 'seccion' => 'pack' , 'posts_per_page' => 5 ));
				$tipscount = 0; 
				foreach ($tips as $tip):
				$tipscount++;?>
				
					<div class="tip">
						<h4><span class="numerodetip"><?php echo $tipscount?></span> <?php echo $tip->post_title?></h4>
					</div>
				
				<?php endforeach; ?>
				<!--<div class="morelink"><a href="<?php echo get_post_type_archive_link('tips')?>">Ver más tips <span class="fa fa-plus fa-fw"></span></a></div> -->
                
                <div class="clear separator"></div>
				
				<h2>Reserva tu hora aquí</h2>
				<a href="http://www.clinicavespucio.cl/"><img src="<?php bloginfo('template_directory')?>/images/vespucio.png" class="alignleft" alt="" /></a>
				<a href="http://ccdm.cl/PDV/"><img src="<?php bloginfo('template_directory')?>/images/delmar.png" alt="" width="140" /></a>
			
            <?php }elseif(is_page(537) || is_page(535) || $post->post_parent == 535 || $post->post_parent == 537){?>
			
            	
                
                    
                   	
                
            <?php 
			if($post->ID == 560 || $post->ID == 535 ){
				echo '<h2>Ingresa a Alimentate Sano</h2>';
				echo '<a href="http://www.alimentatesano.cl/" target="_blank" class="btn btn-warning" style="width:100%">Ir al portal Aliméntate Sano</a>';
			
			}elseif($post->ID == 558 || $post->ID == 537){
				echo '<h2>Ingresa a Mi Fitbook</h2>';
				echo '<a href="http://www.mifitbook.cl/" target="_blank" class="btn btn-warning" style="width:100%">Ir a mi fitbook</a>';
				
			}?>
                
              <div class="clear separator border"></div>  
            
			<?php 
			if($post->ID == 560){
				echo '<a href="'.get_bloginfo('url').'/wp-content/uploads/2014/09/4-reporte-alimentate-sano-s.pdf" class="descagrareporte btn btn-danger"  style="width:100%">Descarga Reporte Programa Alimentate Sano</a>';
			
			}elseif($post->ID == 558){
				echo '<a href="'.get_bloginfo('url').'/wp-content/uploads/2014/09/1-reporte-mi-fitbook.pdf" class="descagrareporte btn btn-danger"  style="width:100%">Descarga Reporte Programa Mi Fitbook</a>';
				
			}?>
			<div class="clear"></div>
			<img class="alignleft size-full wp-image-605" src="http://fundacion.upmedia.cl/wp-content/uploads/2014/08/uc.png" alt="mifitbook" width="125"  />

				<img class="alignrigh size-full wp-image-605" src="http://fundacion.upmedia.cl/wp-content/uploads/2014/08/pam.png" alt="mifitbook" width="130"  />
                <div class="clear"></div>
</div>
			
			<?php }else{?>
			
				<h2>Testimonios</h2>
				
				<?php $testimonios = get_posts(array( 'post_type' => 'testimonios' , 'seccion' => 'mujer' , 'posts_per_page' => '2' ));
				foreach ($testimonios as $testimonio):?>
				<div class="testimonio">
					<div class="img-testimonio alignleft">
						<a href="<?php echo get_the_permalink($testimonio->ID)?>"><?php echo get_the_post_thumbnail($testimonio->ID , 'thumbnail')?></a>
					</div>
					<div class="txt-testimonio">
						<img src="<?php bloginfo('template_directory')?>/images/upperq.png" class="qte" alt="" /><?php echo substr($testimonio->post_content , 0 , 70)?> ...<img src="<?php bloginfo('template_directory')?>/images/lowerq.png" class="qte" alt="" />
					</div>
					<div class="clear"></div>
				</div>
				<?php endforeach;?>
				<div class="morelink"><a href="<?php echo get_post_type_archive_link('testimonios')?>?seccion=mujer">Ver más testimonios <span class="fa fa-plus fa-fw"></span></a></div>
				
				<div class="separator"></div>
				<div class="clear separator border"></div>
				
				<!--<h2>Clínicas Asociadas</h2> -->
				
			<?php }?>
				
			</div>
			
		</div>
	</div>
</div>
<?php get_footer()?>