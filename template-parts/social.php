<?php
/**
 * Add social media list
 *
 * @package WP_Supercampeones_Theme
 */
$themeOption = get_option('my_theme_option');
if ($themeOption) {
	echo '<ul class="list-inline list__social">';
	if($themeOption['Facebook']){
		echo '<li class="list-inline-item"><a href="'.$themeOption['Facebook'].'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
	}
	if($themeOption['Instagram']){
		echo '<li class="list-inline-item"><a href="'.$themeOption['Instagram'].'" target="_blank"><i class="fab fa-instagram"></i></a></li>';
	}
	echo '</ul>';
}
?>
