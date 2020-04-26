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
		<header class="page-header bread-crumbs">
			<?php breadcrumbs(); ?>
		</header><!-- .page-header -->
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/page-content', get_post_format() );
		endwhile;
		?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
