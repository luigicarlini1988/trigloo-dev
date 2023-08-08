<?php
global $_ver;
$_ver = "0.0.6";
$detect = new Mobile_Detect;
 ?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php get_template_part( 'inc/gtmHead' ); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/splide.min.css?v=<?php echo $_ver; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stiloso.css?v=<?php echo $_ver; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=<?php echo $_ver; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo $_ver; ?>">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <?php /*
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js?v=<?php echo $_ver; ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js?v=<?php echo $_ver; ?>"></script>
    */ ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/stick.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/paroller.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-menu.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animatext.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>

    <?php if(is_front_page()): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-home.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-home.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
      $(document).ready(function(){
         $(".titolone , .titolo, .tito ").animatext({
            mode:"words"
          });
          $(".skeda-mob .tito").animatext({
             speed: 50
           });
          $(".testo-intro").animatext({
             mode:"words",
             speed: 50
           });
           $(".testone").animatext({
              mode:"words",
              speed: 30
            });
        });
      </script>
    <?php endif; ?>
    <?php if(is_page(209)): //id pagina chi siamo ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-chi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-chi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <?php endif; ?>
    <?php if(is_page(211)): //id pagina contatti ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-contatti.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-contatti.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function(){
             $(".titolone , .titolo, .titolino ").animatext({
                mode:"words"
              });
              $(".titolos").animatext({
                 speed: 50
               });
              $(".testo-intro").animatext({
                 mode:"words",
                 speed: 50
               });
          });
      </script>
    <?php endif; ?>
    <?php if(is_page(57) || is_page(13)|| is_page(857)): //id aggr pagina servizi ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-servizi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-servizi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function(){
             $(".titolone , .titolo ").animatext({
                mode:"words"
              });
              $(".titolos").animatext({
                 speed: 50
               });
              $(".testo-intro").animatext({
                 mode:"words",
                 speed: 50
               });
          });
      </script>
    <?php endif; ?>
    <?php if(is_singular( 'servizio' ) || is_singular( 'case-study' ) ): //pag aggreg portfolio ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-servizi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-servizio-esploso.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function(){
             $(".titolone , .titolo, .titolino ").animatext({
                mode:"words"
              });
              $(".titolos").animatext({
                 speed: 50
               });
              $(".testo-intro").animatext({
                 mode:"words",
                 speed: 50
               });
          });
      </script>
    <?php endif; ?>

    <!-- page case study -->
    <?php if( is_page_template('page-aggr-case-study.php')  ) :?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-servizi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-servizi.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
    <?php endif;?>

    <?php if(is_singular( 'portfolio' )): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/splide.min.js"></script>
      <script>
      document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider' ).mount();
      } );
    </script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-template-lavoro.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-lavoro-esploso.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function(){
             $(".titolone , .titolo, .titolino ").animatext({
                mode:"words"
              });
              $(".titolos").animatext({
                 speed: 50
               });
              $(".testo-intro").animatext({
                 mode:"words",
                 speed: 50
               });
          });
      </script>
    <?php endif; ?>
    <?php if(is_404()): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/js/animazioni-404.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/onscreen-404.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
      <script>
      $(document).ready(function(){
         $(".titolone , .titolo ").animatext({
            mode:"words"
          });
          $(".testo-intro").animatext({
             mode:"words",
             speed: 50
           });
           $(".testone").animatext({
              mode:"words",
              speed: 30
            });
          });
      </script>
      <style>
        #header-home.qzq {
        padding-bottom:200px;
        overflow:hidden;
      }
        #trigloo-anima.qzq {
        width:100%;
      }
        #quat {
            font-size: 550px;
          font-weight: 700;
          color: #f7f7f7;
          left: 0;
          position: absolute;
          top: 40px;
          line-height:1;
          filter: blur(40px);
          -webkit-filter: blur(40px);
          -moz-filter: blur(40px);
          transition-duration:3s;
          z-index:0;
          pointer-events: none;
        }
      #quat.in {
        filter: blur(0px);
        -webkit-filter: blur(0px);
        -moz-filter: blur(0px);
      }
        #quabis {
        width: fit-content;
        position: absolute;
        left: calc(75% - 47px);
        writing-mode: vertical-rl;
        text-orientation: upright;
        font-size: 80px;
        font-weight: 100;
        top: 180px;
        color: #f23d57;
        filter: blur(40px);
        -webkit-filter: blur(40px);
        -moz-filter: blur(40px);
        transition-duration:2s;
        }
        #quabis.in {
        filter: blur(0px);
        -webkit-filter: blur(0px);
        -moz-filter: blur(0px);
      }
        .qzq-cta {
        padding-top:60px;
        z-index:10;
        position:relative;
      }
        .qzq-cta .small-cta {
        margin:0px auto;
      }
        @media screen and (max-width: 800px) {
        #quabis {
          display:none;
        }
          #trigloo-anima.qzq {
            width: 100%;
            transform: scale(1);
        }
          #quat {
          font-size: 330px;
          top:550px;
        }
      }
        @media screen and (max-width: 500px) {
        #quat {
            font-size: 150px;
            top: 530px;
        }
      }
      </style>
    <?php endif; ?>

    <?php /*
		if( !$detect->isMobile() && !$detect->isTablet() ): ?>
 			<script src="<?php echo get_template_directory_uri(); ?>/js/cursor.js?v=<?php echo $_ver; ?>" type="text/javascript"></script>
		<?php endif; */?>
	</head>
	<body <?php body_class(); ?>>
	<?php get_template_part( 'inc/gtmBody' ); ?>
		<?php unset($detect); ?>