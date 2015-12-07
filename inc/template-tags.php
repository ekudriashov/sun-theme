<?php
/**
 * Custom template tags for Sun theme.
 *
 * @package Sun
 */
if (! function_exists( 'sun_posts_meta' )) :
/**
 * Prints HTML with meta information of the each post.
 */
function sun_posts_meta() {
	return array(
		'byline' => get_the_author(),
		'author_url' => get_author_posts_url( get_the_author_meta( 'ID' ) ),
		'time_string' => get_the_date('F j, Y'),
		'comments' => get_comments_number(),
		'tags_list' => get_the_tags(),
		);
}
endif;
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function sun_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'sun_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );
		set_transient( 'sun_categories', $all_the_cool_cats );
	}
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so sun_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so sun_categorized_blog should return false.
		return false;
	}
}
/**
 * Flush out the transients used in sun_categorized_blog.
 */
function sun_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'sun_categories' );
}
add_action( 'edit_category', 'sun_category_transient_flusher' );
add_action( 'save_post',     'sun_category_transient_flusher' );