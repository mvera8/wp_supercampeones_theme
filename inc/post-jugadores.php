<?php
/**
 * Adding custom post type Jugadores
 *
 * @package WP_Supercampeones_Theme
 */
function jugadores_post_type() {

	$labels = array(
		'name'                => _x( 'Jugadores', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Jugador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Jugadores', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Ver Todos', 'text_domain' ),
		'view_item'           => __( 'Ver Item', 'text_domain' ),
		'add_new_item'        => __( 'Agregar Nuevo', 'text_domain' ),
		'add_new'             => __( 'Agregar Nuevo', 'text_domain' ),
		'edit_item'           => __( 'Editar', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'jugadores', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
        'menu_icon'   => 'dashicons-admin-users',
	);
	register_post_type( 'jugadores', $args );

}
add_action( 'init', 'jugadores_post_type', 0 );
