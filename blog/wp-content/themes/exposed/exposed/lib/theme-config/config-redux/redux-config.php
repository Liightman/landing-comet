<?php 

    //Adding custom meta box
    if ( file_exists( EXPOSED_DIR . '/lib/theme-config/config-redux/_custom-config.php' )) { 
        require EXPOSED_DIR . '/lib/theme-config/config-redux/_custom-config.php';
    }
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */ 
    if ( ! class_exists( 'Redux' ) ) { 
        return; 
    } 
    // This is your option name where all the Redux data is stored.
    $opt_name = "exposed"; 
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */ 
    $theme = wp_get_theme(); // For use with some settings. Not necessary. 
    $args = array(
        // TYPICAL -> Change these values as you need/desire
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
        'menu_title'           => esc_html__( 'Exposed Options', 'exposed' ),
        'page_title'           => esc_html__( 'Exposed Options', 'exposed' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
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
        'page_slug'            => 'exposed_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
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
        //'compiler'             => true,
    );
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( '', 'exposed' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'exposed' );
    }
    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'exposed' );
    Redux::setArgs( $opt_name, $args );

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'exposed' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'exposed' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'exposed' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'exposed' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );
 
    // Set the help sidebar
    $content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'exposed' );
    Redux::setHelpSidebar( $opt_name, $content );
    // -> START Basic Fields

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Global Options', 'exposed' ), 
        'id'         => 'global-options',
        'fields'     => array(
            array(
                'id'       => 'bgc-type',
                'type'     => 'switch',  
                'title'    => esc_html__( 'Body Background Type', 'exposed' ), 
                'default'  => 0,
                'on'       => esc_html__( 'Image', 'exposed' ), 
                'off'      => esc_html__( 'Color', 'exposed' )
            ), 
            array(
                'id'       => 'bgc-img',
                'type'     => 'media', 
                'compiler' => true, 
                'required' => array('bgc-type','equals','1'),
                'title'    => esc_html__( 'Body Background Image', 'exposed' ), 
                'desc'     => esc_html__( 'Upload background image from here. Image will display only in Box Layout', 'exposed' ), 
            ),
            array(
                'id'       => 'bgc-clr',
                'type'     => 'color',  
                'required' => array('bgc-type','equals','0'),
                'title'    => esc_html__( 'Body Background Color', 'exposed' ), 
                'desc'     => esc_html__( 'Pick a background color from here.', 'exposed' ), 
            ),
            array(
                'id'       => 'boctype',
                'type'     => 'select',
                'title'    => esc_html__( 'Body Layout', 'exposed' ),
                'options'  => array(
                    'box' => esc_html__( 'Box', 'exposed' ),
                    'wide' => esc_html__( 'Wide', 'exposed' ),
                ),
                'default'  => 'box'  
            ) 
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Main Header', 'exposed' ), 
        'id'         => 'main-header', 
        'fields'     => array(

            array(
                'id'       => 'logo-type',
                'type'     => 'switch',  
                'title'    => esc_html__( 'Logo Type', 'exposed' ), 
                'default'  => 0,
                'on'       => esc_html__( 'Image', 'exposed' ), 
                'off'      => esc_html__( 'Text', 'exposed' )
            ), 
            array(
                'id'       => 'logo-img',
                'type'     => 'media', 
                'compiler' => true, 
                'required' => array('logo-type','equals','1'),
                'title'    => esc_html__( 'Upload Logo', 'exposed' ), 
                'desc'     => esc_html__( 'Best Size is (115 X 38) px', 'exposed' ), 
            ),
            array(
                'id'       => 'logo-width',
                'type'     => 'text',  
                'required' => array('logo-type','equals','1'),
                'title'    => esc_html__( 'Logo Width', 'exposed' ), 
                'desc'    => esc_html__( 'Put a numeric value with px. Such As: 113px ', 'exposed' ), 
                'default'    => '300px' 
            ),
            array(
                'id'       => 'logo-height',
                'type'     => 'text',  
                'required' => array('logo-type','equals','1'),
                'title'    => esc_html__( 'Logo Height', 'exposed' ), 
                'desc'    => esc_html__( 'Put a numeric value with px. Such As: 33px ', 'exposed' ), 
                'default'    => '88px' 
            ), 
            array(
                'id'       => 'logo-text',
                'type'     => 'text',  
                'required' => array('logo-type','equals','0'),
                'title'    => esc_html__( 'Logo Text', 'exposed' ), 
                'desc'     => esc_html__( 'Write a text to set as logo. ', 'exposed' ), 
                'default'  => esc_html__( 'exposed', 'exposed' ), 
            ), 
            array(
                'id'       => 'srch-ico',
                'type'     => 'switch',  
                'title'    => esc_html__( 'Search Icon', 'exposed' ), 
                'default'  => 0,
                'on'       => esc_html__( 'Show', 'exposed' ), 
                'off'      => esc_html__( 'Hide', 'exposed' )
            ), 

            array(
                'id'       => 'popmenu-ico',
                'type'     => 'switch',  
                'title'    => esc_html__( 'Popup Menu Icon', 'exposed' ), 
                'default'  => 0,
                'on'       => esc_html__( 'Show', 'exposed' ), 
                'off'      => esc_html__( 'Hide', 'exposed' )
            ) 
        )

    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Page Settings', 'exposed' ),
        'id'    => 'wp-fremework-page',
        'desc'  => esc_html__( 'Multiple page settings support from here', 'exposed' ) 
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Page', 'exposed' ), 
        'id'         => 'blog-page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'blog-enable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Disable Banner ?', 'exposed' ),
                'desc'     => esc_html__('If yes, then click the checkbox.','exposed'),
                'default'  => true
            ),
 
            array(
                'id'       => 'blog-banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Banner Image', 'exposed' )  
            ),
            array(
                'id'       => 'blog-sidebar',
                'type'     => 'select',
                'title'    => esc_html__( 'Blog Sidebar', 'exposed' ),
                'options'  => array(
                    'left' => esc_html__( 'Left', 'exposed' ),
                    'right' => esc_html__( 'Right', 'exposed' ),
                ),
                'default'  => 'right'  
            ),

        )

    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Single Post', 'exposed' ), 
        'id'         => 'single-page',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'single-enable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Disable Banner ?', 'exposed' ),
                'desc'     => esc_html__('If yes, then click the checkbox.','exposed'),
                'default'  => true
            ),
 
            array(
                'id'       => 'single-banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Banner Image', 'exposed' )  
            ),

            array(
                'id'       => 'single-sidebar',
                'type'     => 'select',
                'title'    => esc_html__( 'Single Post Sidebar', 'exposed' ),
                'options'  => array(
                    'left' => esc_html__( 'Left', 'exposed' ),
                    'right' => esc_html__( 'Right', 'exposed' ),
                ),
                'default'  => 'right'  
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Search Page', 'exposed' ), 
        'id'         => 'search-page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'search-enable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Disable Banner ?', 'exposed' ),
                'desc'     => esc_html__('If yes, then click the checkbox.','exposed'),
                'default'  => true
            ), 
            array(
                'id'       => 'srch-banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Banner Image', 'exposed' )  
            ),

            array(
                'id'       => 'srch-sidebar',
                'type'     => 'select',
                'title'    => esc_html__( 'Search Sidebar', 'exposed' ),
                'options'  => array(
                    'left' => esc_html__( 'Left', 'exposed' ),
                    'right' => esc_html__( 'Right', 'exposed' ),
                ),
                'default'  => 'right'  
            ),
        )
    ) );



    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Archive Page', 'exposed' ), 
        'id'         => 'archive-page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'archive-enable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Disable Banner ?', 'exposed' ),
                'desc'     => esc_html__('If yes, then click the checkbox.','exposed'),
                'default'  => true
            ),
 
            array(
                'id'       => 'archv-banner',
                'type'     => 'media',
                'title'    => esc_html__( 'Banner Image', 'exposed' )  
            ),

            array(
                'id'       => 'archv-sidebar',
                'type'     => 'select',
                'title'    => esc_html__( 'Archive Sidebar', 'exposed' ),
                'options'  => array(
                    'left' => esc_html__( 'Left', 'exposed' ),
                    'right' => esc_html__( 'Right', 'exposed' ),
                ),
                'default'  => 'right'  
            ),
        )
    ) );

 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Advanced Options', 'exposed' ), 
        'id'         => 'atrd-options', 
        'fields'     => array(

            array(
                'id'       => 'custom_css',
                'type'     => 'ace_editor',
                'title'    => esc_html__('Custom CSS', 'exposed'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'exposed'),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'default'  => "#example{\n  margin: 0 auto;\n}"
            ), 

            array(
                'id'       => 'custom_js',
                'type'     => 'ace_editor',
                'title'    => esc_html__('Custom JS', 'exposed'),
                'subtitle' => esc_html__('Paste your JS code here.', 'exposed'),
                'mode'     => 'javascript',
                'theme'    => 'monokai',
                'default'  => "jQuery(document).ready(function(){\n  //code goes here\n});",
                'desc'  => "Write js code within jQuery(document).ready(function(){}) code block"
            ) 
        )
    ) ); 

    Redux::setSection( $opt_name, array(

        'title'      => esc_html__( 'Footer Options', 'exposed' ), 

        'id'         => 'footer-options', 

        'fields'     => array( 
            array(

                'id'       => 'copyright-text',

                'type'     => 'editor',

                'title'    => esc_html__( 'Copyright Text', 'exposed' ),

                'subtitle' => esc_html__( 'Write Copyright Text Here', 'exposed' ), 

                'default'  => 'THEMEBEER',

                'args'   => array(

                    'teeny'            => true,

                    'textarea_rows'    => 5

                )

            )

        )

    ) );



    /*

     * <--- END SECTIONS

     */
 
