<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sun
 */
get_header(); ?>
<header class="head-inner">
	<div class="container">
		<div class="row">
			<div class="head-avatar text-center"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100, '', '', array('class' => 'img-circle') ); ?></div>
			<h2 class="page-lead text-center"><?php single_post_title(); ?></h2>
		</div>
	</div>
</header>
<section class="section section-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php sun_post_navigation(); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>