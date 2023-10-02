<?php
function listPorfolio(){
  $_content = "";
  /*
  se 1 apertura, se due chiusura () $_numBlock
  se dispari sinistra, se pari destra $_block
  */
  $args = array(
   'posts_per_page'	=> 20,
   'post_type' => 'portfolio',
    'order' => 'DESC',
   'orderby' => 'id',
   'post_status' => 'publish',
    );
    $the_query = new WP_Query( $args );
    wp_reset_query();
    wp_reset_postdata();
    //definisce sinistra o destra
    $_block = 1;
    //definisce il numero del blocco
    $_numBlock = 1;
    //echo $the_query->post_count;
    //print_r($the_query);
  if( $the_query->have_posts() ):
    $_content .= '<div id="distu-container">';

    while( $the_query->have_posts() ) : $the_query->the_post();
    //se
    if($_numBlock == 1){$_content .= '<div class="wrap">';}
    $_content .= ( $_block & 1 ) ? '<div class="distu-col2 f wow fadeInUp">' : '<div class="distu-col2 s wow fadeInUp">' ;
    $_ico = get_field('icona-patologia_aggregativa');
    $_content .= '<h2><a href="'.get_permalink().'" title="'.get_field('nome_breve_patologia').'">'.get_field('nome_breve_patologia').'</a></h2>

    <div class="centrosho">
    <div class="dcl">
      <p>'.get_field('breve_descrizione_disturbo').'</p>
      <a href="'.get_permalink().'" class="bottone-blu">scopri di più</a>
    </div>
    <div class="dcf">
      <img src="'.$_ico['url'].'" alt="'.get_field('nome_breve_patologia').'" class="dist-img"/>
    </div>
    <div style="clear:both"></div>
    </div>


    <div class="dist-sottosez">';

    $args = array(
     'posts_per_page'	=> 3,
     'post_type' => 'post',
      'order' => 'DESC',
     'orderby' => 'date',
     'post_status' => 'publish',
     'meta_query' => array(
         array(
           'key' => 'disturbo_associate_articolo', // name of custom field
           'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
           'compare' => 'LIKE'
         )
       )
      );
      $the_queryA = new WP_Query( $args );
      wp_reset_query();
      wp_reset_postdata();
         if( $the_queryA->have_posts() ):
           while( $the_queryA->have_posts() ) : $the_queryA->the_post();
           $_content .= '<a href="'.get_permalink().'" title="'.get_the_title().'"><div class="dist-sottosez-1"> <h3>'.get_the_title().'</h3></div></a>';
         endwhile;
        endif;

    $_content .= '</div>

  </div>';

    if($_block==($the_query->post_count)){
      $_content .= '<div style="clear:both"></div></div>';
      break;
    }else{
      if($_numBlock == 2){
        $_content .= '<div style="clear:both"></div></div>';
        $_numBlock = 1;
      }else{
        $_numBlock++;
      }
    }

    $_block++;
    endwhile;
    $_content .= '</div>';
  endif;

    //print_r($the_query);
    return $_content;
}

