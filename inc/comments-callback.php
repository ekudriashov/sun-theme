<?php
/**
 * Sun Theme template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @package Sun
 */
if ( ! function_exists( 'sun_comment' ) ) :
function sun_comment( $comment, $args, $depth ) { 
	$GLOBALS['comment'] = $comment; ?>
	<li class="comment" id="li-comment-<?php comment_ID() ?>">
	  <div>
      <?php echo get_avatar( $comment, $size='60'); ?>
      <div class="comment-meta">
        <span class="author"><?php echo get_comment_author_link(); ?></span>
        <span class="date">on <?php echo get_comment_date().' '.get_comment_time(); ?></span>
        <span class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
      </div>
      <div class="comment-body">
        <?php comment_text(); ?>
      </div>
<?php }
endif; ?>