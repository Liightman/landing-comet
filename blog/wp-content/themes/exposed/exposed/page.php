<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exposed
 */
if(is_page()){
	$exposed_pg_sidbr = get_post_meta(get_the_ID(),'_exposed_post_sidebar',true);
}else{
	$exposed_pg_sidbr = '';
}
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
            <section id="main_section">
            	<h2 class="hdm"><?php esc_html_e('page titel','exposed'); ?></h2>
                <div class="business blog-post mar-btm-50 mar-top-50">
					<?php if($exposed_pg_sidbr =='fulls'): ?>
			            <?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>
					<?php else: ?> 
	                    <div class="container">
	                        <div class="row">
						      	<?php if($exposed_pg_sidbr=='left'): ?> 
		                            <div class="col-md-4 col-sm-12 sidebar-fixed">
		                                <div class="sidebar-absolute">
		                                    <?php get_sidebar(); ?>
		                                </div><!--/.sidebar-absolute--> 
		                            </div><!--/.col-sm-4-->
						      	<?php endif; ?>

	                            <div class="col-md-<?php echo ($exposed_pg_sidbr=='fullw') ? '12' : '8'; ?> col-sm-12">  
						            <?php
									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/content', 'page' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

									endwhile; // End of the loop.
									?>
	                            </div><!--/.col-md-8-->
						      	<?php if( ($exposed_pg_sidbr!='left') && ($exposed_pg_sidbr!='fullw')  && ($exposed_pg_sidbr!='fulls') ): ?>
		                            <div class="col-md-4 col-sm-12 sidebar-fixed">
		                                <div class="sidebar-absolute">
		                                    <?php get_sidebar(); ?>
		                                </div><!--/.sidebar-absolute--> 
		                            </div><!--/.col-sm-4-->
						      	<?php endif; ?>
	                        </div><!--/.row-->
	                    </div><!--/.container--> 
	                <?php endif; ?>
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
