<?php
class Video {

  private $url;
  private $autoplay;

  function __construct($url, $autoplay = 0){
    $this->url = $url;
    $this->autoplay = $autoplay;
  }

  public function render_embed() {
    if ($this->is_youtube()) {
      $this->render_youtube_player();
    } elseif($this->is_vimeo()) {
      $this->render_vimeo_player();
    } elseif($this->is_bliptv()) {
      $this->render_bliptv_player();
    }
  }

  public function return_embed() {
    $_html = "";
    if ($this->is_youtube()) {
      $_html = $this->return_youtube_player();
    } elseif($this->is_vimeo()) {
      $_html = $this->return_vimeo_player();
    }
    return $_html;
  }

  private function is_youtube() {
    return strpos($this->url,'youtube') !== false;
  }

  private function is_vimeo() {
    return strpos($this->url,'vimeo') !== false;
  }

  private function is_bliptv() {
    return strpos($this->url,'vimeo') !== false;
  }

  /* Vimeo Stuff */

  public function the_vimeo_img(){
    $hash = unserialize(file_get_contents('https://vimeo.com/api/v2/video/' . $this->get_vimeo_ref_from_url() . '.php'));
    echo '<img src="'.$hash[0]['thumbnail_medium'].'">';
  }

  private function render_vimeo_player() {
    echo '<iframe src="https://player.vimeo.com/video/'. $this->get_vimeo_ref_from_url() .'?autoplay='. $this->autoplay .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
  }

  private function return_vimeo_player() {
      $_html = '<iframe src="https://player.vimeo.com/video/'. $this->get_vimeo_ref_from_url() .'?autoplay='. $this->autoplay .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
      return $_html;
  }

  private function get_vimeo_ref_from_url(){
    $last_bit = explode('.com/',$this->url);
    $last_bit = explode('&',$last_bit[1]);
    return $last_bit[0];
  }

  /* Youtube Stuff */

  public function the_youtube_img() {
    echo "<div class='youtube_thumb'><img src=\"https://img.youtube.com/vi/".$this->get_youtube_ref_from_url()."/0.jpg\"></div>";
  }

  private function render_youtube_player() {
    echo '<iframe class="youtube-player" type="text/html" src="https://www.youtube.com/embed/'.$this->get_youtube_ref_from_url().'?autoplay='.$this->autoplay.'&rel=0" frameborder="0"></iframe>';
  }

  public function return_the_youtube_img() {
    $_html = "";
    $_html = "<div class='youtube_thumb'><img src=\"https://img.youtube.com/vi/".$this->get_youtube_ref_from_url()."/0.jpg\"></div>";
    return $_html;
  }

  private function return_youtube_player() {
    $_html = "";
    $_html = '<iframe class="youtube-player" type="text/html" src="https://www.youtube.com/embed/'.$this->get_youtube_ref_from_url().'?autoplay='.$this->autoplay.'&rel=0" frameborder="0" allowfullscreen></iframe>';
    return $_html;
  }

  private function get_youtube_ref_from_url(){
    $last_bit = explode('v=',$this->url);
    $last_bit = explode('&',$last_bit[1]);
    return $last_bit[0];
  }

  /* Blip TV Stuff - no, me neither */

  private function get_bliptv_ref_from_url(){
    $last_bit = explode('play/',$this->url);
    $last_bit = explode('.',$last_bit[1]);
    return $last_bit[0];
  }

  private function the_bliptv_player(){
    echo '<iframe src="https://blip.tv/play/'.$this->get_bliptv_ref_from_url().'.html?p='.$this->autoplay.'" frameborder="0" allowfullscreen></iframe><embed type="application/x-shockwave-flash" src="https://a.blip.tv/api.swf#'.$this->get_bliptv_ref_from_url().'" style="display:none"></embed>';
  }

}


 ?>
