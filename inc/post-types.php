<?php

/**
 * Register Post Types
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'adzbite_top_carousel',
		array(
			'labels' => array(
				'name' => __( 'Top Carousel' ),
				'singular_name' => __( 'Top Carousel' ),
				'add_new_item' => 'Add New Carousel Image',
				'edit_item' => 'Edit Carousel Image',
			),
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		)
	);
}
