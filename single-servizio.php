<?php
/**
 * The template for displaying all single servizio.
 *
 * @package html5blank
 */
 get_header();
 $detect = new Mobile_Detect;
  ?>
  <?php get_template_part( 'includeLayout/postHead' ); ?>
  <?php get_template_part( 'includeLayout/sidebar' ); ?>
				<?php while ( have_posts() ) : the_post(); 
				$Servizio = new Servizio(get_the_id());
				?>
					<div id="header-servizio-espolso">
		          <div class="cent-contenitore">
		              <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
		              <div class="flexy">
		                <div class="hl">
		                  <div class="hl-int">
		                    <p class="titoletto red">I Nostri Servizi</p>
												<h1 class="titolone"><?php echo get_the_title(); ?></h1>
		                  </div>
		                </div>
		                <div class="hr">
		                  <div id="scroll-d">
		                    <p><span class="text">scroll down</span></p>
		                  </div>
		                  <div class="hr-imm-cont">
		                    <?php echo get_the_post_thumbnail( get_the_id(), 'full' ); ?>
		                  </div>
		              </div>
		          </div>
		        </div>
		        <span class="outer-giga">
							<p class="giga white">Servizio</p>    
		        </span>
		    </div><!-- chiuso header servizio esploso-->
				<div id="section-servizio-esploso" class="b-grey">
					<div class="cent-contenitore">
							<div class="ss-banda flexy">
										<div class="ss1">
											<div class="divisorio">
													<div class="iconcina">
														<img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png"/>
													</div>
													<div class="lineetta"></div>
											</div>
											<p class="titolino"><?php echo $Servizio->titoletto(); ?></p>
											<p class="scatena"><?php echo $Servizio->sottoTitolo(); ?></p>
										</div>
										<?php echo $Servizio->task(); ?>
									</div>
								<div class="ss-banda sec flexy">
									<div class="quarter">
										<div class="divisorio">
												<div class="iconcina">
													<img src="<?php echo get_template_directory_uri(); ?>/img/tools.png"/>
												</div>
												<div class="lineetta"></div>
										</div>
										<p class="titoletto">Servizi Correlati</p>
										<ul class="serv-correlati link-skills">
											<?php echo relazioneServizio(get_the_id()); ?>
										</ul>
									</div>
									<div class="three-quarter">
										<p><?php the_content(); ?></p>
									</div>
								</div>
							</div>
				</div><!-- fine section servizi-->
        <?php if(lavoriRelazioneServizio(get_the_id())!=""): ?>
        <div id="sezione-lavori-corr">
          <div class="cent-contenitore">
            <div class="divisorio">
                <div class="iconcina red">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png"/>
                </div>
                <div class="lineetta b-red"></div>
            </div>
            <div class="fifty">
              <p class="titolo">Ultimi Lavori di <?php echo $Servizio->nomeServizio(); ?></p>
            </div>
              <div class="portfolio-short-banda flexy">
              <?php echo lavoriRelazioneServizio(get_the_id()); ?>
            </div>
          
          </div>
        </div>
        <?php endif; ?>
				<?php unset ($Servizio);
			endwhile; // end of the loop. ?>
				  <?php get_template_part( 'includeLayout/cta-red' ); ?>
<?php get_footer();
unset($detect); ?>
