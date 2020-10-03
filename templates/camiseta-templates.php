<?php
/**
 * Template Name: Camiseta Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Supercampeones_Theme
 */

get_header();
get_template_part( 'template-parts/carousel' );
?>
<main id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
	<section class="bg--black">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12 col-md-6 bg--secondary">
					<div class="py-5 px-5">
						<?php $camiseta = get_field( 'camiseta' ); ?>
						<img class="img--block" src="<?php echo esc_url($camiseta); ?>" alt="Camiseta" />
					</div>
				</div>

				<div class="col-12 col-md-6">
					<?php $equipo = get_field( 'equipo' ); ?>
					<img class="img--block" src="<?php echo esc_url($equipo); ?>" alt="Equipo" />
					<div class="py-5 px-5">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/page-content', get_post_format() );
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg--black-gradient">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5">
					<?php $equipo_chica = get_field( 'equipo_chica' ); ?>
					<img class="img--block" src="<?php echo esc_url($equipo_chica); ?>" alt="Equipo chica" />
				</div>

				<div class="col-12 col-md-7">
					<div class="py-5">
						<div class="row align-items-end">
							<div class="col-4">
								<?php $golero = get_field( 'golero' ); ?>
								<img class="img--block" src="<?php echo esc_url($golero); ?>" alt="Golero" />
							</div>
							<div class="col-8">
								<h2 class="h2 mb-3 text-white"><div class="color--shine">Ramonde </div>Nuestro angel del arco</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
