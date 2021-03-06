<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Supercampeones_Theme
 */

get_header();
get_template_part( 'template-parts/carousel' );
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<main id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
			<div class="py-5">
				<div class="container">
					<?php the_content() ?>
				</div>
			</div>
		</main>
	<?php endwhile; ?>
<?php endif;
get_footer();
