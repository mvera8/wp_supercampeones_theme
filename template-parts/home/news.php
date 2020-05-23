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
					get_template_part( 'template-parts/news-loop' );
				}
				?>
			</div>
			<p class="news__button text-center"><a href="<?php echo home_url('/novedades/'); ?>" class="btn btn--border">Ver más novedades</a></p>
		</div>
	</section>
	<?php
}
wp_reset_postdata(); ?>		
