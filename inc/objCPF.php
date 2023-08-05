<?php
class Cliente{
  public $IDCliente;

  function __construct($IDCliente){
    $this->ID = $IDCliente;
    $this->arrACF = get_fields($IDCliente);
    $this->nome = get_the_title($this->ID);
    //print_r($this->arrACF);
  }
  function getIDCliente(){
    return ($this->ID);
  }
  function nomeCliente(){
    return ($this->nome);
  }
  function titolino(){
    $_titolino = "";
    if($this->arrACF['titolino_cliente']):
      $_titolino = $this->arrACF['titolino_cliente'];
    endif;
    return ($_titolino);
  }
  function sitoCliente(){
    $_link = "";
    if($this->arrACF['url']):
      $_url = str_replace(array('http://','https://'), '', $this->arrACF['url']);
      $_url = substr($_url,  0, -1);
      $_link = '<a href="'.$this->arrACF['url'].'" target="_blank" rel="nofollow">'.$_url.'</a>';
    endif;
    return ($_link);
  }
  function dominioSitoCliente(){
    $_link = "";
    $_link = $this->arrACF['url'];
    $_link = str_replace(array('http://','https://'), '', $_link);
    if(substr($_link, -1)=="/"):
      $_link = substr($_link,  0, -1);
    endif;
    return ($_link);
  }

  function linkNomeCliente(){
    $_link = "";
    $_link = '<a href="'.get_permalink($this->ID).'" title="'.$this->nome.'">'.$this->nome.'</a>';
    //$_link = $this->nome;
    return ($_link);
  }
  function logoCliente($_class){
    $_logo = "";
    if($_class!=""):
      $_class = 'class="'.$_class.'"';
    else:
      $_class = "";
    endif;
    //print_r($this->arrACF);
    if($this->arrACF['logo_cliente']['url']!=""):
      $_logo = '<img src="'.$this->arrACF['logo_cliente']['url'].'" alt="'.get_the_title($this->ID).'" '.$_class.'>';
    endif;
    return ($_logo);
  }
  function settore(){
    $_settore = "";
    $_settore = $this->arrACF['settore_merceologico'];
    //print_r($_settore);
    return ($_settore['label']);
  }

  public function __destruct()
  {
  }
}

class Portfolio{
  public $IDPortfolio;

  function __construct($IDPortfolio){
    $this->ID = $IDPortfolio;
    $this->arrACF = get_fields($IDPortfolio);
    //print_r($this->arrACF);
  }
  function getIDPorfolio(){
    return ($this->ID);
  }
  function idClienti(){
    if(count($this->arrACF['cliente_portfolio'])!=1):
      return (false);
    else:
      $_clienti = $this->arrACF['cliente_portfolio'][0];
      return ($_clienti->ID);
    endif;
  }
  function idServizioAssociato(){
    $_servizio = $this->arrACF['servizio_associato'][0];
    return ($_servizio->ID);
  }
  function lavoriCorrelati($pre,$post,$link){
    $_lavori = "";
    $_lav = $this->arrACF['lavori_correlati_portfolio'];
    //print_r($_lav);
    if($_lav!=""):
      foreach ($_lav as $_singLav) {
        $_lavori .= $pre;
        $_lavori .= '<a href="'.get_permalink($_singLav->ID).'">'.$_singLav->post_title.'</a>';
        $_lavori .= $post;
      }
    endif;
    //print_r($_lav);
    return ($_lavori);
  }
  function serviziCorrelati($pre,$post,$link){
    $_lavori = "";
    $_lav = $this->arrACF['servizi_correlati_portfolio'];
    //print_r($_lav);
    if($_lav!=""):
      foreach ($_lav as $_singLav) {
        $_lavori .= $pre;
        $_lavori .= '<a href="'.get_permalink($_singLav->ID).'">'.$_singLav->post_title.'</a>';
        $_lavori .= $post;
      }
    endif;
    //print_r($_lav);
    return ($_lavori);
  }
  function sez3Image(){
    $_gruppo = $this->arrACF['sezione_3_immagini_portfolio'];
    $_contenuto = "";
    if($_gruppo['sez_3_img']!=false):
      $_contenuto = '<div class="immagini-design-mobile">
        <div class="ss-banda flexy">
              <div class="ss1">
                <div class="divisorio">
                    <div class="iconcina">
                      <img src="'.get_template_directory_uri().'/img/tools.png"/>
                    </div>
                    <div class="lineetta"></div>
                </div>
                <p class="titolino">'.$_gruppo['titolo_3_img'].'</p>
                <p class="scatena">'.$_gruppo['desc_3_img'].'</p>
              </div>

              <div class="ss2">
                <img src="'.esc_url( $_gruppo['img3_sez_1']['url'] ).'" alt="'.esc_attr( $_gruppo['img3_sez_1']['alt'] ).'" />
            </div>
          </div>
          <div class="ss-banda flexy">

                <div class="ss2">
                  <img src="'.esc_url( $_gruppo['img3_sez_2']['url'] ).'" alt="'.esc_attr( $_gruppo['img3_sez_2']['alt'] ).'" />
                </div>
                <div class="ss2">
                  <img src="'.esc_url( $_gruppo['img3_sez_3']['url'] ).'" alt="'.esc_attr( $_gruppo['img3_sez_3']['alt'] ).'" />
              </div>
            </div>
      </div>';
    endif;


    return ($_contenuto);
  }
  function video(){
    $_video = $this->arrACF['video_portfolio'];
    //echo $_video;
    $_content = array();
    $video = new VideoEmb($_video);
    //						$Cliente = new Cliente($_id_singolo_cliente);
    $_content['check'] = $video->checkVideo();
    if($_content['check']!="no"):
      $_content['iframe'] = $video->printIframe();
    endif;
    unset($video);
    return $_content;
  }



