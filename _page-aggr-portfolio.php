<?php
/*
Template Name: Pagina Aggr Portfolio
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//get_header();
//https://rudrastyh.com/wordpress/ajax-post-filters.html#html
?>
<head>
<?php wp_head(); ?>
</head>
<body>
	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="GET" id="filter">
		<select name="macroSez">
		<option value="0">Offline</option>
		<option value="1">Online</option>
		<option value="2">SPS</option>
		</select>
	
	<button>Seleziona</button>
	<input type="hidden" name="action" value="myfilter">
</form>
<div id="response"></div>
	
	
	<script>
	jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});
	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<?php //get_template_part( 'includeLayout/postHead' ); ?>
<?php //get_template_part( 'includeLayout/sidebar' ); ?>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<h1><?php echo the_title();?></h1>
				<p><?php the_content(); ?></p>
				
				Poi qui si parte con i filtri<br/>
				
				<ul>
				<li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=0">Offline</a></li>
				<li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=1">Sales Point Set-up</a></li>
				<li><a href="<?php echo site_url(); ?>/portfolio/?macroSez=2">Online</a></li>
				</ul>
				
			
				<?php
				$_microSez = array();
				$_microSez = array(
					'0' => 'Editoria',
					'1' => 'Comunicazione above the line',
					'2' => 'Comunicazione belove the line',
					'3' => 'Visual',
					'4' => 'Logo design',
					'5' => 'Immagine coordinata',
					'6' => 'Shooting',
					'20' => 'Installazione',
					'21' => 'Divise',
					'22' => 'Comunicazione interna punto vendita',
					'30' => 'Web Design',
					'31' => 'SEO on-site',
					'32' => 'SEO off-site & Digital PR',
					'33' => 'Social Media',
					'34' => 'Advertising Social',
					'35' => 'Advertising Native',
					'36' => 'Advertising Display',
					'37' => 'Advertising Search',
					'38' => 'App',
					'39' => 'Conversion Rate Optimization',
					'40' => 'CRM',
					'41' => 'Web Analytics',
					'42' => 'Content Marketing',
				);
				
				$_microSezlabel = "";
				
				if(isset($_GET['macroSez'])){
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
							 'value'		=> $_GET['macroSez'],
							 'compare'	=> '=' )
							),
							
						 );
						 $the_query = new WP_Query( $args );
						 //print_r($the_query);
	 					//echo "<br/><br/><br/>Last SQL-Query: {$the_query->request}<br/><br/>";
	 					wp_reset_query();
	 					wp_reset_postdata();
						if( $the_query->have_posts() ):
							if(isset($_GET['macroSez'])):
								while( $the_query->have_posts() ) : $the_query->the_post();
									$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.get_the_id().'">'.get_the_title().'</a></li>';
								 endwhile;
							endif;
						endif;
						/*
						
					
					
					switch ($_GET['macroSez']) {
						case 0:
							for ($_i=0; $_i < 10; $_i++) {
								if(array_key_exists($_i, $_microSez)){
									$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.$_i.'">'.$_microSez[$_i].'</a></li>';
								}
							}
							break;
						case 1:
						for ($_i=20; $_i < 30; $_i++) {
							if(array_key_exists($_i, $_microSez)){
								$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.$_i.'">'.$_microSez[$_i].'</a></li>';
							}
						}
							break;
						case 2:
						for ($_i=30; $_i < 50; $_i++) {
							if(array_key_exists($_i, $_microSez)){
								$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.$_i.'">'.$_microSez[$_i].'</a></li>';
							}
						}
							break;
						default:
							for ($_i=0; $_i < 10; $_i++) {
								if(array_key_exists($_i, $_microSez)){
									$_microSezlabel .= '<li><a href="'.site_url().'/portfolio/?macroSez='.$_GET['macroSez'].'&microSez='.$_i.'">'.$_microSez[$_i].'</a></li>';
								}
							}
						break;
					}*/
					$_microSezlabel .= '</ul>';
					if(isset($_GET['microSez'])){
						$args = array(
						 'posts_per_page'	=> -1,
						 'post_type' => 'portfolio',
							'order' => 'ASC',
						 'orderby' => 'title',
						 'post_status' => 'publish',
						 'meta_query'	=> array(
	 			       'relation'		=> 'AND',
	 			       array(
	 			         'key'		=> 'servizio_associato',
	 			         'value'		=> $_GET['microSez'],
	 			         'compare'	=> 'LIKE' )
	 			     		),
								
							 );
							 //echo 'microsez';
					}else{
						$args = array(
						 'posts_per_page'	=> -1,
						 'post_type' => 'portfolio',
							'order' => 'ASC',
						 'orderby' => 'title',
						 'post_status' => 'publish',
						 'meta_query'	=> array(
	 			       'relation'		=> 'AND',
	 			       array(
	 			         'key'		=> 'categoria_lavoro',
	 			         'value'		=> $_GET['macroSez'],
	 			         'compare'	=> '=' )
	 			     		),);
							}
							echo $_microSezlabel;
				}else{
					//echo 'no get';
					//print_r($_GET);
					$args = array(
					 'posts_per_page'	=> -1,
					 'post_type' => 'portfolio',
						'order' => 'ASC',
					 'orderby' => 'title',
					 'post_status' => 'publish',
						);
				}
				
				
				

				//print_r($args);
				$the_query = new WP_Query( $args );
				//echo "<br/><br/><br/>Last SQL-Query: {$the_query->request}<br/><br/>";
				wp_reset_query();
				wp_reset_postdata();

				$_terapie = "";
				$_attivita = "";

				if( $the_query->have_posts() ):
					
					if(isset($_GET['macroSez'])){
						//echo $_GET['macroSez'];
						//print_r($_microSez);
						
						if(isset($_GET['microSez'])){
							echo '<h3>Tutti i lavori in '.get_the_title($_GET['microSez']).'</h3>';
						}else{
							$_nomeMacroSez = "";
							switch ($_GET['macroSez']) {
								case 0:
									$_nomeMacroSez = "Offline";
									break;
								case 1:
									$_nomeMacroSez = "Sales Point Set-up";
									break;
								case 2:
									$_nomeMacroSez = "Online";
									break;
								default:
									$_nomeMacroSez = "Offline";
									break;
							}
							echo '<h3>Tutti i lavori in '.$_nomeMacroSez.'</h3>';
						}
					}else{
						echo '<h3>Tutti i lavori fatti</h3>';
					}
					
					
					while( $the_query->have_posts() ) : $the_query->the_post();
					//$_imageTerapia = get_field('icona_terapia', $_singolo_terapia);
						//$_img = get_field('immagine_layout_terapie');
						/*if(get_field('tipologia_terapia')==0){
							$_terapie .= singleTerapiaAggregativa($_img['url'], get_field('nome_breve_terapia'), get_the_excerpt(), get_permalink(), $_imageTerapia);
						}else{*/
							//$_attivita .= singleTerapiaAggregativa($_img['url'], get_field('nome_breve_terapia'), get_the_excerpt(), get_permalink(), $_imageTerapia);
						//}
						echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br/>';
				 endwhile;
			endif;
				 ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php //get_footer(); ?>


<?php wp_footer(); ?>
</body>
</html>
