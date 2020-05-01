<?php
/**
 * Add carousel
 *
 * @package WP_Supercampeones_Theme
 */
$titulo = get_field('titulo_principal');
$image = get_field('imagen');
if( !empty( $image ) ): ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<?php
			if ( get_field( 'imagen_secundaria' ) ) {
				echo '<div class="carousel__secundaria"><img src="' . get_field( 'imagen_secundaria' ) . '" alt="';
				if ( $titulo ) {
					echo strip_tags($titulo);
				} else {
					echo get_the_title();
				}
				echo '" /></div>';
			}
			?>
			<img class="img--block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<div class="carousel-caption d-none d-md-block">
				<?php
				if ( !get_field( 'ocultar_etiquta' ) ) {
					echo '<h5><span class="badge bg--important">' . get_the_title() . '</span></h5>';
				}
				if ( $titulo ) {
					echo '<h1>' . $titulo . '</h1>';
				}
				if (get_field( 'titulo_secundario' ) ) {
					echo '<h3 class="latoLight">' . get_field( 'titulo_secundario' ) . '</h3>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
