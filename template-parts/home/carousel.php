<?php
/**
 * Add carousel
 *
 * @package WP_Supercampeones_Theme
 */
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	</ol>

	<div class="carousel-inner">
		<div class="carousel-item active">
			<?php
			$image = get_field('imagen');
			if( !empty( $image ) ): ?>
			    <img class="img--block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			<div class="carousel-caption d-none d-md-block">
				<h5>Supercampeones de antes</h5>
			</div>
		</div>
	</div>

	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
