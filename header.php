<?php
/**
 * The header for Sun Theme.
 *
 * This is the template that displays all of the <head> section and everything up until content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sun
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sun Theme Bootstrap-powered fat-free fast theme for WordPress">
	<meta name="author"      content="Eugene Kudriashov">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class= "navbar navbar-dual navbar-inverse navbar-fixed-top headroom ontop-now">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if ( get_theme_mod( 'sun_logo' ) ) : ?>
					<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="homepage">
						<img src="<?php echo esc_url( get_theme_mod( 'sun_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				<?php else : ?>
					<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="homepage">
						<?php bloginfo( 'name' ); ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="navbar-collapse collapse">
				<?php
					$args = array(
						'theme_location' => 'primary',
						'depth'			 => 2,
						'container'		 => false,
						'menu_class'	 => 'nav navbar-nav pull-right',
						'walker'		 => new Bootstrap_Walker_Nav_Menu()
						); 
					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					}
					?>
			</div>
		</div>
	</div>