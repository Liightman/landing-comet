<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Exposed
 */

$exposed_opt = new ExposedFrameworkOpt();
$exposed_sidebar = $exposed_opt->exposed_sidebar_banner();
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
            <section id="main_section">
                <h2 class="hdm"><?php esc_html_e('page titel','exposed'); ?></h2>
                <div class="business blog-post mar-btm-50 mar-top-50" id="business">
                    <div class="container">
                        <div class="row">
                            <?php if( $exposed_sidebar =='left' ): ?>
                                <div class="col-md-4 col-sm-12 sidebar-fixed">
                                    <div class="sidebar-absolute">
                                        <?php get_sidebar(); ?>
                                    </div><!--/.sidebar-absolute--> 
                                </div><!--/.col-sm-4-->
                            <?php endif; ?>
                            <div class="col-md-8 col-sm-12">  
                                <?php
                                if ( have_posts() ) : 
                                    /* Start the Loop */
                                    $i=1;
                                    echo '<div class="row">';
                                    while ( have_posts() ) : the_post();   
                                        $count_posts = wp_count_posts(); 
                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', 'search' );
                                        if ($i % 2 == 0 && ($count_posts->publish != $i)) {
                                            echo '</div>';
                                            echo '<div class="row">';
                                        } $i++;
                                    endwhile;
                                    echo '</div>';
                                    ?>
                                    <nav> 
                                        <?php echo exposed_pagination(); ?>
                                    </nav> 
                                     <?php
                                else :
                                    get_template_part( 'template-parts/content', 'none' );
                                endif; ?>    
                            </div><!--/.col-md-8-->
                            <?php if( $exposed_sidebar !='left' ): ?>
                                <div class="col-md-4 col-sm-12 sidebar-fixed">
                                    <div class="sidebar-absolute">
                                        <?php get_sidebar(); ?>
                                    </div><!--/.sidebar-absolute--> 
                                </div><!--/.col-sm-4-->
                            <?php endif; ?>
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