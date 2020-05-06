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

				<?php 
				$args = array (
					'post_type'              => 'jugadores',
					'order'                  => 'DESC',
					'posts_per_page'         => -1,
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					?>
					<div class="row">
						<?php
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
							<div class="col-4">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</div>
							<?php			            	
						}
						?>
					</div>
					<?php
				}
				wp_reset_postdata(); ?>
				
			</div>
		</main>
	<?php endwhile; ?>
<?php endif;
get_footer();
