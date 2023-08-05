<?php

function disturbo_columns_head($defaults) {
    $defaults['align'] = 'Align';
    $defaults['order'] = 'Order';
    return $defaults;
}
function disturbo_columns_content($column_name, $post_ID) {
    if ($column_name == 'align') {
      $_allineamento = get_field('allineamento_desktop_disturbo', $post_ID);
      echo $_allineamento['label'];
    }
    if ($column_name == 'order') {
      $_order = get_field('ordine_di_visualizzazione_terapia', $post_ID);
      echo $_order;
    }
}
function set_custom_disturbo_sortable_columns( $columns ) {
  $columns['order'] = 'Order';
  $columns['ordine_di_visualizzazione_terapia'] = 'ordine_di_visualizzazione_terapia';
  return $columns;
}

//add_filter('manage_disturbo_posts_columns', 'disturbo_columns_head');
//add_action('manage_disturbo_posts_custom_column', 'disturbo_columns_content', 10, 2);
//add_filter( 'manage_edit-disturbo_sortable_columns', 'set_custom_disturbo_sortable_columns' );

function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );

if (is_user_logged_in()) {
    show_admin_bar(true);
}


/* MODIFICO IL VISUAL COMPOSER */
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
//add_filter('mce_buttons_2', 'wpb_mce_buttons_2');


function my_mce_before_init_insert_formats( $init_array ) {

	$style_formats = array(
		array(
			'title' => 'Fade Effect',
			'block' => 'div',
			'classes' => 'wow fadeInUp',
			'wrapper' => true,

		),
		array(
			'title' => 'Titoletto',
			'block' => 'p',
			'classes' => 'titoletto',
			'wrapper' => true,
		),
		/*array(
			'title' => 'Red Button',
			'block' => 'span',
			'classes' => 'red-button',
			'wrapper' => true,
		),*/
	);
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
//add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

/*FACCIO CAZZATE*/
function add_Franzo_dashboard_widgets() {
$current_user = wp_get_current_user();
  //if($current_user->user_login=="trigloo_admin"){
    wp_add_dashboard_widget(
                   'example_dashboard_widget',         // Widget slug.
                   'Sviluppato con amore da',         // Title.
                   'franzo_dashboard_widget_function' // Display function.
          );

  //}
}


//add_action( 'wp_dashboard_setup', 'add_Franzo_dashboard_widgets' );
function franzo_dashboard_widget_function() {
  echo '<img src="'.site_url().'/wp-content/themes/Divi-Fisiologic/img/logo_trigloo_positivo.png">';
	//echo '<img src="'.site_url().'/wp-content/themes/Divi-Fisiologic/img/logo-admin.gif">";
}

function my_login_logo_one() {
?>
<style type="text/css">
body.login div#login h1 a {
 background-image: url("<?php echo get_template_directory_uri(); ?>/img/logo-trigloo.gif");
 background-size:300px!important;
padding-bottom: 5px;
width: 300px; height: 60px;
}
</style>
 <?php
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

function my_custom_dashboard_name(){
    if ( $GLOBALS['title'] != 'Bacheca' ){
        return;
    }

        $GLOBALS['title'] =  __( 'Amministrazione sito Trigloo' );
}

add_action( 'admin_head', 'my_custom_dashboard_name' );

//da mese numerico lo trasformo in italiano
function mese($_mese) {
  $_mesi = array ("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"  );
	return $_mesi[$_mese-1];
}

function date_StoP($query) {
	$_mesi= array("gennaio","febbraio","marzo","aprile","maggio","giugno","luglio","agosto","settembre","ottobre","novembre","dicembre");
    $result = substr($query,-2,2)." ".$_mesi[substr($query,-5,2)-1]." ".substr($query,0,4);
    return $result;
}

//rimuovere la versione di Wordpress in uso dall'header
function wp_remove_version() {
	return '';
}
add_filter('the_generator', 'wp_remove_version');

function dinamic_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM $wpdb->posts WHERE post_status = 'publish'");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}


function youtubePer($_content){
  $_html = "";
  $_html = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<div class=\"rwd-video\"><iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$1?rel=0\" frameborder=\"0\" allowfullscreen></iframe></div>",$_content);
  return $_html;
}

function youtubeID($_url){
  $video_id = explode("?v=", $_url); // For videos like http://www.youtube.com/watch?v=...
  if (empty($video_id[1]))
      $video_id = explode("/v/", $_url); // For videos like http://www.youtube.com/watch/v/..

  $video_id = explode("&", $video_id[1]); // Deleting any other params
  $video_id = $video_id[0];

  return $video_id;
}

add_filter('use_block_editor_for_post', '__return_false');


 ?>
