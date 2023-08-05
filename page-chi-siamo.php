<?php 
/*
Template Name: Pagina Chi Siamo
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
 
 <div id="header-servizio-espolso">
     <div class="cent-contenitore">
         <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
         <div class="flexy">
           <div class="hl">
             <div class="hl-int">
               <p class="titoletto red">Chi/Cosa/Come siamo</p>
               <h1 class="titolone">Siamo un luogo dove crescere insieme</h1>
             </div>
           </div>

           <div class="hr">
             <div id="scroll-d">
               <p><span class="text">scroll down</span></p>
             </div>

             <div class="hr-imm-cont">
               <img src="<?php echo get_template_directory_uri(); ?>/img/chi.png"/>
             </div>
         </div>
     </div>
   </div>
   <span class="outer-giga">
     <p class="giga white">About us</p>
   </span>
</div><!-- chiuso header servizio esploso-->

<div id="section-mission" class="b-grey">
  <div class="cent-contenitore">

        <div class="ss-banda sec flexy">

          <div class="quarter">

          </div>

          <div class="three-quarter">
            <div class="divisorio">
                <div class="iconcina">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icoo-red.png"/>
                </div>
                <div class="lineetta"></div>
            </div>
            <p class="titolinostatic">Benvenuto in Trigloo<span class="ori">®</span></p>
            <p>TRIGLOÖ® ( s.m. [Trì-glù] ) è uno studio di comunicazione integrato, “coordiniamo” il tuo brand, in base ai tuoi obiettivi, e al tuo mercato di riferimento.<br/>
Trigloo®, ci piaci tu! (I brand you!)<br/>
Evoluzione: Individualità, cooperazione e collaborazione.
</p>
            <div class="small-cta">
              <a class="butun" href="#">Leggi il Manifesto</a>
            </div>
          </div>
        </div>

      </div>
</div><!-- fine section mission-->

<div id="foto-servizi" class="chi-siamo">
  <div class="cent-contenitore">
    <div id="cont-fotoservizi">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header_1980x959-about.jpg" alt="trigloo insegna"/>
    </div>
  </div>
</div>

<div id="spiega" class="b-red">
  <div class="cent-contenitore flexy">

    <div class="fifty">
      <div class="divisorio">
          <div class="iconcina">
            <img src="<?php echo get_template_directory_uri(); ?>/img/heart-w.png"/>
          </div>
          <div class="lineetta white"></div>
      </div>
      <p class="titolino white">Cresciamo insieme?</p>
    </div>

    <div class="fifty go">
      <p class="white">Siamo una realtà <strong>snella</strong>, questo ci consente di muoverci agevolmente nel mercato di riferimento.<br/><br/>
Abbiamo scelto di collaborare con più professionisti, in ogni progetto c’è un’individualità che deve emergere, questo per garantire al cliente <strong>unicità nella propria resa</strong>, e per poter studiare meglio ed entrare in empatia con il soggetto.<br/><br/>
Potremmo definirci un network, seguiamo il cliente in <strong>tutte le fasi</strong> dall’idea alla produzione della resa finale!<br/><br/>
Tutto questo ci è permesso grazie a degli ottimi team che di volta in volta vengono coinvolti.</p>
    </div>

  </div>
</div>

<div class="trigluidi">
  <div class="cent-contenitore">
      <div class="fifty">
        <div class="divisorio">
            <div class="iconcina">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icoo-red.png"/>
            </div>
            <div class="lineetta"></div>
        </div>
        <p class="tito">La fauna Triglooense</p>
    </div>

    <div class="thumb-piccoli">

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/andre.png" />
          </div>
          <p class="nomi-trigloo">Andrea Franzino</p>
          <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder<br/>
            Graphic Designer<br/>Crodino Enthusiast</p>
            <a class="mail" href="mailto:#">andrea.franzino@trigloo.it</a>
        </div>


        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/eli.png" />
          </div>
          <p class="nomi-trigloo">Elisa Vanara</p>
          <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder<br/>
            Graphic Designer<br/>Crodino Enthusiast</p>
            <a class="mail" href="mailto:#">elisa.vanara@trigloo.it</a>
        </div>

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pino.jpg" />
          </div>
          <p class="nomi-trigloo">Pino Galvagno</p>
          <p class="red">Consulente SEO<br/>
            Sviluppatore Php<br/>web marketing</p>
            <a class="mail" href="mailto:#">seo@trigloo.it</a>
        </div>

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/me.png" />
          </div>
          <p class="nomi-trigloo">Luigi Carlini</p>
          <p class="red">WebDesigner<br/>
            WebDeveloper<br/>Crodino Enthusiast</p>
            <a class="mail" href="mailto:#">webdev@trigloo.it</a>
        </div>

      </div>

      <div class="thumb-piccoli">

          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/andre.png" />
            </div>
            <p class="nomi-trigloo">Andrea Franzino</p>
            <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder<br/>
              Graphic Designer<br/>Crodino Enthusiast</p>
              <a class="mail" href="mailto:#">andrea.franzino@trigloo.it</a>
          </div>


          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/eli.png" />
            </div>
            <p class="nomi-trigloo">Elisa Vanara</p>
            <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder<br/>
              Graphic Designer<br/>Crodino Enthusiast</p>
              <a class="mail" href="mailto:#">elisa.vanara@trigloo.it</a>
          </div>

          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/me.png" />
            </div>
            <p class="nomi-trigloo">Luigi Carlini</p>
            <p class="red">WebDesigner<br/>
              WebDeveloper<br/>Crodino Enthusiast</p>
              <a class="mail" href="mailto:#">webdev@trigloo.it</a>
          </div>

        </div>

    </div>
</div>

  <?php get_template_part( 'includeLayout/cta-red' ); ?>
 
 
 <?php get_footer();
unset($detect); ?>
