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
               <h1 class="titolone">Un punto d'incontro tra passione, brand e visione.</h1>
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
            <p>In TRIGLOÖ®, crediamo che ogni PMI italiana abbia una storia unica e una visione da comunicare. Noi siamo qui per dare voce a quella visione, per integrare passione e professionalità in una comunicazione che funziona. Per gli imprenditori che cercano un partner flessibile e dedicato, Trigloo è la scelta giusta.<br/>
Evolviamo insieme, con individualità, cooperazione e collaborazione.</p>
            <div class="small-cta">
              <a class="butun" href="<?php echo get_permalink(211); ?>">Contattaci</a>
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
      <p class="titolino white">Cresciamo insieme: Fiducia</p>
    </div>

    <div class="fifty go">
      <p class="white">Ti senti sopraffatto dalla <strong>vastità del mondo digitale</strong>? Difficoltà a far emergere il tuo brand in un mercato così affollato? Stanco di sentire decine di professionisti e doverli coordinare?<br/><br/>
Noi di Trigloo® lo capiamo. Siamo <strong>snelli e flessibili</strong>, permettendoci di navigare con te attraverso le sfide del mercato moderno. Ogni progetto ha una sua <strong>individualità</strong>, e il nostro approccio collaborativo garantisce che ogni cliente riceva una soluzione dedicata.<br/><br/>
Non sei solo un altro cliente; sei un partner con una <strong>visione da condividere</strong>.<br/><br/>
<a href="<?php echo get_permalink(211); ?>">Parliamone </a></p>
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
        <p class="tito">Una parte di noi</p>
    </div>

    <div class="thumb-piccoli">

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/andre.png" />
          </div>
          <p class="nomi-trigloo">Andrea Franzino</p>
          <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder</p>
        </div>


        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/eli.png" />
          </div>
          <p class="nomi-trigloo">Elisa Vanara</p>
          <p class="red">Trigloo<span style="font-size:7px">®</span>Cofounder</p>
        </div>

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pino.jpg" />
          </div>
          <p class="nomi-trigloo">Pino</p>
          <p class="red">Consulente SEO<br/>
            Sviluppatore<br/>Web Marketing</p>
        </div>

        <div class="thumb-piccolo">
          <div class="tp-im-cut">
            <img src="<?php echo get_template_directory_uri(); ?>/img/me.png" />
          </div>
          <p class="nomi-trigloo">Luigi</p>
          <p class="red">WebDesigner<br/>
            WebDeveloper<br/>Crodino Enthusiast</p>
        </div>

      </div>

      <div class="thumb-piccoli">

          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/staff-pic-perini.jpg" />
            </div>
            <p class="nomi-trigloo">Andrea</p>
            <p class="red">Advertiser<br/>Social Media Advertiser</p>
          </div>


          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/staff-pic-toni.jpg" />
            </div>
            <p class="nomi-trigloo">Antonino</p>
            <p class="red">Insegnista<br/>
              Posatore</p>
          </div>

          <div class="thumb-piccolo">
            <div class="tp-im-cut">
              <img src="<?php echo get_template_directory_uri(); ?>/img/staff-arale.jpg" />
            </div>
            <p class="nomi-trigloo">Arale</p>
            <p class="red">Mascotte</p>
          </div>

        </div>

    </div>
</div>

  <?php get_template_part( 'includeLayout/cta-red' ); ?>
 
 
 <?php get_footer();
unset($detect); ?>
