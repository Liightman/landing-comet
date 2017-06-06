<?php 

// disable full scren
vc_add_param( 'vc_row' , array(
      "type" => "checkbox",
      "heading" => esc_html__("Enable Inner Container","exposed"),
      "param_name" => "enable_full_screen",
	  "value" => array( esc_html__("Yes", "exposed") => 'yes') ,
      "description" => ""
));

// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Featured Post', 'exposed'),
		'base' => 'featured_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'ftp_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			), 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'ftp_per_pag',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Put a neumeric value here.', 'exposed')
			), 
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'ftp_per_ordr',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC' 
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			),    
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Category', 'exposed'),
				'param_name' => 'ftp_cat',
				'value' => exposed_category_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)   
	) 
);
// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Top Post', 'exposed'),
		'base' => 'top_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array(    
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'top_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			),     
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'top_per_pg',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Input numeric value here.', 'exposed')
			),  
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'top_order_typ',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC'
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			) 	
		)   
	) 
);


// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Trendy Post', 'exposed'),
		'base' => 'trendy_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'trnd_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			),      
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'trnd_per_pg',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Input numeric value here.', 'exposed')
			),  
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'trnd_order_typ',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC'
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			),   
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Category', 'exposed'),
				'param_name' => 'trnd_cat',
				'value' => exposed_category_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)   
	) 
);
// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Media Post', 'exposed'),
		'base' => 'media_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'mda_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			),      
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'mda_per_pg',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Input numeric value here.', 'exposed')
			),  
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'mda_order_typ',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC'
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			),      
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Category', 'exposed'),
				'param_name' => 'mda_cat',
				'value' => exposed_category_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)   
	) 
);
// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Game And Sports', 'exposed'),
		'base' => 'game_sports_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'gmsp_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			),      
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'gmsp_per_pg',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Input numeric value here.', 'exposed')
			),  
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'gmsp_order_typ',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC'
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			),       
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Category', 'exposed'),
				'param_name' => 'gmsp_cat',
				'value' => exposed_category_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)   
	) 
);
// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Gallery Post', 'exposed'),
		'base' => 'game_sports_massonry_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Thumbnail Image', 'exposed'),
				'param_name' => 'mspmsnry_thumb', 
				'admin_label' => true,
                'description' => esc_html__('Upload an image here.', 'exposed')
			),    
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Post', 'exposed'),
				'param_name' => 'gmspmsnry_post',
				'value' => exposed_post_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			),     
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Category BG Color', 'exposed'),
				'param_name' => 'cat_bgc',
				'value' => array(
					esc_html__('Yellow','exposed') => 'yellow-bg',
					esc_html__('Cyan','exposed') => 'cyan-bg',
					esc_html__('Green','exposed') => 'green-bg' 
					),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)   
	) 
);

// Display Featured Post
vc_map( 
    array(
		'name' => esc_html__('Breaking Post', 'exposed'),
		'base' => 'breaking_post',
		'class' => '',
		'icon' => 'icon-mpc-prod_slider',
		'category' => esc_html__('Exposed', 'exposed'),
		'params' => array( 
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Section Title', 'exposed'),
				'param_name' => 'brk_sec_ttl',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Write section title here.', 'exposed')
			),     
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Number of Post to Show', 'exposed'),
				'param_name' => 'brk_per_pg',
				'value' => '',
				'admin_label' => true,
                'description' => esc_html__('Input numeric value here.', 'exposed')
			),  
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Order', 'exposed'),
				'param_name' => 'brk_order_typ',
				'value' => array(
					esc_html__('DESC','exposed') => 'DESC',
					esc_html__('ASC','exposed') => 'ASC'
					),
				'admin_label' => true,
                'description' => esc_html__('Select a order.', 'exposed')
			),     
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Select Category', 'exposed'),
				'param_name' => 'brk_cat',
				'value' => exposed_category_query(),
				'admin_label' => true,
                'description' => esc_html__('Select a category to display post.', 'exposed')
			) 	
		)      
	) 
);
