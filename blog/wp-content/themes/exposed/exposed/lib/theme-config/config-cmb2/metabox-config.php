<?php
/**
 * Cmb2 Metabox Fileds
 */

add_action( 'cmb2_admin_init', 'exposed_metabox' ); 
function exposed_metabox() { 

	//  prefix
	$prefix = '_exposed_'; 
 
	/**=====================================================================
	 * metabox for page banner
	 =====================================================================*/ 
	$cmb2_Page_Banner = new_cmb2_box( array(
		'id'           => $prefix . '_exposed_page_settings',
		'title'        => esc_html__( 'Header Settings', 'exposed' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true
	) ); 
	$cmb2_Page_Banner->add_field( array(
	    'name'             =>  esc_html__( 'Header Style', 'exposed' ),
	    'id'               => $prefix.'header_style',
	    'type'             => 'radio_inline',
	    'default'          => 'none',
	    'options'          => array(
	        'none'            => esc_html__( 'None', 'exposed' ),
	        'bnr'             => esc_html__( 'Banner', 'exposed' ),
	        'revsldr'         => esc_html__( 'Revolution Slider', 'exposed' ), 
	        'pstslidr'          => esc_html__( 'Post Slider', 'exposed' ) 
	    ),
	) ); 

	$cmb2_Page_Banner->add_field( array(
	    'name'             =>  esc_html__( 'Banner Image', 'exposed' ),
	    'id'               => $prefix.'page_banner',
	    'desc'             => esc_html__( 'Upload individual page banner','exposed' ),
	    'type'             => 'file',
	) );

	if (class_exists('RevSlider')) {
		global $wpdb; 
		$exposed_id = 99999;
		$exposed_rev_tbl_name = esc_sql( 'revslider_sliders' );
		$exposed_rev_tbl = $wpdb->prefix . $exposed_rev_tbl_name; 
		$exposed_rs = $wpdb->get_results( $wpdb->prepare("SELECT alias FROM $exposed_rev_tbl WHERE id!=%d ORDER BY id ASC LIMIT 999", $exposed_id) );
		$exposed_revsliders = array();
		if ($exposed_rs) {
			foreach ( $exposed_rs as $exposed_slider ) {
				$exposed_revsliders[$exposed_slider->alias] = $exposed_slider->alias;
			}
		} else {
			$exposed_revsliders["No sliders found"] = esc_html__('No Alias found','exposed');
		}
		$cmb2_Page_Banner->add_field( array(
		    'name'             =>  esc_html__('Rev Slider Alias','exposed' ), 
		    'id'               => $prefix.'rev_slidr_alias',
		    'type'             => 'select',
		    'options'          => $exposed_revsliders,
		    'default'          => '',
		    'desc'         	   => esc_html__( 'Select any One, Which One You want to display','exposed' ), 
		) );
	}

	/**=====================================================================
	 * metabox for post/page sidebar
	 =====================================================================*/  
	$cmb2_post_sidebar = new_cmb2_box( array(
		'id'           => $prefix . '_exposed_posts_sidebar',
		'title'        => esc_html__( 'Post Sidebar', 'exposed' ),
		'object_types' => array( 'post','page'), // Post type
		'context'      => 'side',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_post_sidebar->add_field( array(
	    'name'             =>  esc_html__( 'Sidebar Type', 'exposed' ),
	    'id'               => $prefix.'post_sidebar',
	    'desc'             => esc_html__( 'Select any one. which you want to display','exposed' ),
	    'type'             => 'select',
	    'default'          => 'right',
	    'options'          => array(
	        'left'    => esc_html__( 'Left Sidebar', 'exposed' ),
	        'right'   => esc_html__( 'Right Sidebar', 'exposed' ),
	        'fullw'   => esc_html__( 'Box Width', 'exposed' ),
	        'fulls'   => esc_html__( 'Full Screen', 'exposed' )
	    ),
	) );  
  
	// metabox for post formates
	$cmb2_PostFormats = new_cmb2_box( array(
		'id'           => $prefix . '_exposed_post_formats',
		'title'        => esc_html__( 'Post Format Settings', 'exposed' ),
		'object_types' => array( 'post'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_PostFormats->add_field( array(
	    'name'             =>  esc_html__( 'Video Url', 'exposed' ),
	    'id'               => $prefix.'post_formate_vdo',
	    'desc'             => esc_html__( 'Put youtube video embeded src here.','exposed' ),
	    'type'             => 'text',
	) );

	$cmb2_PostFormats->add_field( array(
	    'name'             =>  esc_html__( 'Gallery Images', 'exposed' ),
	    'id'               => $prefix.'post_galery_list',
	    'desc'             => esc_html__( 'Upload Gallery Images Here. Upload max 3 images accoridng to desing.','exposed' ),
	    'type'             => 'file_list',
	) );
	$cmb2_PostFormats->add_field( array(
	    'name'             =>  esc_html__( 'Audio Url', 'exposed' ),
	    'id'               => $prefix.'post_audio',
	    'desc'             => esc_html__( 'Put soundcloud embeded src here. ','exposed' ),
	    'type'             => 'textarea',
	) ); 

	$cmb2_PostFormats->add_field( array(
	    'name'             =>  esc_html__( 'Short Text Bellow Audio/Video/Gallery', 'exposed' ),
	    'id'               => $prefix.'post_aftr_ftimg',
	    'desc'             => esc_html__( 'Writ short text here. It will display below featured image.','exposed' ),
	    'type'             => 'textarea',
	) );
	
	/**=====================================================================
	 * metabox for post/page sidebar
	 =====================================================================*/  
	$cmb2_post_sidebar = new_cmb2_box( array(
		'id'           => $prefix . '_exposed_slider_settings',
		'title'        => esc_html__( 'Slider Settings', 'exposed' ),
		'object_types' => array( 'sliders'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_post_sidebar->add_field( array(
	    'name'             =>  esc_html__( 'Select Post to Link', 'exposed' ),
	    'id'               => $prefix.'slider_post_link',
	    'desc'             => esc_html__( 'Select any one. which you want to display','exposed' ),
	    'type'             => 'select',  
		'show_option_none' => true, 
		'options'          => exposed_cmb2_get_post_options( array( 'post_type' => 'post', 'numberposts' => -1 ) ), 
	) );  

}

