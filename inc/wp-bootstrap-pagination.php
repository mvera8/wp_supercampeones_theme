<?php

/**
 * Custom pagination with bootstrap .pagination class
 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
 *
 * @param  boolean $echo Echo flag.
 * @return string|void
 */
function bootstrap_pagination( $echo = true ) {
	global $wp_query;

	$big = 999999999; // need an unlikely integer.

	$pages = paginate_links(
		array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'    => '?paged=%#%',
			'current'   => max( 1, get_query_var( 'paged' ) ),
			'total'     => $wp_query->max_num_pages,
			'type'      => 'array',
			'prev_next' => true,
			'prev_text' => __( '« ' ),
			'next_text' => __( ' »' ),
		)
	);

	if ( is_array( $pages ) ) {
		$paged       = ( get_query_var( 'paged' ) === 0 ) ? 1 : get_query_var( 'paged' );
		$pagination  = '<div class="text-center">';
		$pagination .= '<ul class="pagination">';

		foreach ( $pages as $page ) {
			$pagination .= "<li>$page</li>";
		}

		$pagination .= '</ul>';
		$pagination .= '</div>';

		if ( $echo ) {
			echo wp_kses_post( $pagination );
		} else {
			return $pagination;
		}
	}
}

