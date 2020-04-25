<?php
/**
 * WP_Supercampeones_Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Supercampeones_Theme
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
* Load functions to secure your WP install.
*/
require get_template_directory() . '/inc/security.php';

/**
* Load widgets
*/
require get_template_directory() . '/inc/widgets.php';

/**
 * Load menus
 */
require get_template_directory() . '/inc/menu.php';

/**
 * Disable emojis
 */
require get_template_directory() . '/inc/disable-emojis.php';

/**
 * Enqueue scripts & styles
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Dequeue scripts & styles for theme here
 */
require get_template_directory() . '/inc/dequeue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom shortcodes for this theme.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom nav walker class to  implement the Bootstrap 3.0+ navigation style using the built in menu manager.
 *
 * @link https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Custom pagination with support for Bootstrap 3.0+
 */
require get_template_directory() . '/inc/wp-bootstrap-pagination.php';

/**
 * Custom post pagination with support for Bootstrap 3.0+
 */
require get_template_directory() . '/inc/wp-bootstrap-post-pagination.php';

/**
 * Include Site Icons
 */
require get_template_directory() . '/inc/icons.php';

/**
 * Include Theme Settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Add Thumbnail Column in the admin for display thumbnail
 */
require get_template_directory() . '/inc/thumbnail-column.php';

/**
 * Add Theme custom Customizer
 */
require get_template_directory() . '/inc/theme-customizer.php';

/**
 * Add Theme custom post types
 */
require get_template_directory() . '/inc/post-jugadores.php';
require get_template_directory() . '/inc/post-equipos.php';
require get_template_directory() . '/inc/post-partidos.php';