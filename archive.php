<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
get_header(); ?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<?php 
				the_archive_title( '<h1 class="page-title text-center">', '</h1>' );
				the_archive_description( '<h2 class="page-lead text-center">', '</h2>' );
			?>
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