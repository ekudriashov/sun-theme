<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sun
 */
get_header(); ?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sun' ); ?></h1>
		</div>
	</div>
</header>	
<section class="section section-intro">
	<div class="container">
		<h2 class="text-center"><?php esc_html_e( 'Nothing Found', 'sun' ); ?></h2>
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try to search?', 'sun' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>