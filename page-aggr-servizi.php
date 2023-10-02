<?php
/*
Template Name: Pagina Aggr Servizi
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
	<div id="header-servizi">
		<div class="cent-contenitore">
				<div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
				<div class="tria"><img src="<?php echo get_template_directory_uri(); ?>/img/tria.png"/></div>
				<div class="cir"><img src="<?php echo get_template_directory_uri(); ?>/img/cir.png"/></div>
				<div class="plu"><img src="<?php echo get_template_directory_uri(); ?>/img/plu.png"/></div>
	
				<div class="flexy">
					<div class="hl">
						<div class="hl-int">
							<p class="titoletto red">L’offerta di TRIGLOO ® (what we do)</p>
							<p class="titolone">Una pluralità di servizi integrati fra loro</p>
						</div>
					</div>
	
					<div class="hr">
						<p class="testo-intro"><?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content(); 
        } // end while
    } // end if
?></p>
					</div>
				</div>
		</div>
	</div>
	
	<div id="foto-servizi">
		<div id="cont-fotoservizi">
			<img src="<?php echo get_template_directory_uri(); ?>/img/header_1980x959-servizi_2.jpg" alt="servizi Trigloo"/>
		</div>
	</div>
	
	<div id="section-servizi" class="b-red">
		<div class="cent-contenitore">
				<div class="ss-banda flexy"><!--striscia servizio-->
					<p class="giga light">What we do</p>
					<div class="ss1">
						<div class="divisorio">
								<div class="iconcina">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tri-s.png"/>
								</div>
								<div class="lineetta white"></div>
						</div>
	
						<h2 class="titolos white">Branding</h2>
						<?php $_cont = get_fields(); ?>
						<span class="white"><?php echo $_cont['branding_serv']; ?></span>
					</div>
	
					<div class="ss2">
						<div class="link-skills">
							<?php echo listServizi(1); ?>
					</div>
	
				</div>
			</div><!-- fine striscia servizio-->

				<div class="ss-banda flexy"><!--striscia servizio-->
							<p class="giga light">What we do</p>
							<div class="ss1">
								<div class="divisorio">
										<div class="iconcina">
										<img src="<?php echo get_template_directory_uri(); ?>/img/cir-s.png"/>
										</div>
										<div class="lineetta white"></div>
								</div>
	
								<h2 class="titolos white">Web</br>Solutions</h2>
								<span class="white"><?php echo $_cont['online_serv']; ?></span>
							</div>
	
							<div class="ss2">
								<div class="link-skills">
									<?php echo listServizi(2); ?>
							</div>
	
						</div>
					</div><!-- fine striscia servizio-->
	
					<div class="ss-banda flexy"><!--striscia servizio-->
						<p class="giga r light">What we do</p>
						<div class="ss1">
							<div class="divisorio">
									<div class="iconcina">
									<img src="<?php echo get_template_directory_uri(); ?>/img/plu-s.png"/>
									</div>
									<div class="lineetta white"></div>
							</div>
	
							<h2 class="titolos white">Offline</br>Communication</h2>
							<span class="white"><?php echo $_cont['offline_serv']; ?></span>
						</div>
	
						<div class="ss2">
							<div class="link-skills">
								<?php echo listServizi(0); ?>
						</div>
	
					</div>
				</div><!-- fine striscia servizio-->
	
				
		</div>
	</div><!-- fine section servizi-->

			
  <?php get_template_part( 'includeLayout/cta-white' ); ?>
	<?php get_footer();
	unset($detect); ?>
