<?php 
/**
 * Theme Core Functions 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**===============================================================================
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 ===============================================================================*/

if ( ! function_exists( 'exposed_setup' ) ) :

function exposed_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Exposed, use a find and replace
	 * to change 'exposed' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'exposed', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_image_size('exposed-footer-rcp',76,61,true);
	add_image_size('exposed-featured-post',320,256,true);
	add_image_size('exposed-side-post',76,61,true);
	add_image_size('exposed-slider-post',318,400,true);

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'mainmenu' => esc_html__( 'Main Menu', 'exposed' ),
		'popmenu' => esc_html__( 'Pop Up Menu', 'exposed' ),
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
	add_theme_support( 'custom-background', apply_filters( 'exposed_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'video', 'gallery', 'audio'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', exposed_fonts_url() ) );

}
endif;
add_action( 'after_setup_theme', 'exposed_setup' );

/**
 *	Fonts Enqueue
 */
function exposed_fonts_url() {
    $exposed_font = '';
     
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'exposed' );
	$Oswald = _x( 'on', 'Oswald font: on or off', 'exposed' );
	 
	if ( 'off' !== $open_sans || 'off' !== $Oswald ) {
		$font_families = array();
 
		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open Sans: 400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';
		}
		 
		if ( 'off' !== $Oswald ) {
			$font_families[] = 'Oswald: 400,300,700';
		}
		 
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' )
		);

		$exposed_font = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
    return esc_url_raw( $exposed_font );
}


/**===============================================================================
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 ===============================================================================*/
function exposed_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'exposed_content_width', 640 );
}
add_action( 'after_setup_theme', 'exposed_content_width', 0 );


/**===============================================================================
 * Enqueue Theme Assets (Scripts & Styles)
 =================================================================================*/
if ( file_exists( EXPOSED_DIR . '/lib/theme-core-functions/_enqueue-assets.php')) {
    require EXPOSED_DIR . '/lib/theme-core-functions/_enqueue-assets.php';
}

/**===============================================================================
 * Register Functions
 =================================================================================*/
if ( file_exists( EXPOSED_DIR . '/lib/theme-core-functions/_register-widget.php')) { 
    require EXPOSED_DIR . '/lib/theme-core-functions/_register-widget.php';
}

/**===============================================================================
 * Helper (Custom) Functions
 =================================================================================*/
if ( file_exists( EXPOSED_DIR . '/lib/theme-core-functions/_helpers.php')) { 
    require EXPOSED_DIR . '/lib/theme-core-functions/_helpers.php';
}
