<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exposed
 */

$exposed_opt = new ExposedFrameworkOpt();
$exposed_footr_copy = $exposed_opt->exposed_copyright_text_here();
?>

	</div><!-- #content -->

       <!--Footer Start-->
        <footer class="footer mar-top-50" id="footer">
            <div class="container">
                <div class="border-x3"></div>
                <div class="row"> 
                    <?php 
                    if ( is_active_sidebar( 'sidebar-f' ) ) {
                        dynamic_sidebar( 'sidebar-f' );  
                    }
                    ?>                     
                </div>
                <div class="row mar-top-50">
                    <div class="col-sm-12">
                        <hr>
                        <p class="ash2 text-center mar-top-35 mar-btm-30 letter-spacing-5"><?php printf(esc_html__('%s','exposed'),$exposed_footr_copy); ?></p>
                    </div>
                </div>
                
            </div>
        </footer>
		<!--Footer End-->
    </div><!-- /.wrapper-->
    
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
