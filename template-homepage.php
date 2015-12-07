<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage of Sun Theme.
 * @package sun
 */
?>
<?php get_header(); ?>
<?php
// Loop through homepage modules and get their corresponding files
	global $sun_options;
	$homepage_modules = $sun_options['homepage_layout']['enabled'];
	if ( $homepage_modules ) {
		foreach ($homepage_modules as $key => $value) {
			$value = preg_replace('/\s*/', '', $value);
			$value = strtolower($value);
			get_template_part('template-parts/homepage-modules/home', $value); // get correct file for each module
		}
	}
?>
<?php get_footer(); ?>