  function categoria(){
    //categoria_lavoro
  }
  function tipologia(){
    //$_servizio_associato
  }

  function gallery(){
    $_content = "";
    $_galleria = "";
    if($this->arrACF['gallery_portfolio']!=""):
      //print_r($this->arrACF['gallery_portfolio']);
    
      $_galleria .= '<div id="gallery" class="b-red">

    <div id="image-slider" class="splide">
      <div class="splide__track">
        <ul class="splide__list">';
        foreach ($this->arrACF['gallery_portfolio'] as $value) {
          //print_r($value);
          /*$_galleria .= '<div class="immagine-extra">
            <img alt="'.$value['title'].'" src="'.$value['url'].'"/>
          </div>';*/
          $_galleria .= '<li class="splide__slide">
        <img alt="'.$value['title'].'" src="'.$value['url'].'"/>
          </li>';
        }

        $_galleria .= '</ul>
      </div>
    </div>

  </div>';

   


    //  $_galleria = $this->arrACF['gallery_portfolio'];
    endif;


    //print_r($this->arrACF['gallery_portfolio']);
    //$_galleria = "cippa";
    return $_galleria;
  }

  function imgParallasse($_class){
    $_img = "";
    if($_class!=""):
      $_class = 'class="'.$_class.'"';
    else:
      $_class = "";
    endif;
    if($this->arrACF['immagine_parallasse_portfolio']['url']!=""):
      $_img = '<img src="'.$this->arrACF['immagine_parallasse_portfolio']['url'].'" alt="'.get_the_title($this->ID).'" '.$_class.'>';
    endif;
    return ($_img);
  }
  function imgExtra($imgS){
    $_img = "";
    //print_r($this->arrACF[$imgS]);
    if($this->arrACF[$imgS]['url']!=""):
      $_img = '<div class="immagine-extra">
      <img src="'.$this->arrACF[$imgS]['url'].'" alt="'.$this->arrACF[$imgS]['alt'].'">
      </div>';
    endif;
    return ($_img);
  }
  function imgLM($_class, $imgS){
    $_img = "";
    if($_class!=""):
      $_class = 'class="'.$_class.'"';
    else:
      $_class = "";
    endif;
    if($this->arrACF[$imgS]['url']!=""):
      $_img = '<img src="'.$this->arrACF[$imgS]['url'].'" alt="'.get_the_title($this->ID).'" '.$_class.'>';
    endif;
    return ($_img);
  }
  function content($pre,$post,$_nome){
    $_content = "";
    if(isset($this->arrACF[$_nome])):
      $_content .= $pre;
      $_content .= $this->arrACF[$_nome];
      $_content .= $post;
    endif;
    return ($_content);
  }
  function specifiche($ul,$li){
    $_content = "";
    if($this->arrACF['specifiche_lavoro_portfolio']!=""):
      $_content .= '<ul class="'.$ul.'">';
      foreach ($this->arrACF['specifiche_lavoro_portfolio'] as $key => $value) {
        $_content .= '<li class="'.$ul.'">'.$value['singola_specifica'] .'</li>';
      }
      $_content .= '</ul>';
    endif;
    return ($_content);
  }
  function focusRipetuti(){
    $_content = "";
    $_indice = 1;
    if($this->arrACF['ripetitore_descrizione_portfolio']!=""):
      foreach ($this->arrACF['ripetitore_descrizione_portfolio'] as $key => $value) {
        if($_indice & 1 ):
          $_content .= '<h3>DISPARI</h3>';
          $_content .= '<h4>'.$value['titolo_rip_port'] .'</h4>';
          $_content .= '<p>'.$value['desc_rip_port'] .'</p>';
          if($value['img_rip_port']!=""):
            $_content .= '<img src="'.$value['img_rip_port']['url'].'" alt="'.$value['titolo_rip_port'] .'">';
          endif;
          $_indice++;
        else:
          $_content .= '<h3>PARI</h3>';
          $_content .= '<h4>'.$value['titolo_rip_port'] .'</h4>';
          $_content .= '<p>'.$value['desc_rip_port'] .'</p>';
          if($value['img_rip_port']!=""):
            $_content .= '<img src="'.$value['img_rip_port']['url'].'" alt="'.$value['titolo_rip_port'] .'">';
          endif;
          $_indice++;
        endif;
      }
    endif;
    return ($_content);
  }
  public function __destruct()
  {
    //print "Destroying " . __CLASS__ . "\n";
  }


}

