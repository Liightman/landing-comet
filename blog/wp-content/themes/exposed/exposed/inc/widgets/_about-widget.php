<?php

add_action('widgets_init', 'exposed_about_load_widgets');
function exposed_about_load_widgets(){
	register_widget('exposed_about_Widget');
}


class exposed_about_Widget extends WP_Widget {
	function exposed_about_Widget(){
		$widget_ops = array('classname' => 'trd-about-widget', 'description' => esc_html__('Exposed: About Widget','exposed') );
		$control_ops = array('id_base' => 'exposed_about-widget');
		parent::__construct('exposed_about-widget', esc_html__('Exposed: About Widget','exposed'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args); 
		echo $before_widget;
 
		?> 
		<!-- start coding  --> 
			<?php if(isset($instance['logo_text'])): ?>
                <div class="logo mar-btm-40">
                    <h1 class="font-45 line-height-50"><a href="<?php echo esc_url($instance['logo_url']); ?>"><?php echo esc_html($instance['logo_text']); ?></a></h1>
                </div> 
	        <?php endif; ?>		 
            <?php if(isset($instance['description'])) echo "<p>".esc_html($instance['description'])."</p>"; ?>  
            <ul class="social-icon mar-top-30 mar-bottom-responsive-30">
				<?php if(isset($instance['fb'])): ?>
				 	<li><a href="<?php echo esc_url($instance['fb']); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php if(isset($instance['tw'])): ?>
				 	<li><a href="<?php echo esc_url($instance['tw']); ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				<?php if(isset($instance['drb'])): ?>
				 	<li><a href="<?php echo esc_url($instance['drb']); ?>"><i class="fa fa-dribbble"></i></a></li>
				<?php endif; ?>
				<?php if(isset($instance['pin'])): ?>
				 	<li><a href="<?php echo esc_url($instance['pin']); ?>"><i class="fa fa-pinterest-p"></i></a></li>
				<?php endif; ?>
				<?php if(isset($instance['ld'])): ?>
				 	<li><a href="<?php echo esc_url($instance['ld']); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php if(isset($instance['inst'])): ?>
				 	<li><a href="<?php echo esc_url($instance['inst']); ?>"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
            </ul> 
		<!-- start code here --> 
                         
		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance; 
		$instance['logo_text'] = sanitize_text_field( $new_instance['logo_text']);
		$instance['logo_url'] = sanitize_text_field( $new_instance['logo_url']);
		$instance['fb'] = sanitize_text_field( $new_instance['fb']);
		$instance['tw'] = sanitize_text_field( $new_instance['tw']);
		$instance['drb'] = sanitize_text_field( $new_instance['drb']);
		$instance['pin'] = sanitize_text_field( $new_instance['pin']);
		$instance['ld'] = sanitize_text_field( $new_instance['ld']);
		$instance['inst'] = sanitize_text_field( $new_instance['inst']);
		$instance['description'] = esc_textarea( $new_instance['description']);  
		return $instance;
	}

	function form($instance)
	{
		$defaults = array( 'logo_text' => '','logo_url' => '','fb' => '','tw' => '','drb' => '','pin' => '','ld' => '','inst' => '','description' => '' );
		$instance = wp_parse_args((array) $instance, $defaults); ?> 
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('logo_text')); ?>"><?php esc_html_e( 'Logo Title:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('logo_text')); ?>" id="<?php echo esc_attr($this->get_field_name('logo_text')); ?>" value="<?php echo esc_attr($instance['logo_text']); ?>"> 
    	</p> 
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('logo_url')); ?>"><?php esc_html_e( 'Logo Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('logo_url')); ?>" id="<?php echo esc_attr($this->get_field_name('logo_url')); ?>" value="<?php echo esc_attr($instance['logo_url']); ?>"> 
    	</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description','exposed'); ?>:</label>
			<textarea class="widefat" rows="3" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo $instance['description']; ?></textarea>
		</p> 
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('fb')); ?>"><?php esc_html_e( 'Facebook Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('fb')); ?>" id="<?php echo esc_attr($this->get_field_name('fb')); ?>" value="<?php echo esc_attr($instance['fb']); ?>"> 
    	</p>
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('tw')); ?>"><?php esc_html_e( 'Twitter Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('tw')); ?>" id="<?php echo esc_attr($this->get_field_name('tw')); ?>" value="<?php echo esc_attr($instance['tw']); ?>"> 
    	</p>
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('drb')); ?>"><?php esc_html_e( 'Dribbble Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('drb')); ?>" id="<?php echo esc_attr($this->get_field_name('drb')); ?>" value="<?php echo esc_attr($instance['drb']); ?>"> 
    	</p>
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('pin')); ?>"><?php esc_html_e( 'Pinterest Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('pin')); ?>" id="<?php echo esc_attr($this->get_field_name('pin')); ?>" value="<?php echo esc_attr($instance['pin']); ?>"> 
    	</p>
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('ld')); ?>"><?php esc_html_e( 'Linkedin Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('ld')); ?>" id="<?php echo esc_attr($this->get_field_name('ld')); ?>" value="<?php echo esc_attr($instance['ld']); ?>"> 
    	</p>
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id('inst')); ?>"><?php esc_html_e( 'Instagram Url:','exposed' ); ?></label>
			<input type="text" class="widefat " name="<?php echo esc_attr($this->get_field_name('inst')); ?>" id="<?php echo esc_attr($this->get_field_name('inst')); ?>" value="<?php echo esc_attr($instance['inst']); ?>"> 
    	</p>
	<?php
	}
}


