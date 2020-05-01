<?php
/**
 * Template Name: Jugadores Template
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
			<div class="container">
				<div class="row">
					<div class="col-4">
						
					</div>
				</div>
			</div>
		</main>
	<?php endwhile; ?>
<?php endif;
get_footer();
