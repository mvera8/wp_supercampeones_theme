<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Supercampeones_Theme
 */

get_header();
get_template_part( 'template-parts/carousel' );
?>
<div class="py-5">
	<div class="container">
		<div class="jugadores row justify-content-between">
			<?php
			while ( have_posts() ) :
				the_post();
				echo '<div class="col-4"><div class="jugadores__widget">';
					echo '<h4 class="latoLight jugadores__title mb-0">Resumen</h4>';
					get_template_part( 'template-parts/page-content', get_post_format() );
				echo '</div></div>';
			endwhile;
			?>

			<div class="col-4">
				<div class="jugadores__widget">
					<h4 class="latoLight jugadores__title">Datos Personales</h4>
					<?php
					if ( get_field( 'nombre_completo' ) ) {
						echo '<p><b>Nombre:</b><br /> ' . get_field( 'nombre_completo' ) . '</p>';
					}
					if ( get_field( 'fecha_de_nacimiento' ) ) {
						echo '<p><b>Fecha de nacimiento:</b><br /> ' . get_field( 'fecha_de_nacimiento' ) . '</p>';
					}
					if ( get_field( 'posicion' ) ) {
						echo '<p><b>Posición:</b><br /> ' . get_field( 'posicion' ) . '</p>';
					}
					$image = get_field('nacionalidad');
					if( !empty( $image ) ): ?>
					    <p><b>Nacionalidad:</b><br /> <img src="<?php echo esc_url($image['url']); ?>" width="40px" alt="<?php echo esc_attr($image['alt']); ?>" /></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
