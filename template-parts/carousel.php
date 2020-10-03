<?php
/**
 * Add carousel
 *
 * @package WP_Supercampeones_Theme
 */
$titulo = get_field('titulo_principal');
$titulo_secundario = get_field('titulo_secundario');
$imagen_secundaria = get_field('imagen_secundaria');
$image = get_field('imagen');
if( !empty( $image ) ): ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<?php
			if ( $imagen_secundaria ) {
				echo '<div class="carousel__secundaria"><img src="' . $imagen_secundaria . '" alt="';
				if ( $titulo ) {
					echo strip_tags($titulo);
				} else {
					echo get_the_title();
				}
				echo '" />';
				if ( is_singular( 'jugadores' ) ) {
					echo '<div class="square carousel__square"></div>';
				}
				echo '</div>';
			}
			?>
			<img class="img--block carousel__bg" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<div class="carousel-caption">
				<?php
				if ( !get_field( 'ocultar_etiquta' ) ) {
					echo '<h5><span class="badge bg--important">' . get_the_title() . '</span></h5>';
				}
				if ( $titulo ) {
					echo '<h1>' . $titulo . '</h1>';
				}
				if ( $titulo_secundario ) {
					echo '<h3 class="latoLight">' . $titulo_secundario . '</h3>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
