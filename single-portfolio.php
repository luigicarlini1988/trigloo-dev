<?php
/**
 * The template for displaying all single lavoro portfolio.
 *
 * @package html5blank
 */

 get_header();
 $detect = new Mobile_Detect;
  ?>
<?php get_template_part( 'includeLayout/postHead' ); ?>
<?php get_template_part( 'includeLayout/sidebar' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="header-servizio-espolso" class="cliente">
    <div class="cent-contenitore">
        <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" /></div>
        <div class="flexy">
            <div class="hl">
                <div class="hl-int">
                    <p class="titoletto red">Portfolio</p>
                    <?php the_title( '<h1 class="titolone">', '</h1>' ); ?>
                </div>
            </div>

            <div class="hr">
                <div id="scroll-d">
                    <p><span class="text">scroll down</span></p>
                </div>

                <div class="hr-imm-cont">
                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                </div>
            </div>
        </div>
    </div>
    <span class="outer-giga">
        <p class="giga white cliente">CaseHistory</p>
    </span>
</div><!-- chiuso header servizio esploso-->
<div id="section-cliente">
    <div class="cent-contenitore">
        <div class="ss-banda sec flexy">

            <div class="quarter">
                <?php
              $Portfolio = new Portfolio($post->ID);
              $Servizio = new Servizio($Portfolio->idServizioAssociato());

              $_id_singolo_cliente = $Portfolio->idClienti();
              if($_id_singolo_cliente!=false):
                $Cliente = new Cliente($_id_singolo_cliente);
                //echo $_id_singolo_cliente;
                echo '<div class="client-info1">
                  <p class="titoletto red">Case Study</p>
                  <ul class="serv-correlati link-skills">
                    <li>'.$Cliente->linkNomeCliente().'</li>
                  </ul>
                </div>';
                //unset ($Cliente);
              endif;
               ?>
                <div class="client-info2">
                    <p class="titoletto red">Servizio Svolto</p>
                    <ul class="serv-correlati link-skills">
                        <?php
											 ?>
                        <li><?php echo $Servizio->linkNomeServizio(); ?></li>
                    </ul>
                </div>

                <?php if($Portfolio->lavoriCorrelati('<li>','</li>','si')!=""): ?>
                <div class="client-info2">
                    <p class="titoletto red">Lavori Correlati per <?php //echo $Cliente->nomeCliente(); ?></p>
                    <ul class="serv-correlati link-skills">
                        <?php echo $Portfolio->lavoriCorrelati('<li>','</li>','si'); ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->serviziCorrelati('<li>','</li>','si')!=""): ?>
                <div class="client-info3">
                    <p class="titoletto red">Interventi Sinergici Ideali</p>
                    <ul class="serv-correlati link-skills">
                        <?php echo $Portfolio->serviziCorrelati('<li>','</li>','si'); ?>
                    </ul>
                </div>
                <?php endif; ?>

            </div>

            <div class="centerello">
                <?php echo $Portfolio->content('<p class="titolino">','</p>','titolo_sotto_descrizione_portofolio'); ?>
                <?php echo $Portfolio->content('<p>','</p>','sotto_descrizione_portofolio'); ?>
                <strong>Anche questo è Trigloo®</strong>
            </div>
        </div>

    </div>
</div><!-- fine section cliente-->

<?php if( get_field('immagine_parallasse_portfolio') ): ?>
<div id="immaginona-parallasse">
    <?php echo $Portfolio->imgParallasse("parallala"); ?>
</div>
<?php endif; ?>

<?php if( !get_field('immagine_parallasse_portfolio') ): ?>
<div style="width:100%; height:100px"></div>
<?php endif; ?>


<div id="lavoro-extra-info">
    <div class="cent-contenitore">

        <?php echo $Portfolio->imgExtra("immagine_larghezza_massima_1_portfolio"); ?>


        <?php
  $_video = $Portfolio->video();

  //print_r($_video);

  if($_video['check']!="no"):
    echo '<div id="video" class="strimmalo">
      '.$_video['iframe'].'
    </div>';
  endif;


  echo $Portfolio->gallery();


  ?>



        <?php
    //echo 'dsadasdas'.$_id_singolo_cliente;

   if(lavoriRelazionePortfolio($_id_singolo_cliente, $post->ID)!=""): ?>
        <div class="lavori-per-cliente">
            <div class="ss-banda flexy">
                <div class="ss1">
                    <div class="divisorio">
                        <div class="iconcina">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
                        </div>
                        <div class="lineetta"></div>
                    </div>

                    <p class="titolino">E non è tutto, per "<?php echo $Cliente->nomeCliente(); ?>" abbiamo realizzato anche:</p>
                </div>
            </div>


            <div class="thumb-piccoli">
                <?php echo lavoriRelazionePortfolio($_id_singolo_cliente, $post->ID); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div> <!-- chiude lavoro extra info -->