function lavoriRelazione($_id){
  wp_reset_query();

  $args = array(
   'post_type' => 'portfolio',
    'order' => 'DESC',
   'orderby' => 'date',
   'post_status' => 'publish',
   'nopaging' => false,
    'update_post_term_cache' => false,
    'update_post_meta_cache' => false,
   'meta_query' => array(
       array(
         'key' => 'cliente_portfolio', // name of custom field
         'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
         'compare' => 'LIKE'
       )
     )
    );

  $the_query1 = new WP_Query( $args );
  //print_r($the_query1);
    if( $the_query1->have_posts() ):
    echo '<ul>';
        while( $the_query1->have_posts() ) : $the_query1->the_post();
           $_lID = get_the_ID();
           echo '<li><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></li>';
         endwhile;
        echo '</ul>';
    endif;

  //echo $the_query -> request;

 wp_reset_query();
 wp_reset_postdata();	 // Restore global post data stomped by the_post().
 }

 function serviziRelazione($_id){
   wp_reset_query();

   $args = array(
    'post_type' => 'portfolio',
     'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
    'nopaging' => false,
     'update_post_term_cache' => false,
     'update_post_meta_cache' => false,
    'meta_query' => array(
        array(
          'key' => 'cliente_portfolio', // name of custom field
          'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
          'compare' => 'LIKE'
        )
      )
     );

   $the_query1 = new WP_Query( $args );
   //print_r($the_query1);
     if( $the_query1->have_posts() ):
     echo '<ul>';
         while( $the_query1->have_posts() ) : $the_query1->the_post();
            $_lID = get_the_ID();
            $_servizio = get_field('servizio_associato');
            //echo $_servizio[0]->ID;
            //print_r($_servizio);
            echo '<li><a href="'.get_permalink($_servizio[0]->ID).'" title="'.get_the_title($_servizio[0]->ID).'">'.get_the_title($_servizio[0]->ID).'</a></li>';
          endwhile;
         echo '</ul>';
     endif;

   //echo $the_query -> request;

  wp_reset_query();
  wp_reset_postdata();	 // Restore global post data stomped by the_post().
  }

 function lavoriRelazioneFika($_id){
   wp_reset_query();

     $args = array(
      'post_type' => 'portfolio',
       'order' => 'DESC',
      'orderby' => 'date',
      'post_status' => 'publish',
      'meta_query' => array(
          array(
            'key' => 'cliente_portfolio', // name of custom field
            'value' => $_id, // matches exactly "123", not just 123. This prevents a match for "1234"
            'compare' => 'LIKE'
          )
        )
       );

   $the_query1 = new WP_Query( $args );
   //print_r($the_query1);
   $_c = 1;
     if( $the_query1->have_posts() ):
         while( $the_query1->have_posts() ) : $the_query1->the_post();

         if($_c==1):
           echo '<div class="portfolio-short-banda flexy">';
        endif;
            $_lID = get_the_ID();
              $image = get_field('immagine_mobile_porfolio',$_lID);
            echo '<div class="ps-thumb">
    					<a href="'.get_permalink().'" title="'.get_the_title().'">
    						<div class="ps-thumb-img done">
    							<div class="persp">
    								<img src="'.get_the_post_thumbnail_url().'" alt="'.esc_attr($image['alt']).'" />
    							</div>
    						</div>
    					</a>
    						<div class="ps-thumb-text">
    								<p class="tito">'.get_the_title().'</p>
    						</div>
    				</div>';
            //echo $the_query1->current_post;
            if($_c===2 || $the_query1->post_count == $the_query1->current_post+1):
              echo "</div>";
              $_c = 1 ;
            else:
              $_c++;
            endif;

          endwhile;
     endif;

   //echo $the_query -> request;

  wp_reset_query();
  wp_reset_postdata();	 // Restore global post data stomped by the_post().
  }

 function lavoriRelazionePortfolio($_id, $_idPost){
   wp_reset_query();

   //echo $_id;

   $args = array(
    'post_type' => 'portfolio',
     'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
    'nopaging' => false,
     'update_post_term_cache' => false,
     'update_post_meta_cache' => false,
     'post__not_in' => array($_idPost),
    'meta_query' => array(
        array(
          'key' => 'cliente_portfolio', // name of custom field
          'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
          'compare' => 'LIKE'
        )
      )
     );
    $_content = "";
   $the_query1 = new WP_Query( $args );
     if( $the_query1->have_posts() ):
         while( $the_query1->have_posts() ) : $the_query1->the_post();
            $_lID = get_the_ID();
            //$image = get_field('immagine_mobile_porfolio');
            //echo $_lID.'<br/>';
            if (has_post_thumbnail( $_lID ) ):
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $_lID ), 'large' );
              $_content .= '<a href="'.get_permalink().'">
                <div class="thumb-piccolo">
                  <div class="tp-im-cut">
                    <img src="'.esc_url($image[0]).'" alt="'.get_the_title().'" />
                  </div>
                  <p class="titolicchio">'.get_the_title().'</p>
                </div>
              </a>';
              //print_r($image);
            else:
              $_content .= '<a href="'.get_permalink().'">
                <div class="thumb-piccolo">
                  <p class="titolicchio">'.get_the_title().'</p>
                </div>
              </a>';
            endif;

          endwhile;
     endif;

   //echo $the_query -> request;

  wp_reset_query();
  wp_reset_postdata();	 // Restore global post data stomped by the_post().
  return $_content;
  }

 function lavoriRelazioneServizio($_id){
   wp_reset_query();

   $args = array(
    'post_type' => 'portfolio',
     'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
    'nopaging' => false,
     'update_post_term_cache' => false,
     'update_post_meta_cache' => false,

    'meta_query' => array(
        array(
          'key' => 'servizio_associato', // name of custom field
          'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
          'compare' => 'LIKE'
        )
      )
     );

   $_content = "";
   $the_query1 = new WP_Query( $args );
     if( $the_query1->have_posts() ):
         while( $the_query1->have_posts() ) : $the_query1->the_post();
            $_lID = get_the_ID();
            //$image = get_field('immagine_mobile_porfolio');
            $_content .= '<div class="ps-thumb">
              <a href="'.get_permalink().'">
                <div class="ps-thumb-img done">
                  <div class="persp">
                    <img src="'.get_the_post_thumbnail_url().'" alt="'.esc_attr($image['alt']).'" />
                  </div>
                </div>
              </a>
                <div class="ps-thumb-text">
                    <p class="tito">'.get_the_title().'</p>
                </div>
            </div>';
          endwhile;
    endif;

   //echo $the_query -> request;

  wp_reset_query();
  wp_reset_postdata();	 // Restore global post data stomped by the_post().
  return $_content;
  }
  function lavoriRelazioneServizioPortf($_id, $_idPost){
    wp_reset_query();

    $args = array(
     'post_type' => 'portfolio',
      'order' => 'DESC',
     'orderby' => 'date',
     'post_status' => 'publish',
     'nopaging' => false,
      'update_post_term_cache' => false,
      'update_post_meta_cache' => false,
      'post__not_in' => array($_idPost),
     'meta_query' => array(
         array(
           'key' => 'servizio_associato', // name of custom field
           'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
           'compare' => 'LIKE'
         )
       )
      );

    $_content = "";
    $the_query1 = new WP_Query( $args );
      if( $the_query1->have_posts() ):
          while( $the_query1->have_posts() ) : $the_query1->the_post();
             $_lID = get_the_ID();
             //$image = get_field('immagine_mobile_porfolio');
             $_content .= '<div class="ps-thumb">
               <a href="'.get_permalink().'">
                 <div class="ps-thumb-img done">
                   <div class="persp">
                     <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" />
                   </div>
                 </div>
               </a>
                 <div class="ps-thumb-text">
                     <p class="tito">'.get_the_title().'</p>
                 </div>
             </div>';
           endwhile;
     endif;

    //echo $the_query -> request;

   wp_reset_query();
   wp_reset_postdata();	 // Restore global post data stomped by the_post().
   return $_content;
   }

  function relazioneServizio($_id){
    wp_reset_query();
    $_servizi = get_field('servizi_correlati',$_id);
    if($_servizi!=""):
      foreach ($_servizi as $_singolo_servizio) {
             echo '<li><a href="'.get_permalink($_singolo_servizio).'" title="'.get_the_title($_singolo_servizio).'">'.get_the_title($_singolo_servizio).'</a></li>';
      }
    endif;

    //echo $the_query -> request;

   wp_reset_query();
   wp_reset_postdata();	 // Restore global post data stomped by the_post().
   }

 function listServizi($_id){
   $_microSezlabel = '<ul>';
   //mostro tutti i servizi correlati a quella macrosezione
   $args = array(
    'posts_per_page'	=> -1,
    'post_type' => 'servizio',
     'order' => 'ASC',
    'orderby' => 'title',
    'post_status' => 'publish',
    'meta_query'	=> array(
      'relation'		=> 'AND',
      array(
        'key'		=> 'macro_area_servizio',
        'value'		=> $_id,
        'compare'	=> '=' )
       ),

      );
      $the_query = new WP_Query( $args );
      //print_r($the_query);
     //echo "<br/><br/><br/>Last SQL-Query: {$the_query->request}<br/><br/>";
     wp_reset_query();
     wp_reset_postdata();
     if( $the_query->have_posts() ):
         while( $the_query->have_posts() ) : $the_query->the_post();
           $_microSezlabel .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
          endwhile;
     endif;
     $_microSezlabel .= '</ul>';
     return $_microSezlabel;
  }

  function linkServizi($_id){
    $_microSezlabel = '';
    //mostro tutti i servizi correlati a quella macrosezione
    $args = array(
     'posts_per_page'	=> -1,
     'post_type' => 'servizio',
      'order' => 'ASC',
     'orderby' => 'title',
     'post_status' => 'publish',
     'meta_query'	=> array(
       'relation'		=> 'AND',
       array(
         'key'		=> 'macro_area_servizio',
         'value'		=> $_id,
         'compare'	=> '=' )
        ),

       );
       $the_query = new WP_Query( $args );
      wp_reset_query();
      wp_reset_postdata();
      if( $the_query->have_posts() ):
          while( $the_query->have_posts() ) : $the_query->the_post();
            $_microSezlabel .= '<a href="'.get_permalink().'">'.get_the_title().'</a>';
           endwhile;
      endif;
      return $_microSezlabel;
   }

   function linkServiziHome($_id){
     $_microSezlabel = '';
     //mostro tutti i servizi correlati a quella macrosezione
     $args = array(
      'posts_per_page'	=> -1,
      'post_type' => 'servizio',
       'order' => 'ASC',
      'orderby' => 'title',
      'post_status' => 'publish',
      'meta_query'	=> array(
        'relation'		=> 'AND',
        array(
          'key'		=> 'macro_area_servizio',
          'value'		=> $_id,
          'compare'	=> '=' )
         ),

        );
        $the_query = new WP_Query( $args );
       wp_reset_query();
       wp_reset_postdata();
       if( $the_query->have_posts() ):
           while( $the_query->have_posts() ) : $the_query->the_post();
             $_microSezlabel .= '<div class="welo"><a class="velo-link" href="'.get_permalink().'">'.get_the_title().' +</a></div>';
            endwhile;
       endif;
       return $_microSezlabel;
    }



