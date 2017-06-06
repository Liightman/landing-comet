<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**=============================================================
 * Enqueue scripts and styles.
 ==============================================================*/
function exposed_scripts() {
    global $exposed;  
         
	// LOAD FONTS
	wp_enqueue_style( 'exposed-fonts', exposed_fonts_url(), array(), '1.0.0' );

	// LOAD STYLE SHEET 
	wp_enqueue_style( 'exposed-default', EXPOSED_STYLE . 'default-style.css' );
	wp_enqueue_style( 'owl-carousel', EXPOSED_STYLE . 'owl.carousel.css' );
	wp_enqueue_style( 'owl-theme', EXPOSED_STYLE . 'owl.theme.css' );
	wp_enqueue_style( 'font-awesome', EXPOSED_STYLE . 'font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap-min', EXPOSED_STYLE . 'bootstrap.min.css' );
	wp_enqueue_style( 'bxslider', EXPOSED_STYLE . 'jquery.bxslider.css' );
	wp_enqueue_style( 'exposed-style', get_stylesheet_uri() );
	wp_enqueue_style( 'exposed-responsive', EXPOSED_STYLE . 'responsive.css' );


    // LOAD SCRIPT 
	wp_enqueue_script( 'bootstrap-min', EXPOSED_SCRIPT . 'bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'owl-carousel', EXPOSED_SCRIPT . 'owl.carousel.js', array(), '20151215', true ); 
	wp_enqueue_script( 'jqinstapics', EXPOSED_SCRIPT . 'jqinstapics.js', array(), '20151215', true );
	wp_enqueue_script( 'stickySidebar', EXPOSED_SCRIPT . 'stickySidebar.js', array(), '20151215', true );
	wp_enqueue_script( 'bxslider', EXPOSED_SCRIPT . 'jquery.bxslider.js', array(), '20151215', true );
	wp_enqueue_script( 'exposed-custom', EXPOSED_SCRIPT . 'custom.js', array(), '20151215', true );
	wp_enqueue_script( 'exposed-navigation', EXPOSED_SCRIPT . 'navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'exposed-skip-link-focus-fix', EXPOSED_SCRIPT . 'skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// custom css
	$exposed_custom_css = '';

    if(isset($exposed['bgc-clr']) && !empty($exposed['bgc-clr'])){
    	$exposed_bdTYP =  (isset($exposed['bgc-type'])) ? $exposed['bgc-type'] : '' ;
    	$exposed_bdclr =  (isset($exposed['bgc-clr'])) ? $exposed['bgc-clr'] : '' ;
    	$exposed_bdIMG =  (isset($exposed['bgc-img']['url'])) ? $exposed['bgc-img']['url'] : '' ;
    	if($exposed_bdTYP==0){
	        $exposed_custom_css .= "
				body{
					background:{$exposed_bdclr};
				}
	        ";
    	}else{
	        $exposed_custom_css .= "
				body{
					background: url({$exposed_bdIMG}) no-repeat fixed;
				    height: 100%;
				    width: 100%;
				}
	        ";
    	}
    }

	$exposed_adv_css = ($exposed['custom_css']) ? $exposed['custom_css'] : '';
	$exposed_custom_css .= "{$exposed_adv_css}";
    wp_add_inline_style( 'exposed-style', $exposed_custom_css );

	// custom js 
	$exposed_custom_js = '';
    $exposed_adv_js = (isset($exposed['custom_js'])) ? $exposed['custom_js'] : '' ;
    $exposed_custom_js .= "{$exposed_adv_js}";
 	wp_add_inline_script( 'exposed-custom', $exposed_custom_js );


}
add_action( 'wp_enqueue_scripts', 'exposed_scripts' );