<!-- The cursor elements 
  <div class="cursor cursor--small"></div>
  <canvas class="cursor cursor--canvas" resize></canvas>-->

<div id="menu-button">
    <div id="mbl1"></div>
    <div id="mbl2"></div>
    <div id="mbl3"></div>
</div>


<?php if(is_page(211)){ ?> 
<div id="fixed-UI-left">
        <div id="logo" class="out"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="logo trigloo" /></a></div>
        <div id="icoo" class="in"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icoo-w.png" alt="logo trigloo" /></a></div>
</div>
<div id="fixed-UI-left-mob" class="in">
  <div id="mob-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="logo trigloo" /></a></div>
  <div id="mob-icoo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icoo-w.png" alt="logo trigloo" /></a></div>
</div>
<?php }else{ ?> 


<div id="fixed-UI-left">
  <div id="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" alt="logo trigloo"/></a></div>
  <div id="icoo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icoo.png" alt="logo trigloo" /></a></div>
  <div id="center-sx">
    <div id="wwd">What we do</div>
    <div id="swk">Some Works</div>
  </div>
</div>

<div id="fixed-UI-left-mob">
  <div id="mob-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" alt="logo trigloo"/></a></div>
  <div id="mob-icoo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icoo.png" alt="logo trigloo" /></a></div>
</div>
<?php } ?>

<div id="fixed-UI-right">

  <div id="parliamo">
    <a href="<?php echo get_permalink(211); ?>" class="link">Parliamoci</a>
  </div>
  <div id="social">
      <a href="https://www.facebook.com/trigloo.adv/" target="_blank" rel="nofollow">
        <div class="soc-int">
          <img src="<?php echo get_template_directory_uri(); ?>/img/face.png"/>
        </div>
      </a>

      <a href="https://www.linkedin.com/company/trigloo/about/" target="_blank" rel="nofollow">
        <div class="soc-int">
          <img src="<?php echo get_template_directory_uri(); ?>/img/in.png"/>
        </div>
      </a>

      <a href="https://www.instagram.com/trigloo/?hl=en" target="_blank" rel="nofollow">
        <div class="soc-int">
          <img src="<?php echo get_template_directory_uri(); ?>/img/twitt.png"/>
        </div>
      </a>

  </div>
</div>
