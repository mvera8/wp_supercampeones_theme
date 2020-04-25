<?php
/**
 * Add Thumbnail Column in the admin for display thumbnail
 *
 * @package WP_Supercampeones_Theme
 */

add_filter('manage_posts_columns', 'add_thumbnail_column', 5);
function add_thumbnail_column($columns){
  $columns['new_post_thumb'] = __('Imagen destacada');
  return $columns;
}

add_action('manage_posts_custom_column', 'display_thumbnail_column', 5, 2);
function display_thumbnail_column($column_name, $post_id){
  switch($column_name){
    case 'new_post_thumb':
      $post_thumbnail_id = get_post_thumbnail_id($post_id);
      if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
        echo '<img width="50" src="' . $post_thumbnail_img[0] . '" />';
      }
      break;
  }
}
