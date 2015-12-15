<?php
    /**
     * Sun Theme Options Config File
     * Based on Redux Framework http://reduxframework.com/
     */
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    // This is option name where all the data is stored. DO NOT CHANGE IT !!!
    $opt_name = "sun_options";
    /**
     * ARGUMENTS
     **/
    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Sun Options', 'sun' ),
        'page_title'           => __( 'Sun Options', 'sun' ),
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-star-empty',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.
        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );
    // ADMIN BAR LINKS
    $args['admin_bar_links'][] = array(
        'href'  => 'mailto:kudriashov.e@gmail.com?Subject=Help%20me%20to%20setUp',
        'title' => __( 'Want more functionality?', 'sun' ),
    );
    $args['admin_bar_links'][] = array(
        'href'  => 'https://github.com/ekudriashov/sun-theme',
        'title' => __( 'GitHub', 'sun' ),
    );
    $args['admin_bar_links'][] = array(
        'href'  => 'https://www.upwork.com/freelancers/~01133bc092335bb156',
        'title' => __( 'Hire Me on Upwork', 'sun' ),
    );
    // SOCIAL ICONS
    $args['share_icons'][] = array(
        'url'   => 'mailto:kudriashov.e@gmail.com?Subject=Help%20me%20to%20setUp',
        'title' => 'Mail me...',
        'icon'  => 'el el-envelope-alt'
    );
    $args['share_icons'][] = array(
        'url'   => 'ua.linkedin.com/in/kudriashoveugene',
        'title' => 'Find me on LinkedIn',
        'icon'  => 'el el-linkedin'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.upwork.com/freelancers/~01133bc092335bb156',
        'title' => 'Hire Me On Upwork',
        'icon'  => 'el el-exclamation-sign'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ekudriashov/sun-theme',
        'title' => 'Visit me on GitHub',
        'icon'  => 'el el-github'
    );
    $args['intro_text'] = strtoupper('I can customize Sun Theme exactly to your needs, create a <b>CUSTOM THEME</b> according to your design or your HTML template');
    $args['footer_text'] = '<p><b>Sun Theme</b> was created by <b>Eugene Kudriashov</b> with great love to humanity</p><p><a href="http://ekudriashov.github.io/" target="_blank">Get In Touch</a></p>';
    Redux::setArgs( $opt_name, $args );
    /*
     * END ARGUMENTS
     */
    /*
     * HELP TABS
     */
    $tabs = array(
        array(
            'id'      => 'sun-help-tab-1',
            'title'   => __( 'About', 'sun' ),
            'content' => __( '<p>Sun Theme - is clean, fat-free, fast theme for WordPress</p>', 'sun' )
        ),
        array(
            'id'      => 'sun-help-tab-2',
            'title'   => __( 'Author', 'sun' ),
            'content' => __( '<p>Eugene Kudriashov</p><p></p>', 'sun' )
        ),
    );
    Redux::setHelpTab( $opt_name, $tabs );
    /*
     * START SECTIONS
     */
    /**** HOME PAGE ****/
    Redux::setSection( $opt_name, array(
        'title'     => __( 'Homepage', 'sun' ),
        'icon'      => 'el el-home',
        'fields'    => array(
            // Layout manager
            array(
                'id'        => 'homepage_layout',
                'type'      => 'sorter',
                'title'     => __( 'Homepage Layout Manager', 'sun' ),
                'desc'      => 'Organize how you want the layout to appear on the homepage',
                'options'   => array(
                                'enabled'  => array(
                                    'herobanner'  => 'Hero banner',
                                ),
                                'disabled' => array(
                                    'intro' => 'Intro',
                                    'advantages'     => 'Advantages',
                                    'testimonials' => 'Testimonials',
                                    'calltoaction'  => 'Call To Action',
                                    'twocolumns' => 'Two Columns',
                                )
                              ),
            ),
            //Hero Banner background image
            array(
                'title'     => __('Hero Banner Background Image', 'sun'),
                'subtitle'  => __('Use this field to upload your custom image for use in the Hero Banner background', 'sun'),
                'id'        => 'banner-image',
                'default'   => '',
                'type'      => 'media',
                'url'       => true,
                'placeholder' => 'No background image selected',
            ),
            //Hero Banner options
            array(
                'title'     => __('Hero Banner Texts', 'sun'),
                'subtitle'  => __('2 options fields Available: Title, Subtitle', 'sun'),
                'id'        => 'banner-text',
                'desc'      => __('First field - TITLE, second field - SUBTITLE', 'sun'),
                'type'      => 'multi_text',
                'add_text'  => 'Add Field',
                'show_empty' => false,
            ),
            //Intro section options
            array(
                'title'     => __('Intro section title', 'sun'),
                'subtitle'  => __('Title for the Intro Section', 'sun'),
                'id'        => 'intro-title',
                'type'      => 'text',
                'placeholder' => 'Your super title'
            ),
            array(
                'title'     => __('Intro section text', 'sun'), 
                'subtitle'  => __('Custom HTML not allowed', 'sun'),
                'id'        => 'intro-text',
                'placeholder'   => 'Describe your adv.',
                'type'      => 'textarea',
            ), 
            //Advantages section options
            //title
            array(
                'title'     => __('Advantages section optional title and subtitle', 'sun'),
                'subtitle'  => __('2 options Available: Title, Subtitle', 'sun'),
                'id'        => 'adv-title',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First TITLE, add second Subtitle', 'sun'),
                'type'      => 'multi_text',                
            ),
            //1st column
            array(
                'title'     => __('1st Column Options', 'sun'),
                'subtitle'  => __('3 options Available: Title, Icon, Text', 'sun'),
                'id'        => 'first-column',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First TITLE, add second ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add third TEXT', 'sun'),
                'type'      => 'multi_text',                
            ),
            //2nd column
            array(
                'title'     => __('2nd Column Options', 'sun'),
                'subtitle'  => __('3 options Available: Title, Icon, Text', 'sun'),
                'id'        => 'second-column',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First TITLE, add second ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add third TEXT', 'sun'),
                'type'      => 'multi_text',                
            ),
            //3rd column
            array(
                'title'     => __('3rd Column Options', 'sun'),
                'subtitle'  => __('3 options Available: Title, Icon, Text', 'sun'),
                'id'        => 'third-column',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First TITLE, add second ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add third TEXT', 'sun'),
                'type'      => 'multi_text',                
            ),
            //4th column
            array(
                'title'     => __('4th Column Options', 'sun'),
                'subtitle'  => __('3 options Available: Title, Icon, Text', 'sun'),
                'id'        => 'fourth-column',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First TITLE, add second ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add third TEXT', 'sun'),
                'type'      => 'multi_text',                
            ),

            //Testimonials section options
            //Title
            array(
                'title'     => __('Testimonials Section Title', 'sun'),
                'subtitle'  => __('Title for the Testimonials Section', 'sun'),
                'id'        => 'testimonials-title',
                'placeholder'   => 'Your super title',
                'type'      => 'text'
            ),
            //Slider
            array(
                'id'          => 'testimonials-slider',
                'type'        => 'slides',
                'title'       => __('Testimonials Slides Options', 'sun'),
                'subtitle'    => __('Unlimited slides with drag and drop sortings.', 'sun'),
                'desc'        => __('This field will store all slides and attributes.', 'sun'),
                'placeholder' => array(
                                    'title'       => __('Client name', 'sun'),
                                    'description' => __('Testimonial text', 'sun'),
                                    'url'         => __('Client URL', 'sun'),
                                ),
            ),
            //Call-to-action section options
            //Title and subtitle
            array(
                'title'     => __('Call-to-action Section Title and Subtitle', 'sun'),
                'subtitle'  => __('2 options Available: Title, Subtitle', 'sun'),
                'id'        => 'cta-title',
                'desc'      => __('Add First TITLE, add second Subtitle.', 'sun'),
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'type'      => 'multi_text',
            ),
            //Text
            array(
                'title'     => __('Call-to-action section text', 'sun'), 
                'subtitle'  => __('Custom HTML not allowed', 'sun'),
                'id'        => 'cta-text',
                'placeholder'   => 'CTA text here',
                'type'      => 'textarea',
            ),
            //Button Color
            array(
                'id'       => 'cta-color',
                'type'     => 'color',
                'title'    => __('Call-To-Action button color', 'sun'), 
                'subtitle' => __('Pick a button color(default: #FF4200).', 'sun'),
                'default'  => '#FF4200',
                'validate' => 'color',
            ),
            array(
                'title'     => __('Call-to-action button Title and URL', 'sun'),
                'subtitle'  => __('2 options Available: Title, URL', 'sun'),
                'id'        => 'cta-button',
                'desc'      => __('Add First TITLE, add second URL.', 'sun'),
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'type'      => 'multi_text',
            ),
            //2 columns Section options
            //Main Section Title
            array(
                'title'     => __('Main 2Columns Section Title', 'sun'),
                'subtitle'  => __('Main Section Title', 'sun'),
                'id'        => 'maincolumns-title',
                'placeholder'   => 'Your super title',
                'type'      => 'text'
            ),
            //Left column
            array(
                'title'     => __('Left Column Title', 'sun'),
                'subtitle'  => __('Title for the Left column', 'sun'),
                'id'        => 'leftcolumn-title',
                'placeholder'   => 'Your super title',
                'type'      => 'text'
            ),
            array(
                'title'     => __('Left Column text', 'sun'), 
                'subtitle'  => __('Custom HTML not allowed', 'sun'),
                'id'        => 'leftcolumn-text',
                'placeholder'   => 'Left Column text here',
                'type'      => 'textarea',
            ),
            array(
                'title'     => __('Left Column Featured Image', 'sun'),
                'subtitle'  => __('Use this field to upload your featured image', 'sun'),
                'id'        => 'leftcolumn-image',
                'default'   => '',
                'type'      => 'media',
                'url'       => true,
                'placeholder' => 'No featured image selected rig',
            ),
            //Right column
            array(
                'title'     => __('Right Column Title', 'sun'),
                'subtitle'  => __('Title for the Right column', 'sun'),
                'id'        => 'rightcolumn-title',
                'placeholder'   => 'Your super title',
                'type'      => 'text'
            ),
            array(
                'title'     => __('Right Column text', 'sun'), 
                'subtitle'  => __('Custom HTML not allowed', 'sun'),
                'id'        => 'rightcolumn-text',
                'placeholder'   => 'Right Column text here',
                'type'      => 'textarea',
            ),
            array(
                'title'     => __('Right Column Featured Image', 'sun'),
                'subtitle'  => __('Use this field to upload your featured image', 'sun'),
                'id'        => 'rightcolumn-image',
                'default'   => '',
                'type'      => 'media',
                'url'       => true,
                'placeholder' => 'No featured image selected rig',
            )
        )       
    ));
    /**** SOCIAL ICONS MENU CONSTRUCTOR ****/
    Redux::setSection( $opt_name, array(
        'icon'   => 'el el-group',
        'title'  => __('Social Icons Menu', 'sun'),
        'desc'   => __('maximum number of icons - 6', 'sun'),
        'fields' => array(
            //Social Menu Title
            array(
                'title'     => __('Social Menu Title', 'sun'),
                'id'        => 'socials-title',
                'placeholder' => 'Be Social',
                'type'      => 'text'
            ),
            //1st
            array(
                'title'     => __('1 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'first-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
            //2
            array(
                'title'     => __('2 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'second-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
            //3
            array(
                'title'     => __('3 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'third-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
            //4
            array(
                'title'     => __('4 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'fourth-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
            //5
            array(
                'title'     => __('5 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'fifth-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
            //6
            array(
                'title'     => __('6 ICON', 'sun'),
                'subtitle'  => __('2 options Available: Icon, URL', 'sun'),
                'id'        => 'sixth-icon',
                'show_empty' => false,
                'add_text'  => 'Add Field',
                'desc'      => __('Add First ICON Name from <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a>, add second URL.', 'sun'),
                'type'      => 'multi_text',
            ),
        )
    ));
    /*
     * END SECTIONS
     */
    // If Redux is running as a plugin, this will remove the demo notice and links
    add_action( 'redux/loaded', 'sun_remove_demo' );
    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'sun_validate_callback_function' ) ) {
        function sun_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;
            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }
            $return['value'] = $value;
            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }
            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }
            return $return;
        }
    }
    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'sun_my_custom_field' ) ) {
        function sun_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }
    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'sun' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'sun' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }
    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;
            return $args;
        }
    }
    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';
            return $defaults;
        }
    }
    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'sun_remove_demo' ) ) {
        function sun_remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );
                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }