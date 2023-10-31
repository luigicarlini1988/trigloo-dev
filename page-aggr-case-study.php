<?php
/*
Template Name: Pagina Aggr Case Study
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
 get_header();
 $detect = new Mobile_Detect;
  ?>
  <?php get_template_part( 'includeLayout/postHead' ); ?>
  <?php get_template_part( 'includeLayout/sidebar' ); ?>
	<div id="header-servizi" class="portfolio-int">
		<div class="cent-contenitore">
				<div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
				<div class="tria"><img src="<?php echo get_template_directory_uri(); ?>/img/tria.png"/></div>
				<div class="cir"><img src="<?php echo get_template_directory_uri(); ?>/img/cir.png"/></div>
				<div class="plu"><img src="<?php echo get_template_directory_uri(); ?>/img/plu.png"/></div>

				<div class="flexy">
					<div class="hl">
						<div class="hl-int">
							<h1 class="titoletto red">Case Studies</h1>
							<p class="titolone">Alcuni dei nostri casi di successo</p>
						</div>
					</div>

					<div class="hr">
						<p class="testo-intro"><?php $my_id = 583;
$post_id = get_post($my_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
echo $content; ?></p>

            <?php
            $args = array(
             'posts_per_page'	=> -1,
             'post_type' => 'case-study',
              'order' => 'ASC',
             'orderby' => 'title',
             'post_status' => 'publish',
              );
              $the_query = new WP_Query( $args );
              wp_reset_query();
              wp_reset_postdata();
            ?>

					</div>
				</div>
		</div>
	</div>
	<div id="sezione-lavori-corr" class="portfolio-int">

	 <div class="cent-contenitore">


		 <?php
		 $_c = 1;
			 if( $the_query->have_posts() ):
					 while( $the_query->have_posts() ) : $the_query->the_post();

					 if($_c==1):
						 echo '<div class="portfolio-short-banda flexy">';
					endif;
							$_lID = get_the_ID();
								//$image = get_field('immagine_mobile_porfolio',$_lID);
							echo '<div class="ps-thumb">
							 <a href="'.get_permalink().'" title="'.get_the_title().'">
								 <div class="ps-thumb-img aja">
									 <div class="persp">
										 <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" />
									 </div>
								 </div>
							 </a>
								 <div class="ps-thumb-text">
										 <p class="tito">'.get_the_title().'</p>
								 </div>
						 </div>';
							//echo $the_query1->current_post;
							if($_c===2 || $the_query->post_count == $the_query->current_post+1):
								echo "</div>";
								$_c = 1 ;
							else:
								$_c++;
							endif;

						endwhile;
			 endif;
			 ?>



	 </div>

 </div>


	  <?php get_template_part( 'includeLayout/cta-red' ); ?>
		<?php get_footer();
		unset($detect); ?>
