<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Supercampeones_Theme
 */

get_header(); ?>
<div class="bg--black-gradient text-center py-4">
	<div class="container">
		<?php get_template_part( 'template-parts/result-content' ); ?>
	</div>
</div>
<?php
get_footer();
