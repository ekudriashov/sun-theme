<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sun
 */
get_header(); ?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<h2 class="page-lead text-center"><?php printf( esc_html__( 'Search Results for: %s', 'sun' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</div>
	</div>
</header>
<section class="section section-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content' );
						?>
					<?php endwhile; ?>
					<?php sun_content_nav( 'nav-below' ); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>