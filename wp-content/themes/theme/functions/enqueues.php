<?php
/**!
 * Enqueues
 */

if ( ! function_exists( 'style_and_script' ) ) {
	function style_and_script() {

		///
		///  Styles
		///
		wp_register_style( 'main.css', get_template_directory_uri() . '/build/css/main.css', false, null );
		wp_enqueue_style( 'main.css' );

		//components

		wp_register_style( 'masorny.css', get_template_directory_uri() . '/build/css/masorny.css', false, null );


		///
		///  Scripts
		///

		wp_deregister_script( 'jquery' );

		wp_register_script( 'main.js', get_template_directory_uri() . '/build/js/main.js', false, null, true );
		wp_enqueue_script( 'main.js' );

		//components

		wp_register_script( 'massorny.js', get_template_directory_uri() . '/build/js/components/button.js', false, null, true );
		wp_enqueue_script( 'button.js' );

//		------------------------------------------------------------------------------------

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'style_and_script', 100 );

