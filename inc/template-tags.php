<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WP_Supercampeones_Theme
 */

if ( ! function_exists( 'wp_supercampeones_theme_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function wp_supercampeones_theme_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s:  Link to post markup*/
			esc_html_x( 'Posted on %s', 'post date', 'WP_Supercampeones_Theme' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s:  Author data */
			esc_html_x( 'by %s', 'post author', 'WP_Supercampeones_Theme' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // phpcs:ignore XSS OK.

	}
endif;

if ( ! function_exists( 'wp_supercampeones_theme_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function wp_supercampeones_theme_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ', ', 'WP_Supercampeones_Theme' ) );
			if ( $categories_list && wp_supercampeones_theme_categorized_blog() ) {
				/* translators: used between list items, there is a space after the comma */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'WP_Supercampeones_Theme' ) . '</span>', $categories_list ); // phpcs:ignore XSS OK.
			}

			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'WP_Supercampeones_Theme' ) );
			if ( $tags_list ) {
				/* translators: used between list items, there is a space after the comma */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'WP_Supercampeones_Theme' ) . '</span>', $tags_list ); // phpcs:ignore XSS OK.
			}
		}

		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'WP_Supercampeones_Theme' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function wp_supercampeones_theme_categorized_blog() {
	$all_the_cool_cats = get_transient( 'WP_Supercampeones_Theme_categories' );
	if ( false === all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'WP_Supercampeones_Theme_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wp_supercampeones_theme_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wp_supercampeones_theme_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in wp_supercampeones_theme_categorized_blog.
 */
function wp_supercampeones_theme_categoriy_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'WP_Supercampeones_Theme_categories' );
}
add_action( 'edit_category', 'wp_supercampeones_theme_categoriy_transient_flusher' );
add_action( 'save_post', 'wp_supercampeones_theme_categoriy_transient_flusher' );

/**
 * Add tag support to pages
 */
function tags_support_all() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', 'tags_support_all' );

/**
 * Add custom parameter support to WP_Query.
 *
 * @param WP_Query $wp_query Insrance of WP_Query.
 * @return void
 */
function tags_support_query( $wp_query ) {
	if ( $wp_query->get( 'tag' ) ) {
		$wp_query->set( 'post_type', 'any' );
	}
}

add_action( 'pre_get_posts', 'tags_support_query' );
