<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sun
 */
?>
<footer id="footer" class="clearfix">
	<div class="footer1">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-left' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-center' ); ?>
				</div>
				<div class="col-md-4">
					<?php
						$socials_title 	= sun_option('socials-title');
						$first_icon 	= sun_option('first-icon');
						$second_icon 	= sun_option('second-icon');
						$third_icon 	= sun_option('third-icon');
						$fourth_icon 	= sun_option('fourth-icon');
						$fifth_icon 	= sun_option('fifth-icon');
						$sixth_icon 	= sun_option('sixth-icon');
					?>
					<h3 class="widget-title"><?php echo $socials_title; ?></h3>
					<div class="follow-me-icons">
					<?php 
						if ($first_icon) {
							echo '<a href="'.$first_icon[1].'" target="_blank"><i class="fa fa-'.$first_icon[0].'"></i></a>';
						}
						if ($second_icon) {
							echo '<a href="'.$second_icon[1].'" target="_blank"><i class="fa fa-'.$second_icon[0].'"></i></a>';
						}
						if ($third_icon) {
							echo '<a href="'.$third_icon[1].'" target="_blank"><i class="fa fa-'.$third_icon[0].'"></i></a>';
						}
						if ($fourth_icon) {
							echo '<a href="'.$fourth_icon[1].'" target="_blank"><i class="fa fa-'.$fourth_icon[0].'"></i></a>';
						}
						if ($fifth_icon) {
							echo '<a href="'.$fifth_icon[1].'" target="_blank"><i class="fa fa-'.$fifth_icon[0].'"></i></a>';
						}
						if ($sixth_icon) {
							echo '<a href="'.$sixth_icon[1].'" target="_blank"><i class="fa fa-'.$sixth_icon[0].'"></i></a>';
						}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<nav class="simplenav">
					<?php
						$footer_args = array(
							'theme_location'  => 'footer',
							'container'       => 'div', 
							'container_class' => 'simplenav',
							'echo'            => false,
							'items_wrap'      => '%3$s',
							'depth'           => 0,
						);
						if (has_nav_menu('footer')) {
							echo strip_tags(wp_nav_menu( $footer_args ), '<a>' );
						}
					?>
					</nav>
				</div>
				<div class="col-md-6">
					<p class="text-right">
						Copyright &copy; <?php echo date('Y'); ?> - All rights reserved. Design by: <a href="http://ekudriashov.github.io/" target="_blank" rel="designer">Eugene Kudriashov</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>