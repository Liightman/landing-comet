<?php

add_action('widgets_init', 'exposed_rcp_load_widgets');
function exposed_rcp_load_widgets(){
	register_widget('exposed_rcp_Widget');
}


class exposed_rcp_Widget extends WP_Widget {
	function exposed_rcp_Widget(){
		$widget_ops = array('classname' => 'trd-recent-post-widget', 'description' => esc_html__('Exposed: Recent Post (Footer)','exposed') );
		$control_ops = array('id_base' => 'exposed_rcp-widget');
		parent::__construct('exposed_rcp-widget', esc_html__('Exposed: Recent Post (Footer)','exposed'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget;
		$rcp_item_num = $instance['post_pr_pg'];
		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  -->
		<?php $rcp_query = new WP_Query(  array( 'post_type' => 'post','posts_per_page' => $rcp_item_num ) ); ?> 
             
		<?php while ( $rcp_query->have_posts() ) : $rcp_query->the_post(); ?> 
            <div class="min-height-65">
                <div class="sidebar-img">
                	<?php if(has_post_thumbnail()):
                	the_post_thumbnail('exposed-footer-rcp');
                	else:
                	echo '<img src="http://placehold.it/76x61" alt="img">';
                	endif; ?>
                    
                </div>
                <div class="sidebar-content">
                    <h5 class="mar-btm-5"><a href="<?php the_permalink(); ?>" class="black"><?php echo wp_trim_words(get_the_title(),3,''); ?> </a> </h5>
                    <span class="font-10 letter-spacing-1"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_time('M d, Y'); ?></span>
                </div>
            </div>
            <hr class="mar-18x0"> 
		<?php endwhile; wp_reset_postdata(); ?> 
     
		<!-- start code here -->

		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title']; 
		$instance['post_pr_pg'] = $new_instance['post_pr_pg']; 
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Post','post_pr_pg' => '3' );
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','exposed'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('post_pr_pg')); ?>"><?php esc_html_e('Number Of Post To Show','exposed'); ?>:</label>
			<input class="widefat" type="number" style="width: 70px;" id="<?php echo esc_attr($this->get_field_id('post_pr_pg')); ?>" name="<?php echo esc_attr($this->get_field_name('post_pr_pg')); ?>" value="<?php echo esc_attr($instance['post_pr_pg']); ?>" />
		</p> 
	<?php
	}
}


