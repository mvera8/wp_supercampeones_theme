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
			<div class="py-5">
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
								$imagen_secundaria = get_field('imagen_secundaria');
								?>
								<div class="col-4">
									<a href="<?php the_permalink(); ?>">
										<div class="individual relative">
											<div class="individual__image square" style="background-image: url(<?php echo $imagen_secundaria; ?>);"></div>
											<h4 class="individual__title"><?php the_title() ?></h4>
											<h2 class="individual__gradient"><?php the_title() ?></h2>
										</div>
									</a>
								</div>
								<?php
							}
							?>
						</div>
						<?php
					}
					wp_reset_postdata(); ?>
					
				</div>
			</div>
		</main>
	<?php endwhile; ?>
<?php endif;
get_footer();
