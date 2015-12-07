<?php
/**
 * Sun Theme main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
get_header(); ?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<h1 class="page-title text-center"><?php single_post_title(); ?></h1>
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