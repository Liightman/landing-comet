<?php

add_action('widgets_init', 'exposed_social_ico_load_widgets');
function exposed_social_ico_load_widgets(){
	register_widget('exposed_social_ico_Widget');
}


class exposed_social_ico_Widget extends WP_Widget {
	function exposed_social_ico_Widget(){
		$widget_ops = array('classname' => 'trd-recent-post-widget', 'description' => esc_html__('Exposed: Social Widget','exposed') );
		$control_ops = array('id_base' => 'exposed_social_ico-widget');
		parent::__construct('exposed_social_ico-widget', esc_html__('Exposed: Social Widget','exposed'), $widget_ops, $control_ops);
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
            <div class="clearfix">
            	<?php if($instance['fb_uri']): ?>
	                <div class="icon-social fb-bg">
	                    <a href="<?php echo esc_url($instance['fb_uri']); ?>"><i class="fa fa-facebook"></i></a>
	                </div>
	            <?php endif; ?>
                <?php if($instance['tw_uri']): ?>
	                <div class="icon-social twi-bg">
	                    <a href="<?php echo esc_url($instance['tw_uri']); ?>"><i class="fa fa-twitter"></i></a>
	                </div>
	            <?php endif; ?>
                <?php if($instance['gp_uri']): ?>
	                <div class="icon-social gpl-bg">
	                    <a href="<?php echo esc_url($instance['gp_uri']); ?>"><i class="fa fa-google-plus"></i></a>
	                </div> 
	            <?php endif; ?>
                <?php if($instance['ytb_uri']): ?>
	                <div class="icon-social ytu-bg">
	                    <a href="<?php echo esc_url($instance['ytb_uri']); ?>"><i class="fa fa-youtube-play"></i></a>
	                </div>
	            <?php endif; ?>
                <?php if($instance['red_uri']): ?>
	                <div class="icon-social ora-bg">
	                    <a href="<?php echo esc_url($instance['red_uri']); ?>"><i class="fa fa-reddit"></i></a>
	                </div>
	            <?php endif; ?>
                <?php if($instance['pin_uri']): ?>
	                <div class="icon-social ytu-bg">
	                    <a href="<?php echo esc_url($instance['pin_uri']); ?>"><i class="fa fa-pinterest"></i></a>
	                </div> 
	            <?php endif; ?>
                <?php if($instance['drup_uri']): ?>
	                <div class="icon-social vio-bg">
	                    <a href="<?php echo esc_url($instance['drup_uri']); ?>"><i class="fa fa-drupal"></i></a>
	                </div>
	            <?php endif; ?>
                <?php if($instance['ld_uri']): ?>
	                <div class="icon-social twi-bg">
	                    <a href="<?php echo esc_url($instance['ld_uri']); ?>"><i class="fa fa-linkedin"></i></a>
	                </div>
	            <?php endif; ?>
            	<?php if($instance['skp_uri']): ?>
	                <div class="icon-social skp-bg">
	                    <a href="<?php echo esc_url($instance['skp_uri']); ?>"><i class="fa fa-skype"></i></a>
	                </div>
	            <?php endif; ?>
            </div>
		<!-- start code here -->

		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title']; 
		$instance['fb_uri'] = $new_instance['fb_uri'];  
		$instance['tw_uri'] = $new_instance['tw_uri'];  
		$instance['gp_uri'] = $new_instance['gp_uri'];  
		$instance['ytb_uri'] = $new_instance['ytb_uri'];  
		$instance['red_uri'] = $new_instance['red_uri'];  
		$instance['pin_uri'] = $new_instance['pin_uri'];  
		$instance['drup_uri'] = $new_instance['drup_uri'];  
		$instance['ld_uri'] = $new_instance['ld_uri'];  
		$instance['skp_uri'] = $new_instance['skp_uri'];  
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Get Social','fb_uri' => '','tw_uri' => '','gp_uri' => '','ytb_uri' => '','red_uri' => '','pin_uri' => '','drup_uri' => '','ld_uri' => '','skp_uri' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('fb_uri')); ?>"><?php esc_html_e('Facebook Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('fb_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('fb_uri')); ?>" value="<?php echo esc_attr($instance['fb_uri']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('tw_uri')); ?>"><?php esc_html_e('Twitter Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('tw_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('tw_uri')); ?>" value="<?php echo esc_attr($instance['tw_uri']); ?>" />
		</p>   
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('gp_uri')); ?>"><?php esc_html_e('Google Plus Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('gp_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('gp_uri')); ?>" value="<?php echo esc_attr($instance['gp_uri']); ?>" />
		</p>    
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('ytb_uri')); ?>"><?php esc_html_e('Youtube Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('ytb_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('ytb_uri')); ?>" value="<?php echo esc_attr($instance['ytb_uri']); ?>" />
		</p>   
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('red_uri')); ?>"><?php esc_html_e('Reedit Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('red_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('red_uri')); ?>" value="<?php echo esc_attr($instance['red_uri']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pin_uri')); ?>"><?php esc_html_e('Pinterest Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('pin_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('pin_uri')); ?>" value="<?php echo esc_attr($instance['pin_uri']); ?>" />
		</p>   
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('drup_uri')); ?>"><?php esc_html_e('Drupal Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('drup_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('drup_uri')); ?>" value="<?php echo esc_attr($instance['drup_uri']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('ld_uri')); ?>"><?php esc_html_e('Linkedin Url','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('ld_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('ld_uri')); ?>" value="<?php echo esc_attr($instance['ld_uri']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('skp_uri')); ?>"><?php esc_html_e('Skype ID','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('skp_uri')); ?>" name="<?php echo esc_attr($this->get_field_name('skp_uri')); ?>" value="<?php echo esc_attr($instance['skp_uri']); ?>" />
		</p>    
	<?php
	}
}


