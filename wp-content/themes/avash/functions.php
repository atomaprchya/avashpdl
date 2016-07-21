<?php
/**
 * avash functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package avash
 */

if ( ! function_exists( 'avash_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function avash_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on avash, use a find and replace
	 * to change 'avash' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'avash', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'avash' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'avash_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'avash_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avash_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'avash_content_width', 640 );
}
add_action( 'after_setup_theme', 'avash_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function avash_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'avash' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'avash' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'avash_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function avash_scripts() {
	wp_enqueue_style( 'avash-style-googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700' );
	wp_enqueue_style( 'avash-style', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'avash-essentials', get_template_directory_uri() . '/assets/css/essentials.css' );
	wp_enqueue_style( 'avash-layout', get_template_directory_uri() . '/assets/css/layout.css' );
	wp_enqueue_style( 'avash-header-5', get_template_directory_uri() . '/assets/css/header-5.css' );
	wp_enqueue_style( 'avash-color-scheme-blue', get_template_directory_uri() . '/assets/css/color_scheme/blue.css' );
	wp_enqueue_style( 'avash-custom', get_template_directory_uri() . '/assets/css/custom.css' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery/jquery-2.1.4.min.js', array(), '2.1.4', true );
	wp_enqueue_script( 'avash-scripts', get_template_directory_uri() . '/assets/js/scripts.js', 'jquery', '1.0.1', true );

	if(get_page_template_slug()=='page-places.php'){
		wp_enqueue_script( 'avash-googlemap', get_template_directory_uri() . '/assets/js/googlemap.js', 'jquery', '1.0.1', true );
	}
	
	

	if(is_home() || is_front_page()){
		wp_enqueue_script( 'avash-canvas-particles', get_template_directory_uri() . '/assets/plugins/effects/canvas.particles.js', 'jquery', '1.0.1', true );
	}
	
	wp_enqueue_script( 'avash-bootstrap-js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', 'jquery', '1.0.1', true );
	wp_enqueue_script( 'avash-magnific', get_template_directory_uri() . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js', 'jquery', '1.0.1', true );
	wp_enqueue_script( 'avash-rotator', get_template_directory_uri() . '/assets/plugins/text-rotator/jquery.simple-text-rotator.min.js', 'jquery', '1.0.1', true );
	wp_enqueue_script( 'avash-form', get_template_directory_uri() . '/assets/plugins/form.validate/jquery.form.min.js', 'jquery', '1.0.1', true );
	wp_enqueue_script( 'avash-form-validation', get_template_directory_uri() . '/assets/plugins/form.validate/jquery.validation.min.js', 'jquery', '1.0.1', true );
	wp_enqueue_script( 'avash-travelling-plane', get_template_directory_uri() . '/assets/js/travelling_plane.js', 'jquery', '1.0.1', true );

	wp_localize_script( 'avash-travelling-plane', 'avash_ajobject',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'we_value' => 1234 ) );

	/*wp_enqueue_script( 'avash-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'avash_scripts' );
require get_template_directory() . '/inc/TGM-Plugin-Activation-2.5.2/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'avash_theme_plugin_dependency_register_required_plugins' );
function avash_theme_plugin_dependency_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),
		array(
			'name'      => 'Jetpack by WordPress.com',
			'slug'      => 'jetpack',
			'required'  => false,
		),
		array(
			'name'      => 'Mail Poet Subscriptions',
			'slug'      => 'wysija-newsletters',
			'required'  => false,
		),
	);
	$config = array(
		'id'           => 'avash',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',      
	);
	tgmpa( $plugins, $config );

}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/portfolio.php';
require get_template_directory() . '/inc/places.php';
require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/projectgallery.php';
require get_template_directory() . '/inc/about.php';
require get_template_directory() . '/inc/contact.php';
require get_template_directory() . '/inc/widget.php';


// Add specific CSS class by filter
add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {
	// add 'class-name' to the $classes array
	$classes[] = 'smoothscroll';
	$classes[] = 'enable-animation';
	// return the $classes array
	return $classes;
}
