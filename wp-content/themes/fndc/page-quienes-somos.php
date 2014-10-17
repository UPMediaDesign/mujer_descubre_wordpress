<?php get_header()?>


<div id="bigcarousel" style="background-image:url(<?php echo get_field('superbackground')?>)">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 cols">
				<h1><?php the_title()?></h1>
				<p><?php echo get_the_excerpt()?></p>
			</div>
			<div class="col-md-6 cols desktop">
				
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div id="insidemenu" class="clr-<?php echo $post->post_name?> desktop">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => $post->post_title , 'container' => 'none' , 'menu_id' =>  $post->post_name , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>

<div id="undermain" style="background-image:url(<?php echo get_field('superbackground_b')?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="content">
					<div class="clear separator"></div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php echo apply_filters('the_content', get_the_content())?>
					<?php endwhile; else: ?>
					Sorry, no posts matched your criteria.
					<?php endif; ?>
				</div>
			</div>
			
			<div class="col-md-4">
				
				<h2>Misión</h2>
				<p><?php echo get_field('mision')?></p>
				
				<?php if(get_field('vision')){?>
				<h2>Objetivos</h2>
				<?php echo get_field('vision')?>
				<?php }?>
				
			</div>		
		</div>
        
        <div class="row">
            <div class="col-md-2 col-xs-6"><a href="http://empresasbanmedica.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/ebanmedica.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.banmedica.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/banmedica.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.vidatres.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/vidatres.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.davila.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/clinica-davila.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.clinicasantamaria.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/santamaria.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.clinicavespucio.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/vespuciob.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.vidaintegra.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/vidaintegra.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.clinicasanfelipe.com/csf/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/csanfelipe.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.ccdm.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/ciudad-del-mar.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.clinicabiobio.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/biobio.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.help.cl/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/help.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.labroe.com/roe/default.aspx" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/labroe.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.colmedica.com/Paginas/inicio.aspx" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/colmedica.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.clinicadelcountry.com/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/delcountry.png" alt="" width="100%" ></a></div>
            <div class="col-md-2 col-xs-6"><a href="http://www.hmc.cl/site/" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/medicalc.png" alt="" width="100%" ></a></div>
        </div>
        
		<?php /*?>
		<div class="row">
			<div class="noticias desktop">
			
			<h2><span class="fa fa-chevron-right fa-fw"></span> Noticias destacadas</h2>
			
			<?php $noticias = get_posts(array('numberposts' => '3' , 'seccion' => 'somos' ))?>
			<?php $count = 0;?>
			<?php foreach ($noticias as $noticia):?>
			<?php $count++?>
				<div class="mini-noticia noticia n0<?php echo $count+3?>">
					
					<?php $catss = wp_get_post_terms($noticia->ID , 'category'); ?>
					<div class="base">
						<?php echo get_the_post_thumbnail($noticia->ID , 'mini-noticia');?>
						<div class="gruper">
							<?php  echo '<h3>'.get_the_title($noticia->ID).'</h3>';?>
							<p><?php echo substr($noticia->post_content , 0 , 120)?>...</p>
						</div>
					</div>				
					<div class="linker">
						<a href="<?php echo get_permalink($noticia->ID)?>" class="layerup clr-<?php echo $catss[0]->slug?>"></a>
					</div>
					<div class="sharer">
						<div class="cat-top clr-<?php echo $catss[0]->slug?>"><?php echo $catss[0]->name?></div>
						
						<div class="sfb nt clr-<?php echo $catss[0]->slug?>"><a data-desc="<?php echo substr($noticia->post_content , 0 , 120)?>..." data-title="<?php echo get_the_title($noticia->ID)?>" class="fbshare" data-image="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($noticia->ID), 'thumbnail' ); echo  $thumb['0']; ?>"><span class="fa fa-facebook fa-fw"></span></a></div>
						
						
						
						<div class="stw nt clr-<?php echo $catss[0]->slug?>"><a href="https://twitter.com/share" data-url="<?php echo get_permalink($noticia->ID)?>" target="_blank" data-lang="es"><span class="fa fa-twitter fa-fw"></span></a></div>
					</div>
					
				</div>
			<?php endforeach;?>
			<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('.noticia .base').mouseover(function(event) {
					$(this).parent('.noticia').find('.linker a').fadeIn('fast', function() {
						$(this).mouseleave(function(event) {
							$(this).fadeOut('fast')
						});
					});
				});
			});	
			
			window.fbAsyncInit = function(){
						FB.init({
							appId: '692872517452883', status: true, cookie: true, xfbml: true }); 
						};
						(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, false));
						function postToFeed(title, desc, url, image){
						var obj = {method: 'feed',link: url, picture: image ,name: title,description: desc};
						function callback(response){}
						FB.ui(obj, callback);
						}
						
						
						jQuery('.fbshare').click(function(){
						elem = jQuery(this);
						postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
						
						return false;
						});	
				
			</script>
			<div class="clear border separator"></div>
			</div>
			
			<div class="formobile">
			<h2><span class="fa fa-chevron-right fa-fw"></span> Noticias destacadas</h2>
				<div class="noticias col-md-4">
				
				
			
				<?php $noticias = get_posts(array('numberposts' => '3' , 'seccion' => 'somos' ))?>
				<?php $count = 0;?>
				<?php foreach ($noticias as $noticia):?>
				<?php $count++?>
					<div class=" mini-noticia noticia n0<?php echo $count?>">
						
						<?php $catss = wp_get_post_terms($noticia->ID , 'category'); ?>
						
						<div class="bas">
							<a href="<?php echo get_the_permalink($noticia->ID)?>"><?php echo get_the_post_thumbnail($noticia->ID , 'thumbnail' , array('class' => 'alignleft'));?></a>
							<div class="grupe">
								<?php echo '<h3>'.get_the_title($noticia->ID).'</h3>';?>
								<small class="cat-top"><?php echo $catss[0]->name?></small>
								<div class="clear"></div>
								<p><?php echo substr($noticia->post_content , 0 , 180)?>...</p>
								
								
							</div>
						</div>				
					</div>
				<?php endforeach;?>
				
				
			</div>
			
			
			</div>
		</div>
		<?php */?>
		
		
	</div>
</div>


<style type="text/css">
	 #bigcarousel{ background-size:100% auto !important}
	 
	 @media (max-width: 1490px){
		#bigcarousel{background-size: auto 75% !important}
	 }
</style>

<?php get_footer()?>