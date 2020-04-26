<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WP_Supercampeones_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wp_supercampeones_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wp_supercampeones_theme_body_classes' );

/**
 * Returns the Breadcrumbs HTML
 */
function breadcrumbs() {
	// Check if Yoast SEO plugin is installed.
	if ( function_exists( 'yoast_breadcrumb' ) ) {
		yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumbs">', '</p>' );
	}
}

/**
 * Get words from excerpt
 */

/**
 * Custom excerpt default length-
 *
 * @param int $length The excerpt length.
 * @return int        The filtered value.
 */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Custom more text value.
 *
 * @param string $more The read more string value.
 * @return string      The filtered value.
 */
function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

/**
 * Adds a custom read more link to all excerpts, manually or automatically generated.
 *
 * @param  string $post_excerpt The post excerpt.
 * @return string               The post excerpt within a read more link.
 */
function all_excerpts_get_more_link( $post_excerpt ) {
	return $post_excerpt . '...';
}
add_filter( 'wp_trim_excerpt', 'all_excerpts_get_more_link' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 *
 * @return void
 */
function wp_supercampeones_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'wp_supercampeones_theme_pingback_header' );

/**
 * Add excerpt to the pages.
 */
add_post_type_support( 'page', 'excerpt' );
