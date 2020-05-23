<?php
/**
 * Create our custom shortcodes
 *
 * @package WP_Supercampeones_Theme
 */

function shortcode_result( $atts ) {
	ob_start();
	$shortcode_atts = shortcode_atts(
	array(
		'id' => 'default',
	), $atts );
	
	echo '<div class="bg--black-gradient text-center mt-5 relative"><span class="match-report">Reporte del partido</span>';
	set_query_var('result_game', $shortcode_atts['id']);
	get_template_part( 'template-parts/result' );
	echo '</div>';
	return ob_get_clean();
}
add_shortcode('result', 'shortcode_result');
