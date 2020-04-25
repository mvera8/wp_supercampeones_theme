<?php
/**
 * Theme basic setup
 *
 * @package WP_Supercampeones_Theme
 */

if ( ! function_exists( 'wp_supercampeones_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_supercampeones_theme_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WP_Supercampeones_Theme, use a find and replace
		* to change 'WP_Supercampeones_Theme' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'WP_Supercampeones_Theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 50,
				'width'       => 100,
				'flex-height' => true,
			)
		);

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Adding preheader image.
		$args = array(
			'flex-width'    => true,
			'width'         => 980,
			'flex-height'   => true,
			'height'        => 200,
			'default-image' => get_template_directory_uri() . '/assets/images/header.jpg',
		);
		add_theme_support( 'custom-header', $args );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		* Comments are fully disabled by default.
		* Uncomment the line below to renable them.
		*
		* add_theme_support( 'comments' );
		*/
	}
endif;
add_action( 'after_setup_theme', 'wp_supercampeones_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_supercampeones_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_supercampeones_theme_content_width', 640 );
}

add_action( 'after_setup_theme', 'wp_supercampeones_theme_content_width', 0 );

/**
 * Disable unwanted pages: Archive, Author
 *
 * @param  WP_Query $query Instance of WP_Query.
 * @return void
 */
function redirect_to_404( $query ) {
	if ( is_date() || is_author() ) {
		$query->set_404();
	}
}

add_action( 'parse_query', 'redirect_to_404' );

/**
 * New sizes Thumbnail
 *
 * @return void
 */
function new_sizes_images() {
	add_image_size( 'post-detail', 730, 440, true );
	add_image_size( 'post-mobile', 550, 332, true );
	add_image_size( 'cover-featured-post', 445, 435, array( 'left', 'center' ) );
	add_image_size( 'cover-category', 350, 200, true );
	add_image_size( 'cover-post', 300, 200, true );
}

add_action( 'after_setup_theme', 'new_sizes_images' );

/**
 * Allows to upload .svg files.
 *
 * @param array $mimes Allowed mime types.
 * @return array $mimes Allowed mime types.
 */
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );

/**
 * Remove wp version param from any enqueued scripts
 *
 * @param string $src The WordPress core version.
 * @return string $src The WordPress core version.
 */
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) !== false ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}

add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/**
 * Remove wp-embed
 *
 * @return void
 */
function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );
