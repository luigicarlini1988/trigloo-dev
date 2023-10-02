<?php
/*
Template Name: Pagina Generica con CTA
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
			<div class="full">
				
					<h1 class="titolone"><?php the_title() ?></h1>
				
			</div>
		</div>
	</div>
	<div class="content-generic">
		<div class="cent-contenitore">
		<p class="testo-intro"><?php the_content() ?></p>
		</div>
	</div>	

	<?php
		endwhile;
		?>

	<?php get_template_part( 'includeLayout/cta-red' ); ?>
	<?php get_footer();
	unset($detect);  ?>
