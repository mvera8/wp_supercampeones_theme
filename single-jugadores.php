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
<div class="site-block__padding">
	<div class="container">
		<div class="jugadores row justify-content-between">
			<div class="col-12 col-md-4">
				<?php
				while ( have_posts() ) :
					the_post();
					echo '<div class="jugadores__widget">';
						echo '<h4 class="latoLight jugadores__title mb-0">Resumen</h4>';
						get_template_part( 'template-parts/page-content', get_post_format() );
					echo '</div>';
				endwhile;
				?>

				<?php
				$nombre = get_the_title();
				$args = array (
					'post_type'              => 'partidos',
					'posts_per_page'         => -1,
				);
				$count = $partidos = 0;
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						$partidos++;
						$posts = get_field('jugadores');
						if( $posts ) {
							foreach( $posts as $post):
								setup_postdata($post);
								if ( get_the_title() === $nombre ) {
									$count++;
								}
							endforeach;
						}
					}
					if ($count > 0) {
						$value = ($count/$partidos) * 100;
						echo '<div class="jugadores__widget"><h4 class="latoLight jugadores__title">Estadísticas</h4>
							<div class="progress mx-auto" data-value="' . $value . '">
								<span class="progress-left">
									<span class="progress-bar border-primary"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar border-primary"></span>
								</span>
								<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
									' . $count . ' / ' . $partidos . '
								</div>
							</div>
							<p class="text-center"><b>Partidos jugados</b></p>
						</div>';
					}
				}
				wp_reset_postdata();
				?>
			</div>

			<div class="col-12 col-md-4">
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

				<?php if ( get_field( 'copa_de_plata_2010' ) ) { ?>
					<div class="jugadores__widget">
						<h4 class="latoLight jugadores__title">Palmares</h4>
						<div class="jugadores__palmares">
							<div class="row align-items-center">
								<div class="col-12 col-sm-4">
									<div class="jugadores__palmares__copa"></div>
								</div>
								<div class="col-12 col-sm-8">
									<h4>Copa de Plata 2010</h4>
									<p>Carlos El Trofeo <br />Boston River</p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
