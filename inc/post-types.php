<?php

/**
 * Register Post Types
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'adzbite-portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Project' ),
				'add_new_item' => 'Add New Project',
				'edit_item' => 'Edit Project',
			),
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'page-attributes', 'post-formats'),
		)
	);
}
