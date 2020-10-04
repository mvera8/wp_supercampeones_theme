<?php
/**
 * Add 3 blocks after intro
 *
 * @package WP_Supercampeones_Theme
 */
$blockSubtitle = get_field('carlos_subtitulo');
$blockTitle = get_field('carlos_titulo');
$blockTexto = get_field('carlos_texto');
$blockLink = get_field('carlos_link');
$blockFondo = get_field('carlos_fondo');
?>
<section id="site-block-bottom" class="site-block">
	<div class="row no-gutters">
		<div class="col-12 col-md-6 col-lg-4 d-flex flex-column flex-grow-1">
			<div class="site-block__block height--percent img--background" style="background-image: url(<?php echo $blockFondo; ?>);"></div>
		</div>
		<div class="col-12 col-md-6 col-lg-4 d-flex flex-column">
			<div class="site-block__block height--percent">
				<?php
				if ( $blockSubtitle ) {
					echo '<p class="subtitle mb-0 latoLight">' . $blockSubtitle . '</h2>';
				}
				if ( $blockTitle ) {
					echo '<h2 class="h2 mb-3">' . $blockTitle . '</h2>';
				}
				if ( $blockTexto ) {
					echo '<p>' . $blockTexto . '</p>';
				}
				if ( $blockLink ) {
					echo '<a href="' . $blockLink . '" class="btn btn--border">Ver más</a>';
				}
				?>
			</div>
		</div>
		<div class="col-12 col-lg-4 d-flex flex-column">
			<div class="site-block__block bg--black height--percent" style="background-image: url(<?php echo get_field('camiseta_fondo'); ?>);">
				<a href="<?php echo home_url('/camiseta/'); ?>" class="text-white">
					<?php
					if ( get_field('camiseta_subtitulo') ) {
						echo '<p class="subtitle mb-0 light">' . get_field('camiseta_subtitulo') . '</h2>';
					}
					if ( get_field('camiseta_titulo') ) {
						echo '<h2 class="h2">' . get_field('camiseta_titulo') . '</h2>';
					}
					?>
				</a>
			</div>
		</div>
	</div>
</section>