class Servizio{
  public $IDServizio;

  function __construct($IDServizio){
    $this->ID = $IDServizio;
    $this->arrACF = get_fields($IDServizio);
    $this->nome = get_the_title($this->ID);
  }
  function nomeServizio(){
    return ($this->nome);
  }
  function titoletto(){
    return ($this->arrACF['titoletto_servizio']);
  }
  function sottoTitolo(){
    $this->nome = get_the_title($this->ID);
    return ($this->arrACF['sotto_titoletto_servizio']);
  }
  function task(){
    $_content = "";
    $_left = "";
    $_right = "";
    $_indice = 1;
    if($this->arrACF['task_servizio']!=""):
      foreach ($this->arrACF['task_servizio'] as $key => $value) {
        if($_indice & 1 ):
          $_left .= '<li>'.$value['descrizione_singolo_task_servizio'] .'</li>';
          $_indice++;
        else:
          $_right .= '<li>'.$value['descrizione_singolo_task_servizio'] .'</li>';
          $_indice++;
        endif;
      }
    endif;
    $_content .= '<div class="ss2"><div class="elenco-serv">
      <ul>'.$_left.'</ul>
    </div>
    <div class="elenco-serv">
      <ul>'.$_right.'</ul>
    </div></div>';

    return ($_content);
  }
  function icona($_class){
    $_icona = "";
    if($_class!=""):
      $_class = 'class="'.$_class.'"';
    else:
      $_class = "";
    endif;
    if($this->arrACF['icona_servizio']['url']!=""):
      $_icona = '<img src="'.$this->arrACF['icona_servizio']['url'].'" alt="'.get_the_title($this->ID).'" '.$_class.'>';
    endif;
    return ($_icona);
  }
  function linkNomeServizio(){
    $_link = "";
    $_link = '<a href="'.get_permalink($this->ID).'" title="'.$this->nome.'">'.$this->nome.'</a>';
    return ($_link);
  }
  public function __destruct()
  {
    //print "Destroying " . __CLASS__ . "\n";
  }


}



class VideoEmb{
  public $_urlVideo;

  function __construct($_urlVideo){
    $this->url = $_urlVideo;
    $this->type = "";
  }
  function checkVideo(){
    if (strpos($this->url,'vimeo') !== false):
      $this->type = 'vimeo';
    elseif(strpos($this->url,'youtu')!== false):
      $this->type = 'youtube';
      
    else:
      $this->type = 'no';
    endif;
    return ($this->type);
  }

  function printIframe(){

    
    $_iframe = "";
    $width = '640';
    $height = '360';
    if (strpos($this->url,'vimeo') !== false):
      $matches = "";
      if(preg_match('/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/',$this->url,$matches)):
        $id = $matches[2];

        $_iframe = '<div class="videowrapper well"><iframe src="https://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
      endif;
    elseif(strpos($this->url,'youtube')!== false):
      $step1=explode('v=', $this->url);
      $step2 =explode('&',$step1[1]);
      $video_id = $step2[0];
      $_iframe = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'. $video_id.'?autoplay=1" frameborder="0"></iframe>';
    elseif(strpos($this->url,'youtu')!== false):
      //echo $this->url;
      $step1=explode('v=', $this->url);
      $step2 =explode('/',$step1[1]);
      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->url, $match);
      $video_id = $match[1];
      $_iframe = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'. $video_id.'?autoplay=1" frameborder="0"></iframe>';
    endif;

/*
    $video = new Video($this->url, 1);
    $_iframe = $video->return_embed();

    unset($video);
*/

    //$_iframe = "";
    //$_iframe = parseVideos($this->url);
    //print_r($_iframe);


    return $_iframe;
  }
  public function __destruct()
  {
  }


}


 ?>
