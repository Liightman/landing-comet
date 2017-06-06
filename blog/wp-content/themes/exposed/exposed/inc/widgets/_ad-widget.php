<?php

add_action('widgets_init', 'exposed_addd_load_widgets');
function exposed_addd_load_widgets(){
	register_widget('exposed_addd_Widget');
}


class exposed_addd_Widget extends WP_Widget {
	function exposed_addd_Widget(){
		$widget_ops = array('classname' => 'exp-addd-widget', 'description' => esc_html__('Exposed: Ad Widget','exposed') );
		$control_ops = array('id_base' => 'exposed_addd-widget');
		parent::__construct('exposed_addd-widget', esc_html__('Exposed: Ad Widget','exposed'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args); 
		echo $before_widget;
 
		?> 
		<!-- start coding  --> 
			<?php if(isset($instance['logo_img'])): ?>
                 
				<img src="<?php echo esc_url($instance['logo_img']); ?>" class="img-responsive" alt="<?php esc_attr_e('exposed','exposed'); ?>">    
				 
	        <?php endif; ?>	 
		<!-- start code here --> 
                         
		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance; 
		$instance['logo_img'] = sanitize_text_field( $new_instance['logo_img']);  
		return $instance;
	}

	function form($instance)
	{
		$defaults = array( 'logo_img' => '','logo_url' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?> 
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('logo_img')); ?>"><?php esc_html_e( 'Image Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('logo_img')); ?>" id="<?php echo esc_attr($this->get_field_name('logo_img')); ?>" value="<?php echo esc_attr($instance['logo_img']); ?>"> 
    	</p>  
	<?php
	}
}


