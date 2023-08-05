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

				 <?php unset ($Cliente);

		 endwhile; // end of the loop. ?>
				 <?php get_template_part( 'includeLayout/cta-red' ); ?>
<?php get_footer();
unset($detect); ?>
