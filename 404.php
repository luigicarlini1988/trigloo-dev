<?php  get_header();
 $detect = new Mobile_Detect;
 ?>
 <?php get_template_part( 'includeLayout/postHead' ); ?>
 <?php get_template_part( 'includeLayout/sidebar' ); ?>
 <div id="header-home" class="qzq">
	 <div class="cent-contenitore">
		 <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
		 <div class="hl">
			 <div class="hl-int">
				 <p class="titoletto red">Ooooops</p>
				 <p class="titolone">Il contenuto richiesto non è disponibile...</p>
				 <p class="testo-intro">Ma fortunatamente ne abbiamo molti altri estremamente interessanti!</p>
			 </div>
		 </div>

		 <div id="trigloo-anima" class="qzq">
			 <div id="quat">404</div>
			 <div id="quabis">404</div>
			 <div id="scroll-d">
				 <p><span class="text">scroll down</span></p>
			 </div>
		 </div>

		 <div class="qzq-cta">
				 <div class="small-cta">
					 <a class="butun" href="<?php echo get_permalink(13); ?>">Guarda tutti i lavori</a>
				 </div>
		 </div>


	 </div>
 </div>

	<?php //get_template_part( 'includeLayout/cta-red' ); ?>
	<?php get_footer();
	unset($detect);  ?>
