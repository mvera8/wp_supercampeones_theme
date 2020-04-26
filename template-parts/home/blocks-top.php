<?php
/**
 * Add 3 blocks
 *
 * @package WP_Supercampeones_Theme
 */
$blockSubtitle = get_field('players_subtitulo');
$blockTitle = get_field('players_titulo');
$blockTexto = get_field('players_texto');
$blockLink = get_field('players_link');
$blockFondo = get_field('players_fondo');
?>
<section class="site-block">
	<div class="row no-gutters">
		<div class="col-4 d-flex flex-column">
			<div class="site-block__block bg--black-gradient text-center height--percent">
				<?php get_template_part( 'template-parts/result' ); ?>
			</div>
		</div>
		<div class="col-4 d-flex flex-column">
			<div class="site-block__block height--percent">
				<?php
				if ( $blockSubtitle ) {
					echo '<p class="subtitle mb-0 light">' . $blockSubtitle . '</h2>';
				}
				if ( $blockTitle ) {
					echo '<h2 class="h2">' . $blockTitle . '</h2>';
				}
				if ( $blockTexto ) {
					echo '<p>' . $blockTexto . '</p>';
				}
				if ( $blockLink ) {
					echo '<a href="' . $blockLink . '" class="btn btn-primary">Ver más</a>';
				}
				?>
			</div>
		</div>
		<div class="col-4 d-flex flex-column flex-grow-1">
			<div class="site-block__block height--percent img--background" style="background-image: url(<?php echo $blockFondo; ?>);"></div>
		</div>
	</div>
</section>
