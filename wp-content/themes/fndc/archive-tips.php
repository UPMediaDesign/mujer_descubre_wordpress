<?php get_header()?>

<?php 
$var = get_queried_object();
$tipo = $var->taxonomy;
$type = $var->slug;
$typoID = $var->term_id;

?>
<div id="bigcarousel" style="background-image:url(<?php echo get_field('superbackground' , $tipo.'_'.$typoID)?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-6 cols">
            	<?php if($type == 'fitbook' || $type == 'pack'){?>
                <h1>Estilo de vida saludable</h1>
                <?php }elseif( $type == 'alimentacion'){
					echo '<h1>Aliméntate Sano</h1>';	
				}else{?>
				<h1>Consejos y tips</h1>
                <?php }?>
				<p><?php echo $var->description?></p>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>

<?php if($type=='mujer'){?>
<div id="insidemenu" class="clr-mujer-descubre-tus-piernas" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Mujer descubre tus piernas' , 'container' => 'none' , 'menu_id' =>  'mujer-descubre-tus-piernas' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }elseif($type=='vive_sano'){?>
<div id="insidemenu" class="clr-vive-sano" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Vive Sano' , 'container' => 'none' , 'menu_id' =>  'vive-sano' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }elseif($type=='alimentacion'){?>
<div id="insidemenu" class="clr-alimentate-sano" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Alimentate sano' , 'container' => 'none' , 'menu_id' =>  'alimentate-sano' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }elseif($type=='fitbook'){?>
<div id="insidemenu" class="clr-mi-fitbook" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Mi fitbook' , 'container' => 'none' , 'menu_id' =>  'mi-fitbook' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }elseif($type == 'pack'){?>
<div id="insidemenu" class="clr-pack-de-la-vida" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Pack de la vida' , 'container' => 'none' , 'menu_id' =>  'pack-de-la-vida' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }?>

<div id="undermain" style="background-image:url(<?php echo get_field('superbackground_b' , $post->ID)?>); <?php if($type =='mujer' || $type =='vive_sano' || $type =='fitbook' || $type =='alimentacion' || $type == 'pack'){ echo 'margin-top: 0px;';}else{echo 'margin-top: -42px;';}?>">
	<div class="container">
		<div class="row">
		
			<div class="col-md-8">
				<div class="content">
					
					<br />
                    
                    <?php if(get_field('introduccion_tips' , 'seccion_'.$typoID)){?>
                    	<?php echo get_field('introduccion_tips' , 'seccion_'.$typoID)?>
                    <?php }?>
                    
                    
                    <?php if($type== 'vive_sano'){?>
                    	<a href="http://fundacion.upmedia.cl/wp-content/uploads/2014/09/plato-sano-b.png" class="innerlink" rel="shadowbox" ><img src="http://fundacion.upmedia.cl/wp-content/uploads/2014/09/plato-sano.png" width="100%" alt="" /></a>
                        <br />
                    <?php }?>
                    
					<?php 
					$tipscount = 0;
					
					if($type == 'pack'){
						$posts = get_posts(array('post_type' => 'tips' , 'seccion' => $type, 'post__not_in' => array(400, 401, 402, 403,404)));	
					}
					 
					foreach ($posts as $post):
					$tipscount++;?>
					
						<div class="tip testimonio">
							<h4><span class="numerodetip clr-<?php echo $type ;?>"><?php echo $tipscount?></span> <?php echo $post->post_title?></h4>
                            <div class="img-testimonio alignleft">
                                <!--<a href="<?php echo get_the_permalink($post->ID)?>"> --><?php echo get_the_post_thumbnail($post->ID , 'thumbnail')?><!--</a> -->
                            </div>
							<?php echo apply_filters('the_content' , $post->post_content)?>
							<?php /* ?><div class="morelink"><a href="<?php echo get_permalink($post)?>">Ver más <span class="fa fa-plus fa-fw"></span></a></div><?php  */?>
							<div class="clear"></div>
						</div>
					
					<?php endforeach; ?>
					<style type="text/css">.tip.testimonio p {
padding-left: 100px;
}</style>
				</div>
			</div>
			
			<div class="col-md-4">
            
            	<?php if($type == 'alimentacion'){
			
            	
                
				echo '<h2>Ingresa a Alimentate Sano</h2>';
				echo '<a href="http://www.alimentatesano.cl/" target="_blank" class="btn btn-warning" style="width:100%">Ir al portal Aliméntate Sano</a>';
			
			}elseif($type == 'fitbook'){
				echo '<h2>Ingresa a Mi Fitbook</h2>';
				echo '<a href="http://www.mifitbook.cl/" target="_blank" class="btn btn-warning" style="width:100%">Ir a mi fitbook</a>';
				
			
			
			
			//videos 
			$count = 0;
			$videos = get_posts(array('post_type'=>'videos' , 'seccion' => 'fitbook' , 'posts_per_page' => 4));
			foreach ($videos as $video):
			$count++;
			
				if($count == 1){
					//video destacado
					echo '<div class="clear separator"></div>';
					echo '<iframe src="//player.vimeo.com/video/'.get_field('video_id' , $video->ID).'" width="100%" height="240" frameborder="0" portrait="0" color="ed8484" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
					
				}else{?>
               		<div class="clear separator"></div>
					<div class="video sidevideocontent">
						
							<div class="miniatura desktop">
								<a href="<?php echo get_the_permalink($video->ID)?>"><?php echo get_the_post_thumbnail($video->ID , 'mini-noticia' , array('class' => 'sidevideos'))?></a>
							</div>
							<div class="videocontent">
								
								<?php echo get_the_post_thumbnail($video->ID , 'video' , array('class'=> 'alignleft formobile minivideo'))?>
								
								<p><?php echo substr($video->post_content , 0 , 180)?> ...</p>
                                <div class="morelink"><a href="<?php echo get_permalink($video->ID)?>">Ver Video <span class="fa fa-plus fw"></span></a></div>
							</div>
							<div class="clear"></div>
						
					</div>
				<?php }
			
			endforeach;
			
			
			
                
            
				}elseif($type== 'vive_sano'){
					
					
				
				}elseif($type == 'pack'){?>
				
				<h2>5 Tests</h2>
				<?php $tips = get_posts(array( 'post_type' => 'tips' , 'seccion' => 'pack' , 'posts_per_page' => 5 , 'post__in' => array(400, 401, 402, 403,404) ));
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
					
				<?php }else{?>
            
				<h2>Testimonios</h2>
				
				<?php $testimonios = get_posts(array( 'post_type' => 'testimonios' , 'seccion' => $type , 'posts_per_page' => '2' ));
				foreach ($testimonios as $testimonio):?>
				<div class="testimonio">
					<div class="img-testimonio alignleft">
						<?php echo get_the_post_thumbnail($testimonio->ID , 'thumbnail')?>
					</div>
					<div class="txt-testimonio">
						<img src="<?php bloginfo('template_directory')?>/images/upperq.png" class="qte" alt="" /><?php echo substr($testimonio->post_content , 0 , 70)?> ...<img src="<?php bloginfo('template_directory')?>/images/lowerq.png" class="qte" alt="" />
					</div>
					<div class="clear"></div>
				</div>
				<?php endforeach;?>
				<div class="morelink"><a href="<?php echo get_post_type_archive_link('testimonios')?>/?seccion/<?php echo $type?>">Ver más testimonios <span class="fa fa-plus fa-fw"></span></a></div>
				
				<div class="separator"></div>
				<?php }?>
				
				
			</div>
			
		</div>
	</div>
</div>
<?php get_footer()?>