<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wp_exodus
 */

/**
 * Add favicon related code.
 */
function add_icons() {
	?>

<!-- Icons -->
<link rel="shortcut icon" 							href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/favicon.ico' ); ?>" type="image/x-icon" />
<link rel="apple-touch-icon"      sizes="57x57" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-57x57.png' ); ?> ">
<link rel="apple-touch-icon"      sizes="60x60" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-60x60.png' ); ?> ">
<link rel="apple-touch-icon"      sizes="72x72" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-72x72.png' ); ?> ">
<link rel="apple-touch-icon"      sizes="76x76" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-76x76.png' ); ?> ">
<link rel="apple-touch-icon"      sizes="114x114" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-114x114.png' ); ?>">
<link rel="apple-touch-icon"      sizes="120x120" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-120x120.png' ); ?>">
<link rel="apple-touch-icon"      sizes="144x144" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-144x144.png' ); ?>">
<link rel="apple-touch-icon"      sizes="152x152" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-152x152.png' ); ?>">
<link rel="apple-touch-icon"      sizes="180x180" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/apple-icon-180x180.png' ); ?>">
<link rel="icon" type="image/png" sizes="192x192"  	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/android-icon-192x192.png' ); ?>">
<link rel="icon" type="image/png" sizes="32x32" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/favicon-32x32.png' ); ?>">
<link rel="icon" type="image/png" sizes="96x96" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/favicon-96x96.png' ); ?>">
<link rel="icon" type="image/png" sizes="16x16" 	href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/favicon-16x16.png' ); ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/ms-icon-144x144.png' ); ?>">
<meta name="theme-color" 			 content="#ffffff">

	<?php
}
add_action( 'wp_head', 'add_icons' );
