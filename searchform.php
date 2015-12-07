<?php
/**
 * The template for displaying search forms
 *
 * @package Sun
 * @since 1.0
 */
?>
<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<label for="s" class="sr-only"><?php _e('Search for:', 'sun'); ?></label>
		<input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'sun' ); ?>" />
		<span class="input-group-btn">
			<input type="submit" class="btn btn-default" name="submit" value="<?php esc_attr_e( 'Search', 'sun' ); ?>" />
		</span>
	</div>
</form>