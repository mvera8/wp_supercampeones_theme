<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Supercampeones_Theme
 */

?>

	<?php if ( is_active_sidebar( 'logos-1' ) ) { ?>
		<section class="logos bg--blue site-block__padding">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<?php dynamic_sidebar( 'logos-1' ); ?>
				</div>
			</div>
		</section>
	<?php } ?>

	<footer class="footer-site bg--black">
		<div class="container py-5">
			<div class="row">
				<div class="col-12 col-sm-8">
					<div class="row">
						<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
							<?php dynamic_sidebar( 'footer-1' ); ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="footer-site__widget">
						<h3 class="color--primary footer-site__title">Siguenos en</h3>
						<?php get_template_part( 'template-parts/social' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-site__copyright site-block__padding">
			<div class="container text-right">
				<a class="link" href="http://martinvera.com.uy/" target="_blank">
					<div class="martinvera"></div>
				</a>
				<p><?php echo esc_html( '© ' . get_bloginfo( 'name' ) . ' ' . gmdate( 'Y' ) . ' - Todos los derechos reservados.' ); ?></p>
			</div>
		</div>
		<?php do_action( 'before_footer_close_tag' ); ?>
	</footer>
	<?php wp_footer(); ?>
	<?php do_action( 'before_body_close_tag' ); ?>
</body>
</html>
