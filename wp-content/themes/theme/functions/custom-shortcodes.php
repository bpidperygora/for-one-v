<?php
// Add Shortcode to display posts

/**
 * @param $atts
 *
 * @return string
 */
function display_custom_post_type( $atts ) {

	wp_enqueue_style( 'masorny.css' );

	$string = '';
	$args   = array(
		'post_type'      => 'art',
		'post_status'    => 'publish',
		'posts_per_page' => isset( $atts['post-to-show'] ) ? $atts['post-to-show'] : '10',
		'order'          => isset( $atts['order-by'] ) ? $atts['order-by'] : 'DESC',
		'category_name'  => isset( $atts['post-type'] ) ? $atts['post-type'] : '',
	);

	$string .= '<div class="masonry" id="scroll-wrapper">';

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$cat_names = get_the_category();

			$categories = [];
			foreach ( $cat_names as $cd ) {
				$categories[] = $cd->name;
				$cat          = implode( ", ", $categories );
			};

			if ( get_the_post_thumbnail_url() ) {
				$thumbnail = get_the_post_thumbnail_url();
			} else {
				$thumbnail = '/wp-content/uploads/2020/04/28cdb3a2-d787-3da6-8d68-8af8d6a4d718.png';
			}


			$string .= sprintf( "<div class=\"item hentry post-id-%s\" data-category=\"%s\">", get_the_ID(), $cat )
			           . '<h3 class="item_title">' . short( get_the_title(), 20, '...' ) . '</h3>'
			           . '<p>' . short( wp_strip_all_tags( get_the_content() ), 60, '...' ) . '</p>'
			           . '<div class="item_thumbnail">'
			           . sprintf( "<img src=\"%s\">", $thumbnail )
			           . '</div>'
			           . '<div class="qtopic">'
			           . '<p>Categories: ' . get_the_category_list() . '</p>'
			           . '</div>'
			           . '</div>';


		}
	}
	$string .= '</div>'
	           . '<div class="pagination-links">'
	           . '<div class="nav-next">' . get_previous_posts_link( __( '<span class="meta-nav">&larr;</span>Previous ' ) ) . '</div>'
	           . '<div class="nav-previous">' . get_next_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>' ) ) . '</div>'
	           . '</div>';

	wp_reset_postdata();

	return $string;

}

add_shortcode( 'art', 'display_custom_post_type' );