<?php  get_header();
 $detect = new Mobile_Detect;
 ?>
 <?php get_template_part( 'includeLayout/postHead' ); ?>
 <?php get_template_part( 'includeLayout/sidebar' ); ?>
 <?php

// Start the Loop.
while ( have_posts() ) :
	the_post();
	?>
 <div id="header-home" class="qzq">
	 <div class="cent-contenitore">
		 <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
		 <div class="titlePage"><?php echo get_the_title(); ?></h1></div>
		 </div>
		 <div class="cent-contenitore"><div class="pageT"><?php the_content(); ?></div></div>
		

		</div>
 </div>
<?php
endwhile; // End the loop.
?>





	<?php 
	
	
	
	
	?>
	<?php get_footer();
	unset($detect);  ?>