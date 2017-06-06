<?php $exposed_mt_cls = '';
	if(has_post_thumbnail()): ?> 
        <div class="pos-relative">
            <?php the_post_thumbnail('',array('class'=>'img-responsive')); ?>
            <div class="overlay"></div>
			<?php 
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
				    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button yellow-bg left-bottom">' . esc_html( $categories[0]->name ) . '</a>';
				}
			?>   
        </div>
    <?php 
    $exposed_mt_cls = 'mar-top-30';
    endif; ?>
    <div class="<?php echo esc_attr($exposed_mt_cls);?> singlep">
        <h2 class="cp-semi-bold mar-btm-10"><a href="#" class="black"><?php the_title(); ?></a></h2> 
        <span class="font-10 letter-spacing-1 post-date"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_date('M n, Y');?></span>
        <?php the_content(); 
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'exposed' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) ); 

			global $numpages;
			if ( is_singular() && $numpages > 1 ) {
			    if ( is_singular( 'attachment' ) ) {
			        // Parent post navigation.
			        the_post_navigation( array(
			          'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'exposed' ),
			        ) );
			    } elseif ( is_singular( 'post' ) ) {
			        // Previous/next post navigation.
			        the_post_navigation( array(
			          'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'exposed' ) . '</span> ' .
			            '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'exposed' ) . '</span> ' .
			            '<span class="post-title">%title</span>',
			          'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'exposed' ) . '</span> ' .
			            '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'exposed' ) . '</span> ' .
			            '<span class="post-title">%title</span>',
			        ) );
			    }
			}

        ?> 
    </div> 
    <?php $exposed_video = get_post_meta(get_the_ID(),'_exposed_post_formate_vdo',true); ?>
    <?php if($exposed_video!=''): ?>
	    <br> <br>
		<iframe width="700" height="360" src="<?php echo esc_url($exposed_video); ?>" allowfullscreen></iframe>	    
	<?php endif; ?>
    <br> 
    <br> 
    <p>
    <?php  if(get_post_meta(get_the_ID(),'_exposed_post_aftr_ftimg',true)!=''){
    	echo get_post_meta(get_the_ID(),'_exposed_post_aftr_ftimg',true);
    } ?>
    </p>
    <div class="row">
        <div class="col-sm-12"> 
            <hr>
            <h4 class="inline-block mar-right-25"><?php esc_html_e('SHARE ON','exposed'); ?></h4>
            <ul class="social-icon mar-top-15 mar-btm-10 inline-block">
                <li><a href="<?php echo esc_url('http://www.facebook.com/sharer.php?u='.get_the_permalink().'&amp;title='.get_the_title()); ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo esc_url('http://twitter.com/home/?status='.get_the_title().' - '.get_the_permalink()); ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo esc_url('https://plus.google.com/share?url='.get_the_permalink().'&amp;title='.get_the_title()); ?>"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="<?php echo esc_url('http://pinterest.com/pin/create/button/?url='.get_the_permalink().'&amp;title='.get_the_title()); ?>"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="<?php echo esc_url('http://www.linkedin.com/shareArticle?mini=true&amp;title='.get_the_title().'&amp;url='.get_the_permalink()); ?>"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <hr>
        </div>
    </div> 
	<?php 
	$exposed_author = get_the_author_meta('description');
	if($exposed_author!=''): ?>
	    <div class="row mar-btm-50">
	        <div class="col-sm-12"> 
	            <div class="ash-bg padd-35 mar-top-25">
	                <div class="media author">
	                  <div class="media-left"> 
	                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 70 ); ?> 
	                  </div>
	                  <div class="media-body">
	                      <h5 class="media-heading"><?php the_author(); ?></h5>
	                      <p><?php the_author_meta('description'); ?></p>
	                      <div class="commnt-icon pull-right mar-top-20">
	                          <a href="#"><i class="fa fa-facebook"></i></a>
	                          <a href="#"><i class="fa fa-twitter"></i></a>
	                          <a href="#"><i class="fa fa-vimeo"></i></a>
	                          <a href="#"><i class="fa fa-dribbble"></i></a>
	                      </div>
	                  </div>
	                </div>
	            </div>
	        </div>
	    </div> 
	<?php endif; ?>
   
	<?php 
	$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
	if( $related ): ?>
	    <div class="row mar-btm-30">
	        <div class="col-sm-12">
	            <h4 class="section-header"><span><?php esc_html_e('YOU MAY ALSO LIKE','exposed'); ?></span></h4>
	            <div class="row">
					<?php foreach( $related as $post ) {
					setup_postdata($post); ?>
						<div class="col-sm-6">
							<div>
								<?php 
								    $exposed_mt_cls = '';
								    if(has_post_thumbnail()): ?>
									<div class="pos-relative">
										<?php the_post_thumbnail('',array('class'=>'img-responsive')); ?>
										<div class="overlay"></div>
										<?php 
											$categories = get_the_category();
											if ( ! empty( $categories ) ) {
											    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button yellow-bg left-bottom">' . esc_html( $categories[0]->name ) . '</a>';
											}
										?>  
									</div>   
								<?php 
								    $exposed_mt_cls = 'mar-top-30'; 
								    endif; ?> 
								<div>
									<h4 class="cp-semi-bold <?php echo esc_attr($exposed_mt_cls);?> mar-btm-10"><a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a></h4>
									<span class="font-10 letter-spacing-1"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_date('M n, Y');?></span>
									<p class="mar-top-10"><?php echo wp_trim_words(get_the_content(),13,''); ?>n</p>
								</div>
							</div>
							
						</div>
					<?php } ?> 
	            </div>
	        </div>
	    </div> 
	<?php endif;
	wp_reset_postdata(); ?>
