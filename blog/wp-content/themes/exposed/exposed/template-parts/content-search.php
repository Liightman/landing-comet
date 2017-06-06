<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exposed
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-md-6 col-sm-12">
        <div class="mar-btm-30">
        	<?php 
        	$exposed_img_chk = 'noimg';
        	if(has_post_thumbnail()): ?>
	            <div class="pos-relative">
	            	<?php the_post_thumbnail('', array('class'=>'img-responsive')); ?> 
	                <div class="overlay"></div> 
					<?php 
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button yellow-bg left-bottom">' . esc_html( $categories[0]->name ) . '</a>';
						}
					?>  
	            </div>   
            <?php 
            $exposed_img_chk = '';
            endif; ?> 
            <div>
                <h4 class="cp-semi-bold mar-top-30 mar-btm-10 <?php echo esc_attr($exposed_img_chk); ?>"><a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a></h4> 
                <?php   if ( is_sticky() && is_home() && ! is_paged() ) {
                    printf( '<span class="dashicons dashicons-admin-post sticky-icon"></span> <span class="font-10 letter-spacing-1 post-date mar-right-10"> %s </span>', esc_html__( 'Sticky ', 'exposed' ) );
                } ?> 
                <span class="font-10 letter-spacing-1 post-date"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_date('M n, Y');?></span> 
	            <?php if(is_sticky()) {
	                the_content(); 
	            }else{
	                ?><p class="mar-top-10"><?php exposed_short_text_remove_shortcode(); ?><p> <?php
	            } ?>  
            </div>
        </div> 
    </div>  
</article><!-- #post-## -->
