<?php
/*
Template Name: Pagina mmx
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

 <div id="header-servizio-espolso" class="cliente">
			<div class="cent-contenitore">
					<div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png"/></div>
					<div class="flexy">
						<div class="hl">
							<div class="hl-int">
								<p class="titoletto red">Siamo il tuo</p>
                                <h1 class="titolone">Marketing Mix</h1>
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
        <p class="giga white cliente">Marketing Mix</p>
		</span>
</div><!-- chiuso header servizio esploso-->

<div id="section-cliente">
        <div class="cent-contenitore">
              <div class="ss-banda sec flexy">

                <!--<div class="quarter">
                  <div class="client-info1">
                        <p class="titoletto red">Servizio Svolto</p>
                        <ul class="serv-correlati link-skills">
                          <li><a href="#">SEO onsite</a></li>
                        </ul>
                  </div>

                  <div class="client-info2">
                    <p class="titoletto red">Lavori Correlati</p>
                    <ul class="serv-correlati link-skills">
                      <li><a href="#">SEO onsite</a></li>
                      <li><a href="#">Social Media</a></li>
                      <li><a href="#">Web Analytics</a></li>
                      <li><a href="#">Template Wordpress</a></li>
                    </ul>
                  </div>

                  <div class="client-info3">
                    <p class="titoletto red">Pagina cliente</p>
                    <ul class="serv-correlati link-skills">
                      <li><a href="#">Nome Cliente</a></li>
                    </ul>
                  </div>

                </div>-->

                <div class="centerello">
                  <p class="titolino">Cos’è il Marketing Mix</p>
                  <p>Il marketing mix è l’insieme di azioni che un’azienda intraprende per creare e commercializzare il proprio prodotto o servizio ai propri clienti. L’obiettivo è offrire ai clienti il prodotto giusto, al momento giusto e nel posto/canale giusto, al giusto prezzo.</p>
                  <p>Le aziende utilizzano una combinazione di canali e azioni per generare la risposta che desiderano dal loro pubblico.</p>
                </div>
              </div>

            </div>
      </div><!-- fine section cliente-->

      <div id="immaginona-parallasse">
          <img class="parallala" src="<?php echo get_template_directory_uri(); ?>/img/servizi.jpg"/>
      </div>


      
      <div id="lavoro-extra-info">
          <div class="cent-contenitore">


          
       <!-- questa sezione serve solo in caso di CPT WebDesign -->
       <div class="immagini-design-mobile">
              <div class="ss-banda flexy">
                    <div class="ss1">
                      <div class="divisorio">
                          <div class="iconcina">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tools.png"/>
                          </div>
                          <div class="lineetta"></div>
                      </div>

                      <p class="titolino">Come progettiamo il tuo marketing mix</p>
                      <p class="scatena">Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                    </div>

                    <div class="ss2">
                    <p class="scatena"><b>1. Analisi del settore </b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                  </div>
                </div>

                <div class="ss-banda flexy">

                      <div class="ss2">
                      <p class="scatena"><b>2. Definizione obiettivi </b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                      </div>

                      <div class="ss2">
                      <p class="scatena"><b>3. Definizione funnel </b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                    </div>

                  </div>

                  <div class="ss-banda flexy">

                      <div class="ss2">
                      <p class="scatena"><b>4. Definizione strategie</b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                      </div>

                      <div class="ss2">
                      <p class="scatena"><b>5. Sviluppo e Produzione</b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                    </div>

                  </div>


                  <div class="ss-banda flexy">

                      <div class="ss2">
                      <p class="scatena"><b>6. Monitoraggio</b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                      </div>

                      <div class="ss2">
                      <p class="scatena"><b>7. A/B Test</b><br/>
                    Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                    </div>

                  </div>
            </div>


            <div class="testo-extra">
              <div class="ss-banda flexy">
                    <div class="ss1">
                      <div class="divisorio">
                          <div class="iconcina">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cuore.png"/>
                          </div>
                          <div class="lineetta"></div>
                      </div>

                      <p class="titolino">Sezione con altro testo vario ed eventuale, come da tempalte ma con testo diverso.</p>
                      <p class="scatena">Ogni attività ha una sua anima e delle caratteristiche ben precise. Il nostro lavoro inizia col comprendere questa unicità, le esigenze tecniche che ne conseguono,  e tradurle nel sito che meglio le soddisfi</p>
                    </div>
              </div>
            </div>








            </div>
            </div>


 <?php get_footer();
unset($detect); ?>
