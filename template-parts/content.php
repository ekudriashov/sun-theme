<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div>
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
			<?php if($meta['comments']) { ?>
			<div class="post-comments">
				<a href="<?php the_permalink(); ?>#comments"><i class="fa fa-commenting-o"></i> <?php comments_number(); ?></a>
			</div>
			<?php } ?>
		</div>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) {		    
		    echo get_the_post_thumbnail( $id, 'sun-featured', array('class' => 'img-responsive') );
		       } ?>
		<?php the_content(); ?>
	</div>
</article>