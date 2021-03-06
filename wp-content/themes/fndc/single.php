<?php get_header()?>

<div id="undermain">
	<div class="container">
		<div class="row">
			<?php if(has_post_thumbnail()){?>
			<div class="superimage"><?php echo get_the_post_thumbnail($post->ID , 'full') ?></div>
			<?php }else{
				echo '<div class="clear separator"></div><div class="clear separator"></div>';	
			}?>
			<div class="col-md-8">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title()?></h1>
						<?php echo apply_filters('the_content', get_the_content())?>
					<?php endwhile; else: ?>
					Sorry, no posts matched your criteria.
					<?php endif; ?>
					
				
				<div class="clear separator border"></div>
					
				<div class="sharebox row">
					<div class="col-md-4 col-xs-4 facebook">
						<div class="fb-like" data-href="<?php the_permalink()?>" data-width="100%" data-ref="<?php bloginfo('url')?>" ref="<?php bloginfo('url')?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>
					<div class="col-md-4 col-xs-4 column-last twitter">
						<a href="https://twitter.com/intent/tweet?button_hashtag=Fundacion&nbsp;Banm&eacute;dica&text=<?php echo get_the_title()?>"  class="twitter-hashtag-button" data-via="FundacionBanmedica" data-url="<?php the_permalink()?>" data-lang="es" data-related="jasoncosta">Tweet #Fundación Banmédica</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>						
					</div>
				</div>
				
				<div class="clear separator border"></div>
				
				
				<div class="comments">
					<h3>Comentarios</h3>
					<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5" data-width="100%" width="100%" data-colorscheme="light"></div>
				</div>
				
				</div>
			</div>
			<?php wp_reset_query()?>
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
					</ul>
				</div>
				
				<div class="separator"></div>
				
				
			</div>
			
		</div>
	</div>
</div>

<?php get_footer()?>