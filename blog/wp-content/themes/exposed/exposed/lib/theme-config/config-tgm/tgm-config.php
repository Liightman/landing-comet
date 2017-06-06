<?php

require_once get_template_directory() . '/lib/theme-config/config-tgm/_class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'exposed_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function exposed_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		//This is an example of how to include a plugin bundled with a theme. 
		array(
			'name'               => esc_html__('Theme Core','exposed'), // The plugin name.
			'slug'               => 'theme-core', // The plugin slug (typically the folder name).
			'source'             => EXPOSED_DIR . '/inc/plugins/theme-core.zip', // The plugin source.
			'required'           => true,  
		),
		array(
			'name'               => esc_html__('Redux Framework','exposed'), // The plugin name.
			'slug'               => 'redux-framework', // The plugin slug (typically the folder name). 
			'required'           => true,  
		),
		array(
			'name'               => esc_html__('WPBakery Visual Composer','exposed'), // The plugin name.
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => EXPOSED_DIR .'/inc/plugins/js_composer.zip', // The plugin source.
			'required'           => true,  
		),
		array(
			'name'      => esc_html__('CMB2','exposed'),
			'slug'      => 'cmb2',
			'required'  => true,
		), 
		array(
			'name'      => esc_html__('Contact Form 7','exposed'),
			'slug'      => 'contact-form-7',
			'required'  => false,
		)
	); 

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'exposed',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
