<?php
/*
Template Name: Pagina Aggr Portfolio
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
        <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" /></div>
        <div class="tria"><img src="<?php echo get_template_directory_uri(); ?>/img/tria.png" /></div>
        <div class="cir"><img src="<?php echo get_template_directory_uri(); ?>/img/cir.png" /></div>
        <div class="plu"><img src="<?php echo get_template_directory_uri(); ?>/img/plu.png" /></div>

        <div class="flexy">
            <div class="hl">
                <div class="hl-int">
                    <h1 class="titoletto red">Portfolio</h1>
                    <p class="titolone">Alcuni dei nostri lavori migliori</p>
                </div>
            </div>

            <div class="hr">
                <div class="filters-column">
                    <h3 class="testo-intro">Filtra per categoria:</h3>

                    <div>
                        <ul class="serv-correlati link-skills">
                            <?php if(isset($_GET['macroSez'])): ?>

                            <li <?php if($_GET['macroSez']==1): echo 'class="activePort"'; endif; ?>><a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Branding</a></li>
                            <li <?php if($_GET['macroSez']==2): echo 'class="activePort"'; endif; ?>><a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Web Solutions</a></li>
                            <li <?php if($_GET['macroSez']==0): echo 'class="activePort"'; endif; ?>><a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Offline Communication</a></li>
							<li><a href="<?php echo site_url(); ?>/portfolio/">Tutti i lavori</a></li>
                            <?php else: ?>

                            <li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Branding</a></li>
                            <li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Web Solutions</a></li>
                            <li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Offline Communication</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- <div class="filters-column">
                    <?php 
						$_microSezlabel = "";
						
						if(isset($_GET['macroSez'])){
							$_microSezlabel = '<div class="titPort"><h3 class="testo-intro">Scegli un servizio specifico</h3>
							</div>
							<div>
								<ul class="serv-correlati link-skills">';
							//mostro tutti i servizi correlati a quella macrosezione
							$args = array(
							 'posts_per_page'	=> -1,
							 'post_type' => 'servizio',
								'order' => 'ASC',
							 'orderby' => 'title',
							 'post_status' => 'publish',
							 'meta_query'	=> array(
								 'relation'		=> 'AND',
								 array(
									 'key'		=> 'macro_area_servizio',
									 'value'		=> $_GET['macroSez'],
									 'compare'	=> '=' )
									),
									
								 );
								 $the_query = new WP_Query( $args );
								 //print_r($the_query);
			 					//echo "<br/><br/><br/>Last SQL-Query: {$the_query->request}<br/><br/>";
			 					wp_reset_query();
			 					wp_reset_postdata();
								if( $the_query->have_posts() ):
									if(isset($_GET['macroSez'])):
										while( $the_query->have_posts() ) : $the_query->the_post();
											$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.get_the_id().'">'.get_the_title().'</a></li>';
										 endwhile;
									endif;
								endif;
								$_microSezlabel .= '</ul>
							</div>';
								if(isset($_GET['microSez'])){
									$args = array(
									 'posts_per_page'	=> -1,
									 'post_type' => 'portfolio',
										'order' => 'DESC',
									 'orderby' => 'date',
									 'post_status' => 'publish',
									 'meta_query'	=> array(
				 			       'relation'		=> 'AND',
				 			       array(
				 			         'key'		=> 'servizio_associato',
				 			         'value'		=> $_GET['microSez'],
				 			         'compare'	=> 'LIKE' )
				 			     		),
											
										 );
									 }else{
										$args = array(
										 'posts_per_page'	=> -1,
										 'post_type' => 'portfolio',
										 'order' => 'DESC',
										 'orderby' => 'date',
										 'post_status' => 'publish',
										 'meta_query'	=> array(
											 'relation'		=> 'AND',
											 array(
												 'key'		=> 'categoria_lavoro',
												 'value'		=> $_GET['macroSez'],
												 'compare'	=> '=' )
												),);
											}
											echo $_microSezlabel;
								}else{
									//echo 'no get';
									//print_r($_GET);
									$args = array(
									 'posts_per_page'	=> -1,
									 'post_type' => 'portfolio',
									 'order' => 'DESC',
									 'orderby' => 'date',
									 'post_status' => 'publish',
										);
								}
								
								
								

								//print_r($args);
								$the_query = new WP_Query( $args );
								//echo "<br/><br/><br/>Last SQL-Query: {$the_query->request}<br/><br/>";
								wp_reset_query();
								wp_reset_postdata();
						
						 ?>


                </div> -->
                <!--filters column-->










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
										 <img src="'.get_the_post_thumbnail_url().'" alt="'.esc_attr($image['alt']).'" />
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