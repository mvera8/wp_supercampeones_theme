<?php
/**
 * Add result
 *
 * @package WP_Supercampeones_Theme
 */
$args = array (
	'post_type'              => 'partidos',
	'order'                  => 'DESC',
	'posts_per_page'         => '1',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<a href="<?php the_permalink(); ?>" class="color--white">
			<p class="subtitle mb-0 light"><?php the_title() ?></p>
			<div class="row no-gutters align-items-center">
				<div class="col-4">
					<div class="team">
						<div class="team__badge">
							<img class="img--block" src="<?php echo get_theme_mod( 'wp_supercampeones_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						</div>
						<p class="subtitle mb-0"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></p>
					</div>
				</div>
				<div class="col-4">
					<div class="team__result">
						<span><?php the_field('resultado_supercampeones'); ?></span>
						<span> : </span>
						<span><?php the_field('resultado_rival'); ?></span>
					</div>
				</div>
				<div class="col-4">
					<?php
					$post_object = get_field('rival');
					if( $post_object ): 
						// override $post
						$post = $post_object;
						setup_postdata( $post ); 
						?>
					    <div class="team">
							<div class="team__badge">
								<img class="img--block" src="<?php the_post_thumbnail_url( );?>" alt="<?php echo get_the_title() ?>" />
							</div>
							<p class="subtitle mb-0"><?php echo get_the_title() ?></p>
						</div>
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				</div>
			</div>
		</a>
		<?php
	}
}
wp_reset_postdata(); ?>
