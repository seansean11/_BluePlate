<?php
/**
 * _BluePlate functions and definitions
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since _BluePlate 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_blueplate_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since _BluePlate 1.0
 */
function _blueplate_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );


	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _BluePlate, use a find and replace
	 * to change '_blueplate' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_blueplate', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// if ( function_exists( 'add_image_size' ) ) { 
	// add_image_size( 'custom', 1350, 492, true ); //(cropped)
	// }	

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_blueplate' ),
	) );

}
endif; // _blueplate_setup
add_action( 'after_setup_theme', '_blueplate_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since _BluePlate 1.0
 */
function _blueplate_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', '_blueplate' ),
		'id' => 'sidebar-1',
		'before_widget' => '<section class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', '_blueplate_widgets_init' );

//Sidebar Navigation

if(!function_exists('get_post_top_ancestor_id')){
/**
 * Gets the id of the topmost ancestor of the current page. Returns the current
 * page's id if there is no parent.
 * 
 * @uses object $post
 * @return int 
 */
function get_post_top_ancestor_id(){
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}}


/**
 * Enqueue scripts and styles
 */

// Load jQuery

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function _blueplate_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins-ck.js', array( 'jquery' ), true);

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-ck.js', array( 'jquery', 'plugins' ), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', '_blueplate_scripts' );


//----------------------------------------------- Backend Customization 

//Remove Version Update Notice

if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}
?>
