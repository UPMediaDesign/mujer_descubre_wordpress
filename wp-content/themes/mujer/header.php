<!doctype html>
<html lang="es">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<title>
    <?php if (is_front_page() ) { ?><?php bloginfo('name'); ?> · <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> · Archivo por autor<?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> · <?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> · <?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> · Archivo por Categoria · <?php single_cat_title(); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> · Archivo por Mes | <?php the_time('F'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> · Resultados<?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> · Archivo por Tag · <?php  single_tag_title("", true); } } ?>
</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.highlight.js"></script>
<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--BOOTSTRAP-->
 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/jstyle.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/superslides.css">

<!-- FontAwesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxSlider CSS file -->
<script src="<?php bloginfo('template_directory'); ?>/js/bxslider.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
    <!--[if lte IE 8]>
    <style>
        /* Rotation of the arrow element for IE < 9 */
        .next-icon { /* IE Matrix Calculator - http: //www.boogdesign.com/examples/transforms/matrix-calculator.html */;
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.70710678, M12=-0.70710678, M21=0.70710678, M22=0.70710678,sizingMethod='auto expand')";
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.70710678, M12=-0.70710678, M21=0.70710678, M22=0.70710678,sizingMethod='auto expand');
        }
    </style>
    <![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/superslides.js"></script>


<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

<!--FACEBOOK OG-->

<?php //if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<!-- the default values -->

<!-- if page is content page -->
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

<!-- if page is others -->
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-iram.png" /> <?php } ?>


<?php if(is_page(158)){?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5&appId=692872517452883";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php }?>
<!-- LOADER -->
<script type="text/javascript">
jQuery(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

</head>


<body class="grey">

  <div class="loader"></div>
  <!-- Inicio Loader -->
  <style type="text/css">
    .loader{ height:100%; width:100%; position:fixed; top:0; right:0; left:0; right:0; background-image:url(<?php bloginfo('template_directory')?>/images/loader.gif); background-repeat: no-repeat; background-position: center 50%; background-color:#fff; z-index:999999999999999999;}
  </style>
  <!-- Fin Loader -->

      <header class="overhead pd0">
        <div class="container-fluid header">

          <div class="logo">
                  <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/mujerlogo_.png" /></a>
          </div>

          <div class="logo-banmedica">
            <a href="http://www.fundacionbanmedica.cl" title="Fundación Banmédica" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-whitehigh.png"></a>
          </div>

          <div class="container-fluid">
                <div class="navbar-header">
                  <button class="navbar-toggle collapsed btn-lg icon-bar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

          </div>

          <nav class="nav navbar-collapse bs-navbar-collapse collapse initial-nav" role="navigation" id="menu" style="height: 1px;">
                <?php /* Primary navigation */
                    wp_nav_menu( array(
                    'menu' => 'top_menu',
                    'depth' => 1,
                    'container' => false,
                    'menu_class' => 'nav col-md-8',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
                    );
                ?>
          </nav>

        </div>
      </header>