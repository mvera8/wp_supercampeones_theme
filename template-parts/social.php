<?php
/**
 * Add social media list
 *
 * @package WP_Supercampeones_Theme
 */
$themeOption = get_option('my_theme_option');
if($themeOption['Facebook']){
	echo '<div><a href="'.$themeOption['Facebook'].'" target="_blank">Facebook</a></div>';
}
if($themeOption['Instagram']){
	echo '<div><a href="'.$themeOption['Instagram'].'" target="_blank">Instagram</a></div>';
}
?>
