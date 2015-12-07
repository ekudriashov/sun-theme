<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sun
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comments topspace-2x">
	<?php if ( have_comments() ) : ?>
		<h3>
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sun' ) ),
					number_format_i18n( get_comments_number() ), get_the_title());
			?>
		</h3>
		<p><a href="#commentform" class="leave-comment">Leave a Comment</a></p>
		<ol class="comments-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback'	 => 'sun_comment'
				) );
			?>
		</ol>
		<div class="clearfix"></div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="comment-navigation clearfix" role="navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Comment navigation', 'sun' ); ?></h2>
			<div class="nav-content">
				<div class="nav-previous"><i class="fa fa-angle-left"><?php previous_comments_link( esc_html__( 'Older Comments', 'sun' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'sun' ) ); ?><i class="fa fa-angle-right"></div>
			</div>
		</nav>
		<?php endif; ?>
	<?php endif; ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sun' ); ?></p>
	<?php endif; ?>	
	<?php 
	    // Custom comment form with Bootstrap classes
	    $req = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );
 		$commenter = wp_get_current_commenter();
		$comments_args = array(
		// change the title of send button 
		'label_submit'=>'Submit',
		// change the title of the reply section
		'title_reply'=>'Leave your comment',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_notes_after' => '',
		// redefine your own textarea (the comment body)
		'comment_field' => '<div class="form-group"><label for="comment">' . _x( 'Comment', 'sun' ) . '</label><textarea class="form-control" rows="10" id="comment" name="comment" aria-required="true" placeholder="* Your comment here..."></textarea></div>',
		'class_submit' => 'btn btn-action',
		'fields' => apply_filters( 'comment_form_default_fields', array(
 																	'author' => '<div class="row"><div class="form-group col-md-6">'.
 																		'<label for="author">' . __( 'Name', 'sun' ).'</label> '.
 																		( $req ? '<span class="required">*</span>' : '' ).
 																		'<input class="form-control" id="author" name="author" type="text" value="'.
 																		esc_attr( $commenter['comment_author'] ).
 																		'" size="30"' . $aria_req . ' /></div>',
 																	'email' => '<div class="form-group col-md-6"><label for="email">'.
 																		__( 'Email', 'sun' ).'</label> '.
 																		( $req ? '<span class="required">*</span>' : '' ).
 																		'<input class="form-control" id="email" name="email" type="text" value="'.
 																		esc_attr(  $commenter['comment_author_email'] ).
 																		'" size="30"' . $aria_req . ' /></div></div>',
 																	'url' => '<div class="form-group"><label for="url">'.
 																		__( 'Website', 'sun' ).'</label>'.
 																		'<input class="form-control" id="url" name="url" type="text" value="'.
 																		esc_attr( $commenter['comment_author_url'] ).
 																		'" size="30" /></div>'
	    														  )
								),
		);
	comment_form($comments_args); ?>
</div>