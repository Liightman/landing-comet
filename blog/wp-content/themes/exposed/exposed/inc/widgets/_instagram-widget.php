<?php

add_action('widgets_init', 'exposed_instagram_load_widgets');
function exposed_instagram_load_widgets(){
	register_widget('exposed_instagram_Widget');
}


class exposed_instagram_Widget extends WP_Widget {
	function exposed_instagram_Widget(){
		$widget_ops = array('classname' => 'trd-recent-post-widget', 'description' => esc_html__('Exposed: Instagram Widget','exposed') );
		$control_ops = array('id_base' => 'exposed_instagram-widget');
		parent::__construct('exposed_instagram-widget', esc_html__('Exposed: Instagram Widget','exposed'), $widget_ops, $control_ops);
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
	        <ul id="instagram"></ul> 
			<!-- start code here -->
			<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery("#instagram").jqinstapics({
					  "user_id": "<?php echo $instance['userid']; ?>",
					  "access_token": "<?php echo $instance['access_token']; ?>",
					  "count": "<?php echo $instance['count']; ?>"
					});
				})
			</script>
		<!-- start code here -->

		<?php
		echo $after_widget;
	}
 
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title']); 
		$instance['userid'] = sanitize_text_field( $new_instance['userid']);
		$instance['access_token'] = sanitize_text_field( $new_instance['access_token']);  
		$instance['count'] = sanitize_text_field( $new_instance['count']);  
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Instagram','instagram' => '','userid' => '','access_token' => '','count' => '4' );
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('userid')); ?>"><?php esc_html_e('User ID','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('userid')); ?>" name="<?php echo esc_attr($this->get_field_name('userid')); ?>" value="<?php echo esc_attr($instance['userid']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('access_token')); ?>"><?php esc_html_e('Access Token','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('access_token')); ?>" name="<?php echo esc_attr($this->get_field_name('access_token')); ?>" value="<?php echo esc_attr($instance['access_token']); ?>" />
		</p>  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('count')); ?>"><?php esc_html_e('Number of Image to Show','exposed'); ?>:</label>
			<input class="widefat" type="number" style="width:80px" id="<?php echo esc_attr($this->get_field_id('count')); ?>" name="<?php echo esc_attr($this->get_field_name('count')); ?>" value="<?php echo esc_attr($instance['count']); ?>" />
		</p>  
	<?php
	}
}

