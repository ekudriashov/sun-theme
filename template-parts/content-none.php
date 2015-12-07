<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<h1 class="page-title text-center"><?php esc_html_e( 'Nothing Found', 'sun' ); ?></h1>
		</div>
	</div>
</header>	
<section class="section section-intro">
	<div class="container">
		<h2 class="text-center"><?php esc_html_e( 'Nothing Found', 'sun' ); ?></h2>
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
					<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sun' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
				<?php elseif ( is_search() ) : ?>
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sun' ); ?></p>
					<?php get_search_form(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sun' ); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>