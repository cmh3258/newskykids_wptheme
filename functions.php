<?php
/**
 * newsky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newsky
 */

if ( ! function_exists( 'newsky_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function newsky_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on newsky, use a find and replace
		 * to change 'newsky' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'newsky', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'newsky' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'newsky_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'newsky_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newsky_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newsky_content_width', 640 );
}
add_action( 'after_setup_theme', 'newsky_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newsky_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'newsky' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'newsky' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'newsky_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newsky_scripts() {
	wp_enqueue_style( 'newsky-style', get_stylesheet_uri() );
	wp_enqueue_style ('theme-style', get_template_directory_uri().'/custom.css');


	wp_enqueue_script( 'newsky-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'newsky-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newsky_scripts' );


function pu_theme_menu(){
	add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page");
}
add_action('admin_menu', 'pu_theme_menu');

//this function creates a simple page with title Custom Theme Options Page.
function theme_option_page() {
?>
	<div class="wrap">
	<h1>Custom Theme Options Page</h1>
	<form method="post" action="options.php">
	<?php
		// display settings field on theme-option page
		settings_fields("theme-options-grp");

		// display all sections for theme-options page
		do_settings_sections("theme-options");
		submit_button();
	?>
	</form>
	</div>
<?php
}

function add_theme_menu_item() {
add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);}
add_action("admin_menu", "add_theme_menu_item");
function theme_section_description(){
echo '<p>Theme Option Section</p>';}
function options_callback(){
$options = get_option( 'first_field_option' );
echo '<input name="first_field_option" id="first_field_option" type="checkbox" value="1" class="code" ' . checked( 1, $options, false ) . ' /> Check for enabling custom help text.';
}
function test_theme_settings(){
	add_option('first_field_option',1);// add theme option to database
	add_settings_section( 'first_section', 'New Theme Options Section',
	'theme_section_description','theme-options');
	add_settings_field('first_field_option','Test Settings Field','options_callback',
	'theme-options','first_section');//add settings field to the “first_section”
	register_setting( 'theme-options-grp', 'first_field_option');

	//add settings filed with callback display_test_twitter_element.
	add_settings_field('twitter_url', 'Test Twitter Profile Url', 'display_test_twitter_element', 'theme-options', 'first_section');
	register_setting( 'theme-options-grp', 'test_twitter_url');
}
add_action('admin_init','test_theme_settings');



function display_test_twitter_element(){
//php code to take input from text field for twitter URL.
?>
	<input type="text" name="test_twitter_url" id="test_twitter_url" value="<?php echo get_option('test_twitter_url'); ?>" />
<?php
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
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





