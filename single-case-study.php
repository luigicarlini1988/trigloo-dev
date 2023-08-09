<?php
/**
 * The template for displaying all single cliente.
 *
 * @package html5blank
 */

 get_header();
 $detect = new Mobile_Detect;
  ?>
  <?php get_template_part( 'includeLayout/postHead' ); ?>
  <?php get_template_part( 'includeLayout/sidebar' ); ?>
		 <?php while ( have_posts() ) : the_post();
    $Cliente = new Cliente(get_the_id());

      ?>
	<div id="header-servizio-espolso" class="cliente">
			<div class="cent-contenitore">
					<div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
					<div class="flexy">
						<div class="hl">
							<div class="hl-int">
								<p class="titoletto red">Case Study</p>
                <?php the_title( '<h1 class="titolone">', '</h1>');  ?>
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
      <?php the_title( '<p class="giga white cliente">', '</p>');  ?>
		</span>
</div><!-- chiuso header servizio esploso-->


	<div id="section-cliente">
		<div class="cent-contenitore">
					<div class="ss-banda sec flexy">

						<div class="quarter">
							<?php /* ?><div class="client-info1">
										<p class="titoletto red">Settore merceologico</p>
										<p class="settore"><?php echo $Cliente->settore(); ?> </p>
							</div>
	               <?php */ ?>
							<div class="client-info2">
								<p class="titoletto red">Servizi Svolti</p>
								<ul class="serv-correlati link-skills">
                  <?php serviziRelazione(get_the_id()); ?>
								</ul>
							</div>
              <?php if($Cliente->sitoCliente()!=""): ?>
							<div class="client-info3">
								<p class="titoletto red">Sito Cliente</p>
								<ul class="serv-correlati link-skills">
									<li><?php echo $Cliente->sitoCliente(); ?></li>
								</ul>
							</div>
            <?php endif; ?>
						</div>

						<div class="centerello">
              <?php if($Cliente->titolino()):
                echo '<p class="titolino">'.$Cliente->titolino().'</p>';
              endif; ?>
							<p><?php the_content(); ?></p>
						</div>
					</div>

				</div>
	</div><!-- fine section servizi-->


	<div id="sezione-lavori-corr">
		<div class="cent-contenitore">
			<div class="divisorio">
					<div class="iconcina red">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png"/>
					</div>
					<div class="lineetta b-red"></div>
			</div>

			<div class="fifty">
				<p class="titolo">Per <?php echo $Cliente->nomeCliente(); ?> abbiamo realizzato:</p>
			</div>
      <?php lavoriRelazioneFika(get_the_id()); ?>
		</div>

	</div>




	<?php 
            $args = array(
             'posts_per_page'	=> 3,
             'post_type' => 'case-study',
              'order' => 'ASC',
             'orderby' => 'title',
             'post_status' => 'publish',
			 'post__not_in' => array(get_the_id()),
              );
              $the_query = new WP_Query( $args );

            
			  if( $the_query->have_posts() ): ?>
				
				<div id="pre-portfolio">
    <div class="cent-contenitore">
        <div class="divisorio">
            <div class="iconcina red">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
            </div>
            <div class="lineetta b-red"></div>
        </div>

        <div class="fifty">
            <p class="titolo">Ulteriori Case Studies di successo</p>
        </div>

        <div class="flexy">
            <div class="fifty">
                <p>In TRIGLOO® abbiamo maturato esperienza in una vasta gamma di settori e creiamo soluzioni mirate che rispondono alle esigenze specifiche del mercato di riferimento e a seconda di quello che sia l’obbiettivo del Cliente<br /></p>
            </div>
            <div class="fifty">
                <p>Lavoriamo a stretto contatto con i Clienti, condividendo idee e feedback in ogni fase per raggiungere obiettivi comuni e il raggiungimento del posizionamento voluto.</p>
            </div>
        </div>

        <div class="fifty">
            <div class="small-cta">
                <a class="butun" href="<?php echo site_url(); ?>/case-studies/">Esplora tutti i case studies</a>
            </div>
        </div>

    </div><!-- chiude centratore-->

    <div class="cent-contenitore">
        <div id="cases" class="thumb-piccoli">
            

            <?php while( $the_query->have_posts() ) : $the_query->the_post();
                setup_postdata($post); ?>

                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb-piccolo">
                        <div class="tp-im-cut">
                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium_large');?>
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />
                        </div>
                        <p class="titolicchio"><?php the_title(); ?></p>
                        </div>
                    </a>
              
            <?php endwhile; ?>
            
                  
            <?php wp_reset_query();
			wp_reset_postdata(); ?>
        </div>
    </div>
	</div>
    <?php endif; ?> 
	

				 <?php unset ($Cliente);

		 endwhile; // end of the loop. ?>
				 <?php get_template_part( 'includeLayout/cta-red' ); ?>
<?php get_footer();
unset($detect); ?>
