<?php
/*
Template Name: Alo Doctor c
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
				<p><?php echo $post->post_content?></p>
                            <!--<span class="top-line"></span> -->
                            
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

	

       
        <div class="clear separator"></div>
        <section class="container contactt">
        	<div class="row" style="text-align:center">
            	<div style="height:60px;"></div>
<div class="dedito" style="
    font-size: 100px;
    color: #fff;
	background-color:#3B5998;
    border-radius: 100%;
    border: 1px solid #fff;
    display: inline-block;
    clear: both;
    padding: 10px 20px;
"><span class="fa fa-thumbs-up fa-fw" style="
"></span></div>

       <!--<h2>Gracias por inscribirte</h2>-->
                <div class="line-green"></div>
                

<p>Ahora síguenos en facebook y entérate de todas las novedades que tenemos para ti</p>



<?php if(is_page(158)){?>

<style>
.single-container {
    margin-top: 230px;
}

.beneficiadas {
    height: 400px;
}

</style>

 

<div style="height:20px;"></div>
<div class="clear"></div>
<div class="fb-follow" data-href="https://www.facebook.com/FundacionBanmedica" data-layout="standard" data-show-faces="true"></div>

<?php }?>

                <div style="height:200px;"></div>
             </div>
        </section>   
                
		
        <div class="clear separator"></div>
        
        <section class="suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>¿Tienes Dudas?</h3>
                        <a title="" rel="" href="http://alodoctor.mujerdescubretuspiernas.cl/" >Haz tus consultas al Doctor</a>
                    </div>
                </div>
        </section>
        
        
        
        
       
        <!-- Fin Contenido Varices -->

<?php get_footer(); ?>