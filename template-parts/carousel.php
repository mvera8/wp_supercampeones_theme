<?php
/**
 * Add carousel
 *
 * @package WP_Supercampeones_Theme
 */
$image = get_field('imagen');
if( !empty( $image ) ): ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="img--block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<div class="carousel-caption d-none d-md-block">
				<h5><span class="badge bg--important"><?php the_title() ?></span></h5>
				<h1>Super<br />
				campeones<br />
				<span class="color--black">de antes</span></h1>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
