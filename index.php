<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Supercampeones_Theme
 */

get_header(); ?>

<section class="site-block news py-5 bg--gray">
	<div class="container">
		<h1 class="h1 text-center">Novedades</h1>
		<div class="row">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/news-loop' );
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>

<?php get_footer();