/*
function nius($_id, $num){
    wp_reset_query();
  //se è array ha diversi id, altrimenti è numero =0 per tutti, oppure numero di categoria
  $_pagination = false;
  if(is_array($_id)){
    $args = array(
     'posts_per_page'	=> $num,
     'post_type' => 'post',
     'post__in' => $_id,
     'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
      );

  }elseif($_id==0){
    //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $category_id = get_cat_ID(get_the_category());
    $sticky = get_option( 'sticky_posts' );
    $args = array(
     'posts_per_page'	=> $num,
     'post_type' => 'post',

     'cat' => $category_id,
     'order' => 'DESC',
    'orderby' => 'date',

    'post_status' => 'publish',
    'meta_key'		=> 'in_evidenza_home',
	   'meta_value'	=> true
  ); //'paged' => $paged,'post__in' => $sticky,
  }else{
    $args = array(
     'posts_per_page'	=> $num,
     'post_type' => 'post',
      'cat' => $_id,
      'order' => 'DESC',
     'orderby' => 'date',
     'post_status' => 'publish',
      );
  }


// query
$the_query = new WP_Query( $args );

echo '<div id="news-fondo-pagina">
  <div id="news-center" class="wow fadeInUp">';
  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();
       $_lID = get_the_ID();
       $content = get_post_field( 'post_content');
       $content_parts = get_extended( $content );
       echo '<div class="news-col2">
         <div class="news-img-cont">
           <a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_post_thumbnail($_lID, 'nius2').'</a>
         </div>
         <h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</p></h3>
         <p class="news-date">'.get_the_date().'</p>
         <p>'.$content_parts['main'].'</p>
         <a class="news-link" href="'.get_permalink().'" title="'.get_the_title().'">scopri di più</a>
       </div>';
     endwhile;
   endif;
    echo '<div style="clear:both"></div>
  </div>
</div>';


  //echo $the_query -> request;

  wp_reset_query();
  wp_reset_postdata();	 // Restore global post data stomped by the_post().
 }

function metUsatoCon(){
  $_listaMetodi = array
    (
    "0" => array("Personal Trainer",site_url()."/wp-content/themes/Divi-Fisiologic/img/icone/personal-trainer.gif",site_url()."/fisio-logic/percorsi-individuali/"),
    "1" => array("Personal Activity Class",site_url()."/wp-content/themes/Divi-Fisiologic/img/icone/attivita-gruppo.gif",site_url()."/fisio-logic/percorsi-gruppo/"),
    "2" => array("Mini Class",site_url()."/wp-content/themes/Divi-Fisiologic/img/icone/mini-class.gif",site_url()."/fisio-logic/mini-class/"),
    );
  return $_listaMetodi;
}

function niusRelazione($_id, $num, $_type){
  //se è array ha diversi id, altrimenti è numero =0 per tutti, oppure numero di categoria
  //echo $num;
  wp_reset_query();
  switch ($_type) {
    case 'consulente':
    $args = array(
     'posts_per_page'	=> $num,
     'post_type' => 'post',
      'order' => 'DESC',
     'orderby' => 'date',
     'post_status' => 'publish',
     'nopaging' => false,
      'update_post_term_cache' => false,
      'update_post_meta_cache' => false,
     'meta_query' => array(
         array(
           'key' => 'consulente_associato_articolo', // name of custom field
           'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
           'compare' => 'LIKE'
         )
       )
      );
      break;
      case 'disturbo':
      $args = array(
       'posts_per_page'	=> $num,
       'post_type' => 'post',
        'order' => 'DESC',
       'orderby' => 'date',
       'post_status' => 'publish',
       'nopaging' => false,
       'update_post_term_cache' => false,
       'update_post_meta_cache' => false,
       'meta_query' => array(
           array(
             'key' => 'disturbo_associate_articolo', // name of custom field
             'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
             'compare' => 'LIKE'
           )
         )
        );
      break;
      case 'terapia':
      $args = array(
       'posts_per_page'	=> $num,
       'post_type' => 'post',
        'order' => 'DESC',
       'orderby' => 'date',
       'post_status' => 'publish',
       'nopaging' => true,
       'update_post_term_cache' => false,
       'update_post_meta_cache' => false,
       'meta_query' => array(
           array(
             'key' => 'terapie_associate_articolo', // name of custom field
             'value' => '"' . $_id . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
             'compare' => 'LIKE'
           )
         )
        );
      break;
    default:
      // code...
      break;
  }
  //print_r ($args);
  $the_query1 = new WP_Query( $args );
  //print_r($the_query);
  $_loop = 1;
    if( $the_query1->have_posts() ):
    echo '<div id="news-fondo-pagina">
      <div id="news-center" class="wow fadeInUp">';
        while( $the_query1->have_posts() ) : $the_query1->the_post();
           $_lID = get_the_ID();
           $content = get_post_field( 'post_content');
           $content_parts = get_extended( $content );
           echo '<div class="news-col2">
             <div class="news-img-cont">
               <a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_post_thumbnail($_lID, 'nius2').'</a>
             </div>
             <h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>
             <p class="news-date">'.get_the_date().'</p>
             <p>'.$content_parts['main'].'</p>
             <a class="news-link" href="'.get_permalink().'" title="'.get_the_title().'">scopri di più</a>
           </div>';
           if($num==$_loop){
             break;
           }
           $_loop++;
         endwhile;
        echo '<div style="clear:both"></div>
      </div>
    </div>';
    endif;

  //echo $the_query -> request;

 wp_reset_query();
 wp_reset_postdata();	 // Restore global post data stomped by the_post().
 }



function singleTerapiaAggregativa($_img, $_titolo, $_estratto, $_url, $_ico){
  $_content = '';
  $_content .= '<div class="agg-terap wow fadeInUp">
      <div class="agg-terap-img">
        <a href="'.$_url.'" title="'.$_titolo.'"><img src="'.$_img.'" alt="'.$_titolo.'"/></a>
      </div>
    <div class="terap-cont">
        <a href="'.$_url.'" title="'.$_titolo.'">';
        if(!wp_is_mobile()){
          $_content .= '<img src="'.$_ico['url'].'" alt="'.$_titolo.'" width="40px" height="40px" style="float:left;margin-right:5px;">';
        }
        $_content .= '<h3 class="agg-terap-title blu">'.$_titolo.'</h3></a>
        <p>';
        if(wp_is_mobile()){
          $_content .= '<img src="'.$_ico['url'].'" alt="'.$_titolo.'" width="40px" height="40px" style="float:left;margin-right:10px;">';
        }
        $_content .= $_estratto.'</p>
        <a href="'.$_url.'" class="bottone-terap">Scopri di più</a>
      </div>
      <div style="clear:both"></div>
    </div>';
  return $_content;
}

//Toc article
function tocA($content){
	$matches = null;
	$smatches = null;
  $toc_html = null;
	$had_headers = array();
	preg_match_all('/<h[0-9].*?>.*?<\/h[0-9]>/i', $content, $matches);
	if (!empty($matches[0]) && count($matches[0]) > 0)
	foreach ($matches[0] as $headertag) {
		preg_match('/>(.*?)<\/(h[0-9])>/i', $headertag, $smatches);

		if (!empty($smatches[1]) && count($smatches) > 0) {
			$headerid = strip_tags($headertag);
			$headerid = trim(strtolower(preg_replace('/[^a-z0-9]/i', '', $headerid)));
			$smatches[2] = strtolower($smatches[2]);
			$header_depth = intval(trim(str_ireplace('h', '', $smatch
*/
