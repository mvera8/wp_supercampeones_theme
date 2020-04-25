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

<div class="container">
	<h1>Titulo</h1>
</div>

<div class="testimg"></div>

<?php if ( have_posts() ) : ?>
	<div class="hfeed">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
				<?php the_content() ?>
			</article>
		<?php endwhile; ?>
	</div>
<?php endif;

get_footer();
