 
    <!-- Main Slider Start-->
    <div class="main-slider mar-top-50" id="main_slider">
        <div class="container">
         <div id="owl-demo" class="owl-carousel owl-theme"> 
            <div class="item">
                <div class="row">
                    <?php 
                    $i=1;
                    $exposed_slider = new WP_Query(array('post_type'=>'sliders','posts_per_page'=>-1,'order'=>'ASC'));
                    while($exposed_slider->have_posts()): $exposed_slider->the_post(); 

                    $exposed_post_id = get_post_meta( get_the_ID(), '_exposed_slider_post_link', true );
                    $exposed_post_query = new WP_Query(array('post_type' => 'post','posts_per_page'=>-1, 'p' => $exposed_post_id )); 
                    ?> 
                        <div class="col-xs-4 exp-slidr"> 
                            <div class="b-neg-mar-13 pos-relative">
                                <?php the_post_thumbnail('exposed-slider-post',array('class'=>'img-responsive')); ?> 
                                <div class="overlay"></div>
                                <div class="slider-content"> 
                                    <?php  
                                        $exposed_terms = get_the_terms($exposed_post_query->post->ID,'category'); 
                                        if ( ! empty( $exposed_terms ) ) {
                                            echo '<a href="' . esc_url( get_category_link( $exposed_terms[0]->term_id ) ) . '" class="button yellow-bg">' . esc_html( $exposed_terms[0]->name ) . '</a>';
                                        }
                                    ?> 
                                    <h2 class="cp-semi-bold mar-top-7 mar-btm-5"><a href="<?php echo esc_url(get_the_permalink($exposed_post_query->post->ID)); ?>" class="white"><?php the_title(); ?></a></h2>
                                    <span class="font-10 letter-spacing-1 white ttu"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_date('M n, Y');?></span>
                                </div>
                            </div>
                        </div>  
                    <?php 
                    if ($i % 3 == 0 && ($exposed_slider->found_posts != $i)) {
                        echo '</div></div>';
                        echo '<div class="item"><div class="row">';
                    } $i++;
                    ?> 
                    <?php endwhile; wp_reset_postdata(); ?> 
                </div>
            </div><!--/.item-->

         </div><!--/.owl-carousel--> 
        </div><!--/.container--> 
    </div><!--/#main_slider-->
    <!-- Main Slider End-->
    