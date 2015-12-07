<?php
/**
 * Custom functions that act independently of the Sun Theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Sun
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sun_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'sun_body_classes' );
/**
 * Custom Read More Button.
 *
 */
function modify_read_more_link() {
 
	return '<p><a class="more-link" href="' . get_permalink() . '">Continue reading <i class="fa fa-angle-right"></i></a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );