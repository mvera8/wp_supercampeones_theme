<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Supercampeones_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="site-block__padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-7">
						<?php
						the_title( '<h1 class="h2">', '</h1>' );

						if ( has_post_thumbnail() ) {
							the_post_thumbnail('', array('class' => 'img--block'));
						}

						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/page-content', get_post_format() );
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
