<div id="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3">
				<img src="<?php bloginfo('template_directory')?>/images/logo-footer.png" alt="" />
				<div class="info">
					Avenida Apoquindo 3600, piso 12<br />
					Teléfono (56-2) 353 3300<br />
					Email: info@fundacionbanmedica.cl<br />
					<br />
					Todos los derechos reservado<br />
					Fundación Banmedica ©2014<br />
				</div>
			</div>
			<div class="col-md-4">
				<h1>Website</h1>
				<div id="footermenu">
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'topmenu' , 'theme_location' => 'third' ) );?>
				</div>
			</div>
			<div class="col-md-5">
				<h1>Suscríbete al newsletter</h1>
				<?php echo do_shortcode('[contact-form-7 id="54" title="Suscripcion Newsletter"]')?>
			</div>
		</div>
	</div>
</div>

<div class="separator"></div>
<div class="separator"></div>

</body>
<?php wp_footer()?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2878760-28', 'auto');
  ga('send', 'pageview');

</script>
</html>
