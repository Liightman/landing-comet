<?php

add_action('widgets_init', 'exposed_sidercp_load_widgets');
function exposed_sidercp_load_widgets(){
	register_widget('exposed_sidercp_Widget');
}


class exposed_sidercp_Widget extends WP_Widget {
	function exposed_sidercp_Widget(){
		$widget_ops = array('classname' => 'trd-recent-post-widget', 'description' => esc_html__('Exposed: Recent Post ( Side )','exposed') );
		$control_ops = array('id_base' => 'exposed_sidercp-widget');
		parent::__construct('exposed_sidercp-widget', esc_html__('Exposed: Recent Post ( Side )','exposed'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget;
		$sidercp_item_num = $instance['post_pr_pg'];
		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  -->
		<?php $sidercp_query = new WP_Query(  array( 'post_type' => 'post','posts_per_page' => $sidercp_item_num ) );  
		$count = 0; 
		while ( $sidercp_query->have_posts() ) : $sidercp_query->the_post();    
			$publils_post = $sidercp_query->post_count; ?>  
            <div class="mar-btm-30"> 
            	<?php if($count<=0): ?>
	                <div class="pos-relative">
	                	<?php if(has_post_thumbnail()):
		                	the_post_thumbnail('',array('class'=>'img-responsive'));
		                	else:
		                	echo '<img src="http://placehold.it/230x172" alt="img" class="img-responsive">';
	                	endif; ?> 
	                    <div class="overlay"></div>
						<?php 
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button yellow-bg left-bottom">' . esc_html( $categories[0]->name ) . '</a>';
							}
						?>  
	                </div> 
				<?php else: ?>
				    <div class="sidebar-img">
				    	<?php if(has_post_thumbnail()):
				    	the_post_thumbnail('exposed-footer-rcp');
				    	else:
				    	echo '<img src="http://placehold.it/76x61" alt="img">';
				    	endif; ?> 
				    </div>
				<?php endif; ?>
                <div class="sidebar-content">
                    <h3 class="mar-btm-5 mar-top-15"><a href="<?php the_permalink(); ?>" class="black"><?php echo wp_trim_words(get_the_title(),3,''); ?> </a> </h3>
                    <span class="font-10 letter-spacing-1 post-date"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_time('M d, Y'); ?></span>
                </div>
            </div> 
            <?php $count++;  
            if($count !== $publils_post ): ?>
	            <hr class="mar-18x0"> 
	        <?php endif; ?>
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
		$defaults = array('title' => 'Recent Post','post_pr_pg' => '5' );
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


