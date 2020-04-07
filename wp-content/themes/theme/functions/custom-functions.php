<?php
/*
 * Custom Functions
 */

// Get Short Title or Description in Loop

function short($subject, $maxChar, $after) {
	if (!$after){
		$after = '';
	}
	$short = mb_strimwidth($subject, 0, $maxChar, $after);
	return $short;
}

function console_log( $data ) {
	echo '<script>';
	echo 'console.log(' . json_encode( $data ) . ')';
	echo '</script>';
}

// Register Navigation Menus
function menu() {

	$locations = array(
		'Main menu' => __( 'Header Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'menu' );

// Disable disable gutenberg on special page templates

//function ea_disable_editor( $id = false ) {
//
//	$excluded_templates = array(
//		'page-templates/contact_us.php',
//		'page-templates/faq.php',
//		'page-templates/home.php',
//		'page-templates/how_it_works.php',
//	);
//
//
//	if( empty( $id ) )
//		return false;
//
//	$template = get_page_template_slug( $id );
//
//	return in_array( $template, $excluded_templates );
//}
//
//add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );

// Disable gutenberg on special post type

function ea_disable_gutenberg( $current_status, $post_type ) {

	if ($post_type === 'art') return false;
	return $current_status;

}
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );
