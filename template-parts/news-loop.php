<?php
/**
 * News inside loop
 *
 * @package WP_Supercampeones_Theme
 */
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
