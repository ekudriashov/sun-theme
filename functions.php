<?php
/**
 * Sun functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sun
 */
if ( ! function_exists( 'sun_setup' ) ) :
/**
 * Sets up Sun theme defaults and registers support for various WordPress features.
 */
function sun_setup() {
	load_theme_textdomain( 'sun', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'sun-featured', 640, 360, true );
	// This theme uses wp_nav_menu() in 2 locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sun' ),
		'footer'  => esc_html__( 'Footer Menu', 'sun' )
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'sun_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sun_setup
add_action( 'after_setup_theme', 'sun_setup' );
/*
 * Change footer text in dashboard.
 */
function change_footer_admin () {
	echo 'Sun Theme. Developed by Eugene Kudriashov. <a href="mailto:4150878@gmail.com?Subject=Developer%20wanted">MAIL ME</a> or HIRE ME on <a href="https://www.upwork.com/freelancers/~01133bc092335bb156">UPWORK</a>';  
}
add_filter('admin_footer_text', 'change_footer_admin');
/*
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function sun_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sun_content_width', 640 );
}
add_action( 'after_setup_theme', 'sun_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sun_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sun' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgetheading"><i class="fa fa-plus"></i> ',
		'after_title'   => '<span></span></h4>',
	) );
	/**
	* Creates a footer left widget
	* @param string|array
	*/	
	register_sidebar( array(
		'name'          => __( 'Footer Left', 'sun' ),
		'id'            => 'footer-left',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	/**
	* Creates a footer center widget
	* @param string|array
	*/	
	register_sidebar( array(
		'name'          => __( 'Footer Center', 'sun' ),
		'id'            => 'footer-center',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	/**
	* Creates a contacts widget
	* @param string|array
	*/	
	register_sidebar( array(
		'name'          => __( 'Contacts Sidebar', 'sun' ),
		'id'            => 'contacts',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgetheading"><i class="fa fa-map-marker"></i> ',
		'after_title'   => '<span></span></h4>'
	) );
	
}
add_action( 'widgets_init', 'sun_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function sun_scripts() {
	//styles
	wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' );
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style( 'sun-style', get_stylesheet_uri() );
	//scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'hover-dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array('jquery'), '2.1.3', true );
	wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/headroom.min.js', array('jquery'), '0.4.0', true );
	wp_enqueue_script( 'headroom-jquery', get_template_directory_uri() . '/js/jQuery.headroom.min.js', array('jquery'), '0.4.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '0.0.1', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sun_scripts' );
/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if
/**
* Function for handle with global variable from Redux Framevork
*/
if ( ! function_exists('sun_option') ) {
	function sun_option($id, $fallback = false, $param = false ) {
		global $sun_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($sun_options[$id]) && $sun_options[$id] !== '' ) ? $sun_options[$id] : $fallback;
		if ( !empty($sun_options[$id]) && $param ) {
			$output = $sun_options[$id][$param];
		}
		return $output;
	}
}
/**
* Function for Exclude Pages From Search Results and show results only for posts
*/
if ( !function_exists('exclude_pages_from_search') ) {
	function exclude_pages_from_search($query) {
		if ( !is_admin() && $query->is_main_query() && $query->is_search ) {
			$query->set('post_type', 'post');
		}
	}
	add_action('pre_get_posts','exclude_pages_from_search');
}
/**
 * Custom bootstrap-based navigation to next/previous pages when applicable
 *
 * @since 1.0
 */
if ( ! function_exists( 'sun_content_nav' ) ):
function sun_content_nav( $nav_id ) {
	global $wp_query;
	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav role="navigation" id="<?php echo $nav_id; ?>">
		<h1 class="sr-only"><?php _e( 'Post navigation', 'sun' ); ?></h1>
		<ul class="pager">
	<?php if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
		<?php if ( get_next_posts_link() ) : ?>
		<li class="previous"><?php next_posts_link( __( '<span>&lt;</span> Older posts', 'sun' ) ); ?></li>
		<?php endif; ?>
		<?php if ( get_previous_posts_link() ) : ?>
		<li class="next"><?php previous_posts_link( __( 'Newer posts <span>&gt;</span>', 'sun' ) ); ?></li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
	</nav>
	<?php
}
endif;
/**
 * Change default Wordpress next single post pagination to Bootstrap style without change the WP core function the_post_navigation();
 */
if ( ! function_exists( 'sun_post_navigation' ) ) :
function sun_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post() -> post_parent ) : get_adjacent_post( false, '', true );
	$next = get_adjacent_post( false, '', false );
	if (!$next && !$previous) {
		return;
	}
	?>
	<nav role="navigation">
		<h1 class="sr-only"><?php _e( 'Post Navigation', 'sun' ); ?></h1>
		<ul class="pager">			
		<?php
			previous_post_link( '<li class="previous">%link</li>', _x( '<span>&lt;</span>&nbsp;Previous post', 'Previous post link', 'sun' ) );
			next_post_link( '<li class="next">%link</li>', _x( 'Next post&nbsp;<span>&gt;</span>', 'Next post link', 'sun' ) );
		?>		
		</ul>
	</nav>
	<?php
}
endif;
/**
 * Activate all needed plugins.
 */
require get_template_directory() . '/inc/plugins-needed.php';
/**
 * Custom template tags for Sun theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the Sun theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Custom Main Menu (Bootstrap Based).
 */
require get_template_directory() . '/inc/bootstrap-walker.php';
/**
 * Add Theme Options Config File
 */
require get_template_directory() . '/inc/theme-options.php';
/**
 * Custom Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';