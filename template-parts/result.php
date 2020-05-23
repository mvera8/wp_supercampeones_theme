<?php
/**
 * Add result
 *
 * @package WP_Supercampeones_Theme
 */

$result_game = get_query_var( 'result_game' );
if ( $result_game ) {
	$args = array (
		'post_type'              => 'partidos',
		'order'                  => 'DESC',
		'posts_per_page'         => '1',
		'p' => $result_game,
	);
} else {
	$args = array (
		'post_type'              => 'partidos',
		'order'                  => 'DESC',
		'posts_per_page'         => '1',
	);
}

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<a href="<?php the_permalink(); ?>" class="color--white">
			<?php get_template_part( 'template-parts/result-content' ); ?>
		</a>
		<?php
	}
}
?>
