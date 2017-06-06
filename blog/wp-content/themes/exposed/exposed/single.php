<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Exposed
 */

// $exposed_opt = new ExposedFrameworkOpt();
// $exposed_sidebar = $exposed_opt->exposed_sidebar_banner();

$exposed_sidebar = get_post_meta(get_the_ID(),'_exposed_post_sidebar',true);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
	        <section id="main_section"> 
            	<h2 class="hdm"><?php esc_html_e('page titel','exposed'); ?></h2>
	            <div class="business mar-btm-50 mar-top-50" id="business">
	                <div class="container ">
	                    <div class="row">
                            <?php if( $exposed_sidebar =='left' ): ?>
                                <div class="col-md-4 col-sm-12 sidebar-fixed">
                                    <div class="sidebar-absolute">
                                        <?php get_sidebar(); ?>
                                    </div><!--/.sidebar-absolute--> 
                                </div><!--/.col-sm-4-->
                            <?php endif; ?>
                            <?php $exposed_fulw = ( $exposed_sidebar == 'fullw') ? '12' : '8';  ?>
	                        <div class="col-md-<?php echo esc_attr($exposed_fulw); ?> col-sm-12">
								<?php while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'template-parts/content-single', get_post_format());
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
									 ?> 
								<?php endwhile; ?>
	                            
	                        </div><!--   /.col-sm-8   -->

                            <?php if( ($exposed_sidebar !='left') && ($exposed_sidebar !='fullw') && ($exposed_sidebar !='fulls') ): ?>
                                <div class="col-md-4 col-sm-12 sidebar-fixed">
                                    <div class="sidebar-absolute">
                                        <?php get_sidebar(); ?>
                                    </div><!--/.sidebar-absolute--> 
                                </div><!--/.col-sm-4-->
                            <?php endif; ?>
	                    </div><!--/.row--> 
	                </div><!--/.contaier--> 
	            </div><!--/#business-->
	         
	            <div>
	                <div class="container">
	                    <div class="triple-border"></div>
	                </div>
	            </div>
	            
	        </section>
	        <!--Main Content Section End--> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
