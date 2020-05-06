<?php
/**
 * Add News to the home
 *
 * @package WP_Supercampeones_Theme
 */


$args = array (
	'post_type'              => 'post',
	'order'                  => 'DESC',
	'posts_per_page'         => '3',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="site-block news py-5 bg--gray">
		<div class="container">
			<h2 class="h2 text-center">últimas novedades</h2>
			<div class="row">
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<div class="col-12 col-md-4">
						<div class="news__block height--percent shadow">
							<div class="news__img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('post-mobile', array('class' => 'img--block')); ?>
								</a>
							</div>
							<div class="news__text site-block__block">
								<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
								    echo wp_kses_post( '<h5><span class="badge bg--important">' . $categories[0]->name . '</span></h5>' );   
								}
								?>
								<h3 class="h3">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<p class="news__button text-center"><a href="<?php echo home_url('/novedades/'); ?>" class="btn btn--border">Ver más novedades</a></p>
		</div>
	</section>
	<?php
}
wp_reset_postdata(); ?>		
