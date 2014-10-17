<?php get_header()?>

<?php 
$var = get_queried_object();
$tipo = $var->taxonomy;
$type = $var->slug;
$typoID = $var->term_id;


?>

<div id="bigcarousel" style="background-image:url(<?php bloginfo('url')?>/wp-content/uploads/2014/08/columpio.png);">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 cols">
				<h1>Resultados de búsqueda / <?php echo $_GET['s']?></h1>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>

<div id="undermain">

	
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<div class="clear separator"></div>
			
			<div class="resultados row desktop">
			
			
			<?php $count = 0;?>
			<?php if($posts){?>
			<?php foreach ($posts as $post):?>
			<?php $count++?>
			<li>
				<div class="resultado tip n-0<?php echo $count?>>">
					<span class="numerodetip clr-pack-de-la-vida alignleft"><span class="fa fa-chevron-right"></span></span>
					<a href="<?php echo get_the_permalink($post->ID)?>"><h4><?php echo get_the_title($post->ID)?></h4></a>
				</div>
			</li>
			
			<?php endforeach;?>
			<?php }else{?>
				<h2>No encontramos lo que estabas buscando, favor vuelve a intentarlo o vuelve al inicio</h2>
			<?php }?>	
				</div>
			
			
			<div class="clear separate"></div>
			<?php wp_paginate();?>
			<div class="clear separate"></div>
			
			</div>	
			
			<div class="col-md-4 sidebar">
				
				<h2>Otros temas interesantes</h2>
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