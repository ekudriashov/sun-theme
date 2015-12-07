<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
?>
<?php
	$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
?>
<header class="head-inner" <?php if ( has_post_thumbnail() ) { ?>
		   style="background: url(<?php echo $image_url[0]; ?>) no-repeat" 
		<?php } ?>>
	<div class="container">
		<div class="row">
			<h1 class="page-title text-center"><?php single_post_title(); ?></h1>
		</div>
	</div>
</header>
<section class="section">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</div>
</section>