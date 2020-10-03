<?php
/**
 * WP_Supercampeones_Theme widgets definitions
 *
 * @package WP_Supercampeones_Theme
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_supercampeones_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'WP_Supercampeones_Theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'WP_Supercampeones_Theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Logos', 'WP_Supercampeones_Theme' ),
			'id'            => 'logos-1',
			'description'   => esc_html__( 'Add images of logos here.', 'WP_Supercampeones_Theme' ),
			'before_widget' => '<div class="text-center logos__item">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="d-none">',
			'after_title'   => '</span>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'WP_Supercampeones_Theme' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets for footer here.', 'WP_Supercampeones_Theme' ),
			'before_widget' => '<div class="col-md-auto footer-site__widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="color--primary footer-site__title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'wp_supercampeones_theme_widgets_init' );
