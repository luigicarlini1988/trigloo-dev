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
     <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
     <div class="hl">
       <div class="hl-int">
         <p class="titoletto red">We are Trigloo<span class="ori">®</span></p>
         <p class="titolone">Siamo un'agenzia di comunicazione integrata</p>
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
<?php if( $detect->isMobile() || $detect->isTablet() ): ?>
 <!--SOLO MOBILE sezione skills -->
 <div id="skills-mobile">
   <div class="cent-contenitore">
      
   <div class="skeda-mob">

<div class="divisorio">
    <div class="iconcina red">
      <p>01</p>
    </div>
    <div class="lineetta b-red"></div>
</div>

<h2 class="tito">Branding</h2>
<a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">
  <div class="sm-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/what-mobile.png">
  </div>
</a>
<div class="sm-text">
    <p class="testo"><?php echo get_field('sales_point_setup_home'); ?></p>
    <?php echo linkServiziHome(1); ?>
    <div style="clear:both"></div>
    <div class="small-cta">
      <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Guarda tutti i lavori</a>
    </div>
  </div>

</div><!--scheda-mob-->


       <div class="skeda-mob">

           <div class="divisorio">
               <div class="iconcina red">
                 <p>02</p>
               </div>
               <div class="lineetta b-red"></div>
           </div>

           <h2 class="tito">Web<br/>Solution</h2>
           <a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">
             <div class="sm-img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/what-mobile.png">
             </div>
           </a>
           <div class="sm-text">
               <p class="testo"><?php echo get_field('online_communication_home'); ?></p>
               <?php echo linkServiziHome(2); ?>
               <div style="clear:both"></div>
               <div class="small-cta">
                 <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Guarda tutti i lavori</a>
               </div>
             </div>

         </div><!--scheda-mob-->

         <div class="skeda-mob">

             <div class="divisorio">
                 <div class="iconcina red">
                   <p>03</p>
                 </div>
                 <div class="lineetta b-red"></div>
             </div>

             <h2 class="tito">Offline<br/>Comunication</h2>
             <a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">
               <div class="sm-img">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/what-mobile.png">
               </div>
             </a>
             <div class="sm-text">
                 <p class="testo"><?php echo get_field('offline_communication_home'); ?></p>
                 <?php echo linkServiziHome(0); ?>
                 <div style="clear:both"></div>
                 <div class="small-cta">
                   <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Guarda tutti i lavori</a>
                 </div>
               </div>

           </div><!--scheda-mob-->

           </div>

 </div> <!--FINE SOLO MOBILE sezione Skills-->
<?php else: ?>
  <div id="wrap-skill">
      <div class="cent-contenitore">
          <div id="section-skills" class="stickem-container">
            <div id="outer-skede" class="stickem" >
              <p id="giga" class="giga grey">What we do</p>
              <div id="skills-schede">
                <div id="contatore">
                  <div id="numeri">
                    <div id="numeri-ins" class="red">01<br/>02<br/>03</div>
                  </div>
                  <div id="lines"></div>
                </div>


                <?php $_data = get_fields(); ?>

                <div id="skeda1">
                  <h2 class="tito">Branding</h2>
                  <p class="testo"><?php echo $_data['sales_point_setup_home']; ?></p>
                  <?php echo linkServiziHome(1); ?>
                  <div style="clear:both"></div>
                  <div class="small-cta">
                    <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Guarda tutti i lavori</a>
                  </div>
                </div>

                <div id="skeda2" class="in">
                  <h2 class="tito">Web<br/>Solution</h2>
                    <p class="testo"><?php echo $_data['online_communication_home']; ?></p>
                  <?php echo linkServiziHome(2); ?>
                  <div style="clear:both"></div>
                  <div class="small-cta">
                    <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Guarda tutti i lavori</a>
                  </div>
                </div>

                <div id="skeda3">
                  <h2 class="tito">Offline<br/>Comunication</h2>
                  <p class="testo"><?php echo $_data['offline_communication_home']; ?></p>
                    <?php echo linkServiziHome(0); ?>
                    <div style="clear:both"></div>
                    <div class="small-cta">
                      <a class="butun" href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Guarda tutti i lavori</a>
                    </div>
                </div>

              </div>

              <div id="skills-foto" >
                <a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">
                  <div id="sk-foto1" class="in">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/what-mobile.png"/>
                  </div>
                </a>
                <a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">
                  <div id="sk-foto2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lavoro.png"/>
                  </div>
                </a>
                <a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">
                  <div id="sk-foto3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lavoro.png"/>
                  </div>
                </a>
              </div>
            </div>

            <div id="scroller">
                <div id="sk1"></div>
                <div id="sk2"></div>
                <div id="sk3"></div>
            </div>
            <div id="ancora-per-center-sx"></div>


          </div><!-- chiude skills -->
      </div> <!-- chiude cent-contenitore-->
  </div> <!--FINE SOLO PC sezione Skills-->
<?php endif; ?>


<div id="banda-rossa">
  <div class="sfondone"></div>
  <div class="cent-contenitore">
      <div class="divisorio">
          <div class="iconcina">
          <img src="<?php echo get_template_directory_uri(); ?>/img/tr-o-w.png"/>
          </div>
          <div class="lineetta white"></div>
      </div>

      <div class="leftore">
        <p class="testone white">La TRIGLOO® è un partner che gestisce ogni aspetto della comunicazione, dalla pianificazione, esecuzione e fino alla realizzazione, considerando e connettendo tutti i passaggi e unificando la responsabilità. Permettendo ai nostri Clienti di concentrarsi sul loro business principale.</p>
      </div>
  </div>
</div>

<div id="pre-portfolio">
  <div class="cent-contenitore">
    <div class="divisorio">
        <div class="iconcina red">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png"/>
        </div>
        <div class="lineetta b-red"></div>
    </div>

    <div class="fifty">
      <p class="titolo">PERCHÈ HAI BISOGNO DI TRIGLOÖ ®</p>
    </div>

    <div class="flexy">
      <div class="quarter">
        <p>Vuoi creare il tuo marchio o i tuoi marchi prodotti e/o registrarli?<br/>
Vuoi potenziare il tuo brand e fatturare di più?<br/>
Cerchi una personalizzazione del tuo prodotto o servizio, mercato e tipologia di clienti?<br/>
Vuoi posizionarti tra i tuoi competitor nel mercato di riferimento?<br/>
Ti serve una strategia di comunicazione?<br/>
</p>
      </div>
      <div class="quarter">
        <p>Hai bisogno di comunicare i tuoi prodotti o servizi in maniera professionale?<br/>
Ti serve un partner unico che ti supporti a 360 gradi in tutte le fasi, dalla realizzazione alla finalizzazione, dalla pianificazione alla reportistica?<br/>
Cerchi una collaborazione aperta, con feedback e adattamenti?
</p>
      </div>
    </div>

    <div class="fifty">
      <div class="small-cta">
        <a class="butun" href="<?php echo site_url(); ?>/portfolio/">esplora i nostri lavori singolarmente.</a>
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
        <p class="testo">'.get_field('sotto_descrizione_portofolio').'</p>
        <p class="testo">'.get_the_content().'</p>
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
          <p class="testo">'.get_the_content().'</p>
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

  <?php get_template_part( 'includeLayout/cta-red' ); ?>


 <?php get_footer();
unset($detect); ?>
