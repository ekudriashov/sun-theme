<?php
/**
 * The sidebar containing the contacts page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sun
 */
if ( ! is_active_sidebar( 'contacts' ) ) {
	return;
}
?>
<aside class="col-md-4 right-sidebar" role="complementary">
	<?php dynamic_sidebar( 'contacts' ); ?>
</aside>