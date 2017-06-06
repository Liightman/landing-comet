<?php

add_action('widgets_init', 'exposed_about_me_load_widgets');
function exposed_about_me_load_widgets(){
	register_widget('exposed_about_me_Widget');
}


class exposed_about_me_Widget extends WP_Widget {
	function exposed_about_me_Widget(){
		$widget_ops = array('classname' => 'trd-recent-post-widget', 'description' => esc_html__('Exposed: About Me Widget','exposed') );
		$control_ops = array('id_base' => 'exposed_about_me-widget');
		parent::__construct('exposed_about_me-widget', esc_html__('Exposed: About Me Widget','exposed'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget; 
		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  -->  
            <div>
                <div class="pos-relative">
                    <img src="<?php echo esc_url($instance['pro_image_uri']); ?>" alt="Profile Image" class="img-responsive">
                    <div class="overlay"></div>    
                </div>
                <div class="inline-block mar-top-15">
                    <p><?php printf(esc_html__('%s','exposed'),$instance['description']); ?></p>
                </div>
            </div> 
            <h5 class="black mar-top-15"><?php printf(esc_html__('%s','exposed'),$instance['name']); ?></h5>
            <p class="mar-top-15"><img src="<?php echo esc_url($instance['sig_image_uri']); ?>" alt="Signature Image" ></p> 
		<!-- start code here -->

		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title']; 
		$instance['pro_image_uri'] = $new_instance['pro_image_uri']; 
		$instance['description'] = $new_instance['description']; 
		$instance['name'] = $new_instance['name']; 
		$instance['sig_image_uri'] = $new_instance['sig_image_uri']; 
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'About Me','pro_image_uri' => '','description' => '','name' => '','sig_image_uri' => ''  );
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pro_image_uri')); ?>"><?php esc_html_e('Profile Image Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('pro_image_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('pro_image_uri')); ?>" value="<?php echo esc_attr($instance['pro_image_uri']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description','exposed'); ?>:</label> 
			<textarea class="widefat" rows="3" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo $instance['description']; ?></textarea> 
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Name','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" value="<?php echo esc_attr($instance['name']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('sig_image_uri')); ?>"><?php esc_html_e('Signature Image Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('sig_image_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('sig_image_uri')); ?>" value="<?php echo esc_attr($instance['sig_image_uri']); ?>" />
		</p>  
	<?php
	}
}


