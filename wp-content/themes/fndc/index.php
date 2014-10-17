<?php get_header()?>
<div id="bigcarousel">
	
	<div id="slides">
	  <ul class="slides-container">
		
		<?php $slides = get_posts(array('post_type'=>'slider' , 'posts_per_page'=>4));?>
	  	<?php $scount = 0?>
	  	<?php foreach($slides as $slide):$scount++?>
		<?php
		$thumb_id = get_post_thumbnail_id($slide->ID);
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
	  	?>
		<li style="background-image:url(<?php echo $thumb_url[0];?>); background-position:center top; height:580px; background-size:cover !important">
		  <?php //echo get_the_post_thumbnail($slide->ID , 'full')?>
		  <div class="carousel-caption">
			<h1><?php echo get_the_title($slide->ID)?></h1>
			<!--<h3>tation ullamcorper suscipit labortis nusl ul aliquip</h3> -->
			<p><?php echo $slide->post_excerpt?></p>
		  </div>
		</li>
		<?php endforeach;?>
		
		
	  </ul>
	  <nav class="slides-navigation">
		<a href="#" class="next"><span class="fa fa-chevron-right"></span></a>
		<a href="#" class="prev"><span class="fa fa-chevron-left"></span></a>
	  </nav>
	  
	  
	  
	</div>
	
	
	<script>
	jQuery(document).ready(function($) {
		jQuery('#slides').superslides();
	});
  </script>
	
	
</div>


<div id="rapidos">
	<div class="container">
		<div class="row">
			<ul class="bxslider">
				<?php $programas = get_field('programas' , 'options')?>
				<?php foreach($programas as $programa):?>
				
				<li>
					<div class="box">
						<h2><?php echo $programa['programa']?></h2>
						<a href="<?php echo $programa['link']?>"><img src="<?php echo $programa['icono']?>" alt="" /></a>
						<p><?php echo $programa['descripcion']?></p>
					</div>
				</li>
				<?php endforeach?>
				
			</ul>
			
			<div class="formobile programas">
			<ul>
				<?php $programas = get_field('programas' , 'options')?>
				<?php foreach($programas as $programa):?>
				<li class="col-md-4">
					<div class="box">
						<h2><?php echo $programa['programa']?></h2>
						<a href="<?php echo $programa['link']?>"><img src="<?php echo $programa['icono']?>" alt="" /></a>
						<p><?php echo $programa['descripcion']?></p>
					</div>
				</li>
				<?php endforeach?>
			</ul>
			</div>
			
		</div>
		
	</div>
</div>

<div class="clear separator"></div>

