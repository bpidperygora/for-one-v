<?php
/*
 * Add custom post type
 */

function wpdocs_create_post_type() {
	register_post_type( 'Art',
		array(
			'labels'              => array(
				'name'          => __( 'Arts', 'textdomain' ),
				'singular_name' => __( 'Art', 'textdomain' )
			),
			'supports'            => array( 'title', 'thumbnail', 'editor' ),
			'taxonomies'          => array( 'category', '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-album',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
		)
	);
}

add_action( 'init', 'wpdocs_create_post_type', 0 );