<?php

/**
 * Register Post Types
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'acme_product',
		array(
			'labels' => array(
				'name' => __( 'Top Carousel' ),
				'singular_name' => __( 'Carousel' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}
