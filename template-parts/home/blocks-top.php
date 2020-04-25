<?php
/**
 * Add 3 blocks
 *
 * @package WP_Supercampeones_Theme
 */
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
				<p class="subtitle mb-0 light">Skilss & Stuff</p>
				<h2 class="h2"><span>#</span>LosPlayers</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nibh magna.</p>
				<a href="#" class="btn btn-link">Jugadores</a>
			</div>
		</div>
		<div class="col-4 d-flex flex-column flex-grow-1">
			<div class="site-block__block height--percent" style="background-color: red;"></div>
		</div>
	</div>
</section>