<div id="noticias-destacadas">
	<div class="container">
		<div class="row">
			<h1>Noticias Destacadas</h1>
			
			<div class="selector-categorias desktop">
				<ul>
					<?php $cat = get_term('4', 'category'); $cat_link = get_category_link(4);?>
					<li class="clr-<?php echo $cat->slug;?>"><a href="<?php echo $cat_link?>"><?php echo $cat->name?></a></li>
					<?php $catb = get_term('5', 'category'); $catb_link = get_category_link(5);?>
					<li class="clr-<?php echo $catb->slug;?>"><a href="<?php echo $catb_link?>"><?php echo $catb->name?></a></li>
					<?php $catc = get_term('6', 'category'); $catc_link = get_category_link(6);?>
					<li class="clr-<?php echo $catc->slug;?>"><a href="<?php echo $catc_link?>"><?php echo $catc->name?></a></li>
					<?php $catd = get_term('7', 'category'); $catd_link = get_category_link(7);?>
					<li class="clr-<?php echo $catd->slug;?>"><a href="<?php echo $catd_link?>"><?php echo $catd->name?></a></li>
					<?php $cate = get_term('8', 'category'); $cate_link = get_category_link(8);?>
					<li class="clr-<?php echo $cate->slug;?>"><a href="<?php echo $cate_link?>"><?php echo $cate->name?></a></li>
				</ul>
			</div>
			
			<div class="noticias desktop">
			
			<?php $noticias = get_posts(array('numberposts' => '6'))?>
			<?php $count = 0;?>
			<?php foreach ($noticias as $noticia):?>
			<?php $count++?>
				<div class="<?php if($count == 1){echo 'big-noticia';}else{echo 'mini-noticia';}?> noticia n0<?php echo $count?>">
					
					<?php $catss = wp_get_post_terms($noticia->ID , 'category'); ?>
					<div class="base">
						<?php if($count == 1){echo get_the_post_thumbnail($noticia->ID , 'big-noticia');}else{echo get_the_post_thumbnail($noticia->ID , 'mini-noticia');}?>
						<div class="gruper">
							<?php if($count == 1){echo'<h2>'.get_the_title($noticia->ID).'</h2>';}else{ echo '<h3>'.get_the_title($noticia->ID).'</h3>';}?>
							<p><?php echo substr($noticia->post_content , 0 , 120)?>...</p>
						</div>
					</div>				
					<div class="linker">
						<a href="<?php echo get_permalink($noticia->ID)?>" class="layerup clr-<?php echo $catss[0]->slug?>"></a>
					</div>
					<div class="sharer">
						<div class="cat-top clr-<?php echo $catss[0]->slug?>"><?php echo $catss[0]->name?></div>
						
						
						
						<!--<div class="sheart  nt clr-<?php echo $catss[0]->slug?>"><span class="fa fa-heart fa-fw"></span></div> -->
						<div class="sfb nt clr-<?php echo $catss[0]->slug?>"><a data-desc="<?php echo substr($noticia->post_content , 0 , 120)?>..." data-title="<?php echo get_the_title($noticia->ID)?>" class="fbshare" data-image="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($noticia->ID), 'thumbnail' ); echo  $thumb['0']; ?>"><span class="fa fa-facebook fa-fw"></span></a></div>
						
						
						
					<div class="stw nt clr-<?php echo $catss[0]->slug?>"><a href="https://twitter.com/share" data-url="<?php echo get_permalink($noticia->ID)?>" target="_blank" data-lang="es"><span class="fa fa-twitter fa-fw"></span></a></div>
						
						

						
					</div>
					
				</div>
			<?php endforeach;?>
			<script type="text/javascript">
			jQuery(document).ready(function($) {
				jQuery('.noticia .base').hover(function() {
					jQuery(this).parent('.noticia').find('.linker a').fadeIn('fast')
				}, function() {
					jQuery(this).parent('.noticia').find('.linker a').mouseout(function(event) {
						jQuery(this).fadeOut('fast')
					});
				});
			});
				
						window.fbAsyncInit = function(){
						FB.init({
							appId: '692872517452883', status: true, cookie: true, xfbml: true }); 
						};
						(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
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
			
			</div>
			
			
			<div class="formobile">
			
			<div class="selector-categorias col-md-4">
				<ul>
					<?php $cat = get_term('4', 'category'); $cat_link = get_category_link(4);?>
					<li class="clr-<?php echo $cat->slug;?>"><a href="<?php echo $cat_link?>"><?php echo $cat->name?></a></li>
					<?php $catb = get_term('5', 'category'); $catb_link = get_category_link(5);?>
					<li class="clr-<?php echo $catb->slug;?>"><a href="<?php echo $catb_link?>"><?php echo $catb->name?></a></li>
					<?php $catc = get_term('6', 'category'); $catc_link = get_category_link(6);?>
					<li class="clr-<?php echo $catc->slug;?>"><a href="<?php echo $catc_link?>"><?php echo $catc->name?></a></li>
					<?php $catd = get_term('7', 'category'); $catd_link = get_category_link(7);?>
					<li class="clr-<?php echo $catd->slug;?>"><a href="<?php echo $catd_link?>"><?php echo $catd->name?></a></li>
					<?php $cate = get_term('8', 'category'); $cate_link = get_category_link(8);?>
					<li class="clr-<?php echo $cate->slug;?>"><a href="<?php echo $cate_link?>"><?php echo $cate->name?></a></li>
				</ul>
			</div>
			
				<div class="noticias col-md-4">
			
			<?php $noticias = get_posts(array('numberposts' => '3'))?>
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
							<p><?php echo substr($noticia->post_content , 0 , 90)?>...</p>
							
							
						</div>
					</div>				
				</div>
			<?php endforeach;?>
			
			</div>
			</div>
			
			
		</div>
	</div>
</div>

<div class="separator"></div>

<div id="somos">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-7 cols">
				<h1>¿Por qué nace la fundación?</h1>
				<p><?php echo get_field('por_que_nace' , 9)?></p>
				<a href="<?php echo get_page_link(9)?>" class="btn btn-success">Saber más</a>
			</div>
		</div>
	</div>
</div>




<?php get_footer()?>