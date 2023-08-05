<?php
/*CPT x portfolio*/
function create_job_cpt() {

	$labels = array(
		'name' => __( 'portfolio', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Portfolio', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Portfolio', 'textdomain' ),
		'name_admin_bar' => __( 'Portfolio', 'textdomain' ),
		'archives' => __( 'Portfolio Archivio', 'textdomain' ),
		'attributes' => __( 'Portfolio Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'textdomain' ),
		'all_items' => __( 'Tutti i Lavori', 'textdomain' ),
		'add_new_item' => __( 'Nuovo Lavoro', 'textdomain' ),
		'add_new' => __( 'Nuovo Lavoro', 'textdomain' ),
		'new_item' => __( 'New Lavoro', 'textdomain' ),
		'edit_item' => __( 'Modifica Lavoro', 'textdomain' ),
		'update_item' => __( 'Aggiorna Lavoro', 'textdomain' ),
		'view_item' => __( 'Vedi Lavoro', 'textdomain' ),
		'view_items' => __( 'Vedi Lavori', 'textdomain' ),
		'search_items' => __( 'Cerca Lavori', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Lavoro', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Lavoro', 'textdomain' ),
		'items_list' => __( 'Lavori list', 'textdomain' ),
		'items_list_navigation' => __( 'Lavori list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Lavori list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'consulente', 'textdomain' ),
		'description' => __( 'Inserisci un nuovo Lavoro', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields','author', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_job_cpt', 0 );

/*CPT x cliente*/
function create_casestudy_cpt() {

	$labels = array(
		'name' => __( 'Case Study', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Case Study', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Case Study', 'textdomain' ),
		'name_admin_bar' => __( 'Case Study', 'textdomain' ),
		'archives' => __( 'Case Study Archivio', 'textdomain' ),
		'attributes' => __( 'Case Study Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Case Study:', 'textdomain' ),
		'all_items' => __( 'Tutti i Case Study', 'textdomain' ),
		'add_new_item' => __( 'Nuovo Case Study', 'textdomain' ),
		'add_new' => __( 'Nuovo Case Study', 'textdomain' ),
		'new_item' => __( 'New Case Study', 'textdomain' ),
		'edit_item' => __( 'Modifica Case Study', 'textdomain' ),
		'update_item' => __( 'Aggiorna Case Study', 'textdomain' ),
		'view_item' => __( 'Vedi Case Study', 'textdomain' ),
		'view_items' => __( 'Vedi Case Study', 'textdomain' ),
		'search_items' => __( 'Cerca Case Study', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Case Study', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Case Study', 'textdomain' ),
		'items_list' => __( 'Case Study list', 'textdomain' ),
		'items_list_navigation' => __( 'Case Study list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Case Study list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'case-study', 'textdomain' ),
		'description' => __( 'Inserisci un nuovo Case Study', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields','author', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'case-study', $args );

}
add_action( 'init', 'create_casestudy_cpt', 0 );

function create_skill_cpt() {

	$labels = array(
		'name' => __( 'servizi', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Servizio', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Servizi', 'textdomain' ),
		'name_admin_bar' => __( 'Servizi', 'textdomain' ),
		'archives' => __( 'Servizi Archivio', 'textdomain' ),
		'attributes' => __( 'Servizi Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Servizi:', 'textdomain' ),
		'all_items' => __( 'Tutti i Servizi', 'textdomain' ),
		'add_new_item' => __( 'Nuovo Servizio', 'textdomain' ),
		'add_new' => __( 'Nuovo Servizio', 'textdomain' ),
		'new_item' => __( 'New Servizio', 'textdomain' ),
		'edit_item' => __( 'Modifica Servizio', 'textdomain' ),
		'update_item' => __( 'Aggiorna Servizio', 'textdomain' ),
		'view_item' => __( 'Vedi Servizio', 'textdomain' ),
		'view_items' => __( 'Vedi Servizi', 'textdomain' ),
		'search_items' => __( 'Cerca Servizio', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Servizio', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Servizio', 'textdomain' ),
		'items_list' => __( 'Servizi list', 'textdomain' ),
		'items_list_navigation' => __( 'Servizi list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Servizi list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'servizio', 'textdomain' ),
		'description' => __( 'Inserisci un nuovo servizio', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields','author', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'servizio', $args );

}
add_action( 'init', 'create_skill_cpt', 0 );

 ?>