<?php /*
  <div id="immaginona-parallasse">
    <?php echo $Portfolio->imgParallasse("parallala"); ?>
</div>
<div id="lavoro-extra-info">
    <div class="cent-contenitore">
        <?php echo $Portfolio->imgExtra("immagine_larghezza_massima_1_portfolio"); ?>

        <div class="ss-banda sec flexy">
            <?php if($Portfolio->serviziCorrelati('<li>','</li>','si')!=""): ?>
            <div class="quarter">
                <div class="divisorio">
                    <div class="iconcina">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tools.png" />
                    </div>
                    <div class="lineetta"></div>
                </div>
                <p class="titoletto">Servizi Correlati</p>
                <ul class="serv-correlati link-skills">
                    <?php echo $Portfolio->serviziCorrelati('<li>','</li>','si'); ?>
                </ul>
            </div>

            <div class="three-quarter">
                <?php
              echo $Portfolio->content('<p class="titolino">','</p>','altro_titolo_sotto_descrizione_portofolio');
              echo $Portfolio->content('<p>','</p>','altra_sotto_descrizione_portofolio');
               ?>
            </div>
            <?php else: ?>
            <?php
          echo $Portfolio->content('<p class="titolino">','</p>','altro_titolo_sotto_descrizione_portofolio');
          echo $Portfolio->content('<p>','</p>','altra_sotto_descrizione_portofolio');
           ?>
            <?php endif; ?>
        </div>

        <?php echo $Portfolio->imgExtra("immagine_larghezza_massima_2_portfolio"); ?>

        <?php echo $Portfolio->imgExtra("immagine_larghezza_massima_3_portfolio"); ?>

        <?php echo $Portfolio->sez3Image(); ?>


        <?php if($Portfolio->content('','','terzo_titolo_sotto_descrizione_portofolio')): ?>
        <div class="testo-extra">
            <div class="ss-banda flexy">
                <div class="ss1">
                    <div class="divisorio">
                        <div class="iconcina">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
                        </div>
                        <div class="lineetta"></div>
                    </div>
                    <p class="titolino"><?php echo $Portfolio->content('<p class="titolino">','</p>','terzo_titolo_sotto_descrizione_portofolio'); ?></p>
                    <p class="scatena"><?php echo $Portfolio->content('<p>','</p>','terza_sotto_descrizione_portofolio'); ?></p>
                </div>
            </div>
        </div>
        <?php  endif; ?>



        <?php
        $_gallery = $Portfolio->gallery();
        if($_gallery != ""): ?>
        <div id="gallery" class="b-red">
            <p class="titolone white">Qui ci sarà la gallery</p>
        </div>
        <?php endif; ?>

        <?php
        $_video = $Portfolio->video();
        if($_video['check']!="no"):
          echo '<div id="video" class="strimmalo">
            <p class="videaolo">'.$_video['iframe'].'</p>
          </div>';
        endif;
        ?>
        */ ?>



        <?php unset ($Cliente);?>


        <?php if(lavoriRelazioneServizioPortf($Portfolio->idServizioAssociato(), $post->ID)!=""): ?>
        <div id="sezione-lavori-corr" class="tcl">
            <div class="cent-contenitore">
                <div class="divisorio">
                    <div class="iconcina red">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
                    </div>
                    <div class="lineetta b-red"></div>
                </div>
                <div class="fifty">
                    <p class="titolo">Guarda altri lavori di <?php echo $Servizio->nomeServizio(); ?></p>
                </div>
                <div class="portfolio-short-banda flexy">
                    <?php echo lavoriRelazioneServizioPortf($Portfolio->idServizioAssociato(), $post->ID); ?>
                </div>

            </div>
        </div>
        <?php endif; ?>

        <?php unset($Servizio);?>
        <?php unset ($Portfolio);
						 ?>


        <?php endwhile; // end of the loop. ?>
        <?php get_template_part( 'includeLayout/cta-red' ); ?>
        <?php get_footer();
				unset($detect); ?>