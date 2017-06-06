<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Exposed
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					 <div class="fzerof">
					 	<h1 class="page-title"><?php esc_html_e('404','exposed'); ?></h1>
					 	<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'exposed' ); ?></h2>
					 	<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go Back To  Home','exposed'); ?></a>
					 </div>
					<div class="border-triple">
	                    <div class="container">
	                        <div class="triple-border"></div>
	                    </div><!--/.container--> 
	                </div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
