<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Supercampeones_Theme
 */

get_header();
get_template_part( 'template-parts/carousel' );
get_template_part( 'template-parts/home/blocks-top' );
?>
<div class="bg--secondary py-5">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-12 col-md-4 bg--ball"></div>
			<div class="col-12 col-md-8">
				<div class="py-5 px-5 bg--black-gradient">
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
</div>
<?php
get_template_part( 'template-parts/home/blocks-bottom' );
get_template_part( 'template-parts/home/news' );
get_footer();
