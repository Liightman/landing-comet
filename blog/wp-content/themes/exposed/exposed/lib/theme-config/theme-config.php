<?php 
/**
 * Purpose: Global Theme Config And Constant 
 */
 
/**==================================================
 * Include TGM, REDUX, CMB2 & AUTHOR BOX
 ====================================================*/ 
// Adding for External Plugins Requirement
if ( file_exists(get_template_directory() . '/lib/theme-config/config-tgm/tgm-config.php')) { 
	require EXPOSED_DIR . '/lib/theme-config/config-tgm/tgm-config.php';
}
 
//Adding custom config to redux framework
if ( file_exists(get_template_directory() . '/lib/theme-config/config-redux/redux-config.php')){
	require EXPOSED_DIR . '/lib/theme-config/config-redux/redux-config.php';
}

//Adding custom meta box
if ( defined( 'CMB2_LOADED' ) && file_exists(get_template_directory(). '/lib/theme-config/config-cmb2/metabox-config.php')) {
	require EXPOSED_DIR . '/lib/theme-config/config-cmb2/metabox-config.php';
}



