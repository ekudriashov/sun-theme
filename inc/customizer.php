<?php
/**
 * Sun Theme Customizer.
 *
 * @package Sun
 */
/**
 * Add postMessage support for site title and description for the Sun Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sun_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// Logo upload from customizer
    $wp_customize->add_section( 'sun_logo_section' , array(
	    'title'       => __( 'Logo', 'sun' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'sun_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sun_logo', array(
		'label'    => __( 'Logo', 'sun' ),
		'section'  => 'sun_logo_section',
		'settings' => 'sun_logo',
	) ) );
}
add_action( 'customize_register', 'sun_customize_register' );
/**
 * Binds JS handlers to make Sun Theme Customizer preview reload changes asynchronously.
 */
function sun_customize_preview_js() {
	wp_enqueue_script( 'sun_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'sun_customize_preview_js' );
