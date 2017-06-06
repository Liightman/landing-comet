<?php
/**
 * Template Name: 2 Col Right Sidebar Blog
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exposed
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
            <section id="main_section">
                <h2 class="hdm"><?php esc_html_e('page titel','exposed'); ?></h2>
                <div class="business blog-post mar-btm-50 mar-top-50" id="business">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="row">
                                            <?php 
                                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                                            $expo_page_query = new WP_Query(array( 'post_type'=> 'post','paged' => $paged ));   
                                            if ( $expo_page_query->have_posts() ) : 
                                                while ( $expo_page_query->have_posts() ) : $expo_page_query->the_post(); ?> 
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mar-btm-30">
                                                        <?php $exposed_img_chk = 'noimg';
                                                        if(has_post_thumbnail()): ?>
                                                            <div class="pos-relative">
                                                                <?php the_post_thumbnail('', array('class'=>' ')); ?>
                                                                <div class="overlay"></div>
                                                                <?php 
                                                                    $categories = get_the_category();
                                                                    if ( ! empty( $categories ) ) {
                                                                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button yellow-bg left-bottom">' . esc_html( $categories[0]->name ) . '</a>';
                                                                    }
                                                                ?>  
                                                            </div>  
                                                        <?php $exposed_img_chk = '';
                                                         endif; ?>  
                                                        <div>
                                                            <h4 class="cp-semi-bold mar-top-30 mar-btm-10 <?php echo esc_attr($exposed_img_chk); ?>"><a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a></h4>
                                                            <span class="font-10 letter-spacing-1"><i class="fa fa-clock-o mar-right-10 font-14"></i><?php echo get_the_date('M n, Y');?></span>
                                                            <p class="mar-top-10"><?php echo wp_trim_words( get_the_content() , 15, ''); ?></p>
                                                        </div>
                                                    </div> 
                                                </div> 
                                            <?php endwhile;  ?> 
                                            </div> 
                                        </div> 
                                        <div class="col-md-12 col-sm-12">
                                            <nav> 
                                                <?php echo exposed_pagination($expo_page_query->max_num_pages,"",$paged); ?>
                                            </nav> 
                                        </div>
                                         <?php
                                    else :
                                        get_template_part( 'template-parts/content', 'none' );
                                    endif;  wp_reset_postdata();?> 
                                </div>  
                            </div><!--/.col-md-8-->
                            <div class="col-md-4 col-sm-12 sidebar-fixed">
                                <div class="sidebar-absolute">
                                    <?php get_sidebar(); ?>
                                </div><!--/.sidebar-absolute--> 
                            </div><!--/.col-sm-4-->
                        </div><!--/.row-->
                    </div><!--/.container--> 
                    <div class="clear-fix"></div> 
                </div><!--/#business-->
                
                <div class="border-triple">
                    <div class="container">
                        <div class="triple-border"></div>
                    </div><!--/.container--> 
                </div><!--/.border-triple-->
                
            </section> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
