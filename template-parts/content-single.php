<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $meta = sun_posts_meta(); ?>
	<div class="post-panel">
		<?php if($meta['byline']) { ?>
			<div class="post-author">
				<a href="<?php echo $meta['author_url']; ?>">By <span class="post-font-uppercase"><?php echo $meta['byline']; ?></span></a>
			</div>
		<?php } ?>
		<?php if($meta['time_string']) { ?>
			<div class="post-date">
				on <span class="post-font-uppercase"><?php echo $meta['time_string']; ?></span>
			</div>
		<?php } ?>
		<?php 
			if($meta['tags_list']) {
				the_tags('<ul class="post-tags"><li>','</li><li>','</li></ul>');
			}
		?>
	</div>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) {		    	   
		    echo get_the_post_thumbnail( $id, 'full', array('class' => 'img-responsive') );
		} ?>
		<?php the_content(); ?>
	</div>
</article>