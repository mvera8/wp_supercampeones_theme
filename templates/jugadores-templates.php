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
								<div class="col-12 col-md-6 col-lg-3">
									<a href="<?php the_permalink(); ?>">
										<div class="individual relative">
											<div class="individual__image square" style="background-image: url(<?php echo $imagen_secundaria; ?>);"></div>
											<div class="individual__text">
												<?php
												$nombre = get_field('nombre');
												$apellido = get_field('apellido');
												$numero = get_field('numero');
												?>
												<h3 class="individual__text__title">
													<strong><?php echo wp_kses_post( $numero ) ?></strong>
													<?php echo wp_kses_post( $nombre ) ?>
													<strong><?php echo wp_kses_post( $apellido ) ?></strong>
												</h3>
												<?php
												$apodo = get_field('apodo');
												if ( $apodo ) {
													echo '<h2 class="individual__text__gradient">' . wp_kses_post( $apodo ) . '</h2>';
												}
												?>
											</div>
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
