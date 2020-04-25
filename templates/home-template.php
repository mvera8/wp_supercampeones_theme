<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Supercampeones_Theme
 */

get_header();
get_template_part( 'template-parts/home/carousel' );
get_template_part( 'template-parts/home/blocks-top' );
while ( have_posts() ) :
	the_post();
	echo '<div class="bg--black">';
		get_template_part( 'template-parts/page-content', get_post_format() );
	echo '</div>';
endwhile;
get_footer();
