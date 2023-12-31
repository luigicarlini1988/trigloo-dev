<?php
/*
Template Name: Pagina Home
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

<div id="header-home">
    <div class="cent-contenitore">
        <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" /></div>
        <div class="hl">
            <div class="hl-int">
                <p class="titoletto red">Sviluppiamo insieme il Tuo Brand.</p><!-- We are Trigloo<span class="ori">®</span> -->
                <p class="titolone">La tua guida nella Comunicazione Integrata</p>
                <p class="testo-intro">Imprenditori e PMI acquisiscono voce e visibilità. La tua storia e la tua passione sono centrali per noi. Se cerchi un partner creativo e dedicato, sei nel posto giusto. Scegli il servizio TRIGLOO® che vuoi sviluppare o combina le nostre competenze per un approccio integrato.</p>
                <?php
                      if ( have_posts() ) {
                          while ( have_posts() ) {
                              the_post();
                          } // end while
                      } // end if
                  ?>
            </div>
        </div>

        <div id="trigloo-anima">
            <div id="occhio1"></div>
            <div id="occhio2"></div>
            <div id="tondo"></div>
            <div id="scroll-d">
                <p><span class="text">scroll down</span></p>
            </div>
        </div>
    </div>
</div>
<div id="wrap-skill">
    <div class="cent-contenitore">
        <div id="section-skills">
            <div id="skills-schede">

                <?php $_data = get_fields(); ?>

                <div id="skeda1">
                    <div class="divisorio onlyresp">
                        <div class="iconcina red">
                            <p>01</p>
                        </div>
                        <div class="lineetta b-red"></div>
                    </div>
                    <h2 class="tito">Branding</h2>
                    <div id="sk-d1" style="width:100%; height:1px"></div>
                    <div class="onlyresp wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-brand.jpg">
                    </div>
                    <p class="testo">
                        <?php echo $_data['sales_point_setup_home']; ?>
                    </p>

                    <?php echo linkServiziHome(1); ?>
                    <div style="clear:both"></div>
                    <div class="small-cta">
                        <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Scopri di più</a>
                    </div>
                </div>

                <div id="skeda2" class="in">
                    <div class="divisorio onlyresp">
                        <div class="iconcina red">
                            <p>02</p>
                        </div>
                        <div class="lineetta b-red"></div>
                    </div>
                    <h2 class="tito">Web<br />Solution</h2>
                    <div id="sk-d2" style="width:100%; height:1px"></div>
                    <div class="onlyresp wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-websolution.jpg">
                    </div>
                    <p class="testo">
                        <?php echo $_data['online_communication_home']; ?>
                    </p>

                    <?php echo linkServiziHome(2); ?>
                    <div style="clear:both"></div>
                    <div class="small-cta">
                        <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Scopri di più</a>
                    </div>
                </div>

                <div id="skeda3">
                    <div class="divisorio onlyresp">
                        <div class="iconcina red">
                            <p>03</p>
                        </div>
                        <div class="lineetta b-red"></div>
                    </div>
                    <h2 class="tito">Offline<br />Communication</h2>
                    <div id="sk-d3" style="width:100%; height:1px"></div>
                    <div class="onlyresp wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-offline.jpg">
                    </div>
                    <p class="testo">
                        <?php echo $_data['offline_communication_home']; ?>
                    </p>

                    <?php echo linkServiziHome(0); ?>
                    <div style="clear:both"></div>
                    <div class="small-cta">
                        <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Scopri di più</a>
                    </div>
                </div>

            </div>

            <div id="skills-foto">
                <div id="contatore">
                    <div id="numeri">
                        <div id="numeri-ins" class="red">01<br />02<br />03</div>
                    </div>
                </div>
                <!--<p id="giga" class="giga grey">What we do</p>-->

                <div id="sk-foto1" class="in">
                    <a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-brand.jpg" />
                    </a>
                </div>


                <div id="sk-foto2">
                    <a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-websolution.jpg" />
                    </a>
                </div>


                <div id="sk-foto3">
                    <a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/servizi-home-slider-offline.jpg" />
                    </a>
                </div>

            </div>


        </div>



    </div> <!-- chiude contenitore -->
</div><!-- chiude skills -->



<div id="banda-rossa">
    <div class="sfondone"></div>
    <div class="cent-contenitore">
        <div class="divisorio">
            <div class="iconcina">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tr-o-w.png" />
            </div>
            <div class="lineetta white"></div>
        </div>

        <div class="leftore">
            <p class="testone white">Affronti sfide nella comunicazione e nella coerenza del tuo brand? TRIGLOO® è al tuo fianco, offrendo soluzioni integrate e su misura, permettendoti di concentrarti sul tuo business principale.</p>
            <div class="small-cta white">
                <a class="butun" href=" <?php echo get_permalink(211); ?>">Iniziamo il tuo prossimo progetto</a>
            </div>
        </div>
    </div>
</div>

<div id="pre-portfolio">
    <div class="cent-contenitore">
        <div class="divisorio">
            <div class="iconcina red">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
            </div>
            <div class="lineetta b-red"></div>
        </div>

        <div class="fifty">
            <p class="titolo">I Nostri Successi, la Tua Ispirazione.</p>
        </div>

        <div class="flexy">
            <div class="fifty">
                <p>Un assaggio del nostro impegno, del nostro punto di vista e del modo in cui lo facciamo, plasmato sulla visione dei nostri clienti. </p>
            </div>
            <div class="fifty">
                <p>L’attenzione che si deve mettere nei dettagli e la risoluzione delle problematiche fanno di TRIGLOO ® un punto di partenza per molte operazioni di business.</p>
            </div>
        </div>

        <div class="fifty">
            <div class="small-cta">
                <a class="butun" href="<?php echo site_url(); ?>/portfolio/">Curiosa nel nostro Portfolio</a>
            </div>
        </div>

    </div><!-- chiude centratore-->

</div><!-- chiude pre-portfolio-->

<?php
$frontpage_id = get_option( 'page_on_front' );
 $ids = get_field('lavori_correlati_h', $frontpage_id);

 //print_r($ids);
 $query = new WP_Query(array(
  'post_type'      	=> 'portfolio',
  'post__in'			=> $ids,
  'posts_per_page'  => 3,
  'post_status'		=> 'publish',
  'orderby'        	=> 'post__in',
 ));
 wp_reset_postdata();
 if( $query->have_posts() ) :

if( $detect->isMobile() || $detect->isTablet() ):
  echo '<div id="small-portfolio-mobile">
          <div class="cent-contenitore">';
  echo '<div class="portfolio-short-banda flexy">';
  while( $query->have_posts() ) : $query->the_post();
  //$_imgMobile = get_field('immagine_mobile_porfolio');
    echo '<div class="ps-thumb">
      <a href="'.get_permalink().'">
        <div class="ps-thumb-img">
          <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
        </div>
      </a>
      <div class="ps-thumb-text">
        <p class="tito">'.get_the_title().'</p>
      </div>
    </div>';
  endwhile;
  echo '</div>';
 else:
   echo '<div id="small-portfolio">
           <div class="cent-contenitore">';
   $n = 1;
   while( $query->have_posts() ) : $query->the_post();
    //$_imgDK = get_field('immagine_desktop_porfolio');
    if ( $n & 1 ):

    echo '<div class="portfolio-home-section">
      <div class="phs-testo r">
        <p class="tito">'.get_the_title().'</p>
        <p class="testo">'.get_field('titolo_sotto_descrizione_portofolio').'</p>
        
        
        <div class="small-cta r">
          <a class="butun" href="'.get_permalink().'">Approfondisci</a>
        </div>
      </div>
        <div class="phs-imm">
          <div class="persp">
            <a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"/></a>
          </div>
        </div>
      </a>
    </div>';
  else:
      echo '<div class="portfolio-home-section l">
        <div class="phs-imm">
            <div class="persp">
                <a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"/></a>
            </div>
        </div>
        <div class="phs-testo">
          <p class="tito">'.get_the_title().'</p>
          <p class="testo">'.get_field('titolo_sotto_descrizione_portofolio').'</p>
          <div class="small-cta">
            <a class="butun" href="'.get_permalink().'">Approfondisci</a>
          </div>
        </div>
      </div>';
  endif;
  $n++;

  endwhile;
 endif;
 echo '</div>
</div>';
endif;
wp_reset_query();  ?>


<div id="cta-portfolio">
    <div class="small-cta">
        <a class="butun" href="<?php echo site_url(); ?>/portfolio/">Guarda tutti i lavori</a>
    </div>
</div>


<?php $case_home = get_field('case_studies_home');
            if( $case_home ): ?>
<div id="pre-portfolio">
    <div class="cent-contenitore">
        <div class="divisorio">
            <div class="iconcina red">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png" />
            </div>
            <div class="lineetta b-red"></div>
        </div>

        <div class="fifty">
            <p class="titolo">Storie di Collaborazioni Vincenti</p>
        </div>

        <div class="flexy">
            <div class="fifty">
                <p>Da concept grafici artigianali e studiati alla strategia digitale: dietro ogni progetto, una storia unica. Ecco come abbiamo elevato i brand attraverso una comunicazione dedicata e integrata. </p>
            </div>
            <div class="fifty">
                <p>Lavoriamo a stretto contatto con i Clienti, condividendo idee e feedback in ogni fase per raggiungere obiettivi comuni e voluto.</p>
            </div>
        </div>

        <div class="fifty">
            <div class="small-cta">
                <a class="butun" href="<?php echo site_url(); ?>/case-studies/">Scopri i Nostri Case Study</a>
            </div>
        </div>

    </div><!-- chiude centratore-->

    <div class="cent-contenitore">
        <div id="cases" class="thumb-piccoli">


            <?php foreach( $case_home as $post ): 
                setup_postdata($post); ?>

            <a href="<?php the_permalink(); ?>">
                <div class="thumb-piccolo">
                    <div class="tp-im-cut">
                        <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                        <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />
                    </div>
                    <p class="titolicchio"><?php the_title(); ?></p>
                </div>
            </a>

            <?php endforeach; ?>


            <?php wp_reset_postdata(); ?>
        </div>
    </div>

</div><!-- chiude pre-portfolio-->
<?php endif; ?>
<?php get_template_part( 'includeLayout/cta-red' ); ?>


<?php get_footer();
unset($detect); ?>