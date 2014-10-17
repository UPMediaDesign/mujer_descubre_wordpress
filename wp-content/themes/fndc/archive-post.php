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
				<h1><?php echo $var->name?></h1>
				<p><?php echo $var->description?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>

<?php if($type=='mujer-descubre-tus-piernas'){?>
<div id="insidemenu" class="clr-mujer-descubre-tus-piernas" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Mujer descubre tus piernas' , 'container' => 'none' , 'menu_id' =>  'mujer-descubre-tus-piernas' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }elseif($type=='vive-sano'){?>
<div id="insidemenu" class="clr-vive-sano" style="margin-top:-45px;">
	<div class="container">
		<div class="row">			
			<?php $menu = get_field('menu_inside_selector')?>
			<?php wp_nav_menu( array('menu' => 'Vive sano' , 'container' => 'none' , 'menu_id' =>  'vive-sano' , 'menu_class' => 'menu-insider desktop'));?>
		</div>
	</div>
</div>
<?php }?>


<div id="undermain" style="background-image:url(<?php echo get_field('superbackground_b' , $post->ID)?>) ; <?php if($type !='mujer-descubre-tus-piernas' && $type != 'vive-sano'){ echo 'margin-top: -42px;';}?>">

	
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<h1>Noticias</h1>
			<div class="noticias row desktop">
			
			<?php $noticias = get_posts(array('numberposts' => '10' , $tipo => $typoID ))?>
			<?php $count = 0;?>
			<?php foreach ($noticias as $noticia):?>
			
				<div class="mini-noticia noticia n0<?php echo $count+3?> <?php if($count % 2 == 0 ){echo 'nomargin';}?>">
					
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
						<div class="sheart  nt clr-<?php echo $catss[0]->slug?>"><span class="fa fa-heart fa-fw"></span></div>
						<div class="sfb nt clr-<?php echo $catss[0]->slug?>"><span class="fa fa-facebook fa-fw"></span></div>
						<div class="stw nt clr-<?php echo $catss[0]->slug?>"><span class="fa fa-twitter fa-fw"></span></div>
					</div>
					
				</div>
				<?php $count++?>
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
			</script>
			
				</div>
				
				
				
				
			<div class="formobile">
			<h2><span class="fa fa-chevron-right fa-fw"></span> Noticias destacadas</h2>
				<div class="noticias col-md-4">
				
				
			
				<?php $noticias = get_posts(array('numberposts' => '10' , $tipo => $typoID ))?>
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
				
				
				<div class="clear separator"></div>
				
			</div>
			
			<div class="col-md-4 sidebar">
				<div class="separator"></div>
				<h3>Otros temas que te pueden interesar</h3>
				<div class="selector-categorias">
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
						<?php $cate = get_term('16', 'category'); $cate_link = get_category_link(16);?>
						<li class="clr-<?php echo $cate->slug;?>"><a href="<?php echo $cate_link?>"><?php echo $cate->name?></a></li>
					</ul>
				</div>
				<div class="separator"></div>
			</div>
			
			</div>
		</div>
	</div>
</div>



<?php get_footer()?>