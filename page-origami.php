<?php
/*
Template Name: Pagina Origami
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package html5blank
 */

 ?>

<?php  get_header();
 $detect = new Mobile_Detect;
 ?>
 <?php get_template_part( 'includeLayout/postHead' ); ?>
 <?php get_template_part( 'includeLayout/sidebar' ); ?>
 
 <?php while ( have_posts() ) :
	the_post();
	?>
	<div class="header-generic">
		<div class="cent-contenitore">
			<div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
			<div class="full origami">
				
					<h1 class="titolone"><?php the_title() ?></h1>
					<div class="titolino"><?php the_content() ?></div>
				
			</div>
		</div>
	</div>
	<div class="content-generic origami">


		<div class="cent-contenitore new-flex">
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/1.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/2.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/3.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/4.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/5.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/6.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/7.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/8.jpg" />
			<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/9.jpg" />
			<div class="last-origami">
				<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/10.jpg" />
 			</div>
			 <div class="last-origami">
				<img class="origami" src="<?php echo get_template_directory_uri(); ?>/img/origami/doapenguin-copia.jpg" />
 			</div>	
		</div>
	</div>	

	<?php
		endwhile;
		?>

	<?php //get_template_part( 'includeLayout/cta-red' ); ?>
	<?php get_footer();
	unset($detect);  ?>
