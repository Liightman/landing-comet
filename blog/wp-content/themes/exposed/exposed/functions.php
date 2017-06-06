<?php
/**
 * Exposed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Exposed
 */

/**=====================================================================
 * Constant & definitions
 =======================================================================*/ 
define('EXPOSED_STYLE', get_template_directory_uri().'/assets/css/');
define('EXPOSED_SCRIPT', get_template_directory_uri().'/assets/js/'); 
define('EXPOSED_DIR', get_template_directory() ); 

/**=====================================================================
 * Includes Theme Config
 ======================================================================*/  
if ( file_exists( EXPOSED_DIR . '/lib/theme-config/theme-config.php' ) ) {
	require EXPOSED_DIR . '/lib/theme-config/theme-config.php';
}
 
/**=====================================================================
 * Load Megamenu Functions
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/megamenu/exposed-menu.php' ) ) {
	require EXPOSED_DIR . '/inc/megamenu/exposed-menu.php';
}    

/**=====================================================================
 * Theme Core Functions
 ======================================================================*/  
if ( file_exists( EXPOSED_DIR . '/lib/theme-core-functions/theme-core-functions.php' ) ) { 
	require EXPOSED_DIR . '/lib/theme-core-functions/theme-core-functions.php';
}

/**=====================================================================
 * Implement the Custom Header feature.
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/custom-header.php' ) ) {
	require EXPOSED_DIR . '/inc/custom-header.php';
}

/**=====================================================================
 * Custom template tags for this theme.
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/template-tags.php' ) ) {
	require EXPOSED_DIR . '/inc/template-tags.php';
} 

/**=====================================================================
 * Custom functions that act independently of the theme templates.
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/extras.php' ) ) {
	require EXPOSED_DIR . '/inc/extras.php';
}  

/**=====================================================================
 * Customizer additions.
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/customizer.php' ) ) {
	require EXPOSED_DIR . '/inc/customizer.php';
}   

/**=====================================================================
 * Load Jetpack compatibility file.
 =====================================================================*/
if ( file_exists( EXPOSED_DIR . '/inc/jetpack.php' ) ) {
	require EXPOSED_DIR . '/inc/jetpack.php';
}    
 

/**
 *  Initialising Visual shortcode editor
 */
if (class_exists('WPBakeryVisualComposerAbstract')) {
	function exposed_requireVcExtend(){
		include_once( get_template_directory().'/vc_extend/extend_vc.php');
	}
 add_action('init', 'exposed_requireVcExtend',2);
}



 // widget upload image js
function exposed_about_widgetscript($hook) {
    wp_enqueue_media();
    if("nav-menus.php"==$hook){ 
    	wp_enqueue_script('ads_script', get_template_directory_uri() . '/assets/js/megamenu.js', false, '1.0', true);
    }
}
add_action('admin_enqueue_scripts', 'exposed_about_widgetscript');
