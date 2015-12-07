<?php
/**
 * Register all required plugins for coorect Sun Theme work.
 *
 * @package    Sun
 * @author     Eugene Kudriashov
 * @copyright  Copyright (c) 2015, Eugene Kudriashov
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'sun_register_required_plugins' );
/**
 * Register the required plugins for Sun Theme.
 *
 * In this file, we register 1 plugin:
 * - REDUX FRAMEWORK
 */
function sun_register_required_plugins() {
	$plugins = array(
        // REDUX FRAMEWORK
        array(
            'name'               => 'Redux Framework',
            'slug'               => 'redux-framework',
            'required'           => true,
        ),
	);
	/*
	 * Array of configuration settings.
	 */
	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}