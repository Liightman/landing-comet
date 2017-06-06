<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exposed
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php 
$exposed_opt = new ExposedFrameworkOpt();
$exposed_logo = $exposed_opt->exposed_logo(); 
$exposed_srch = $exposed_opt->exposed_srch_icon(); 
$exposed_popmenu = $exposed_opt->exposed_popmenu_icon(); 
$exposed_blogEnabl = $exposed_opt->exposed_enable_banner(); 
wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'exposed' ); ?></a>
 
	<!--Overlay Navigation Start-->
    <?php if($exposed_popmenu==1): ?>
        <div class="inner-nav">
            <div class="container">
            <button class="inner" id="inner_nav"><i class="fa fa-bars black"></i></button>
            <div class="navigation-items">
                <button class="inner2" id="inner_nav2"><i class="fa fa-times"></i></button>
                <div class="container">
                    <?php exposed_pop_menu(); ?> 
                </div>
            </div>
            </div><!--/.container-->    
        </div> <!--/.inner-nav-->
    <?php endif; ?>
	<!--Overlay Navigation End-->
	
	<!--Main Wrapper Start-->
    <?php 
    $exposed_body_layout_otpt = '';
    $exposed_body_layout = $exposed_opt->exposed_body_layout();
    if($exposed_body_layout=='wide'){
        $exposed_body_layout_otpt = 'box-view wrapper2';
    }else{
        $exposed_body_layout_otpt = 'box-view';
    }

    ?>
    <div class="wrapper <?php echo esc_attr($exposed_body_layout_otpt); ?>">
		<!--Header Start-->
        <header>
            <div class="top-bar" id="top_bar">
                <div class="container">
                    <div class="row mar-top-70 mar-btm-70">
                        <div class="col-sm-4 col-xs-2">
                        </div>
                        <div class="col-sm-4 col-xs-8">
                            <div class="logo" id="brand">
                                <h1><a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php printf(esc_html__('%s','exposed'),$exposed_logo); ?>
                                </a></h1>
                            </div>
                        </div>

                        <?php if($exposed_srch==1): ?>
                            <div class="col-sm-4 col-xs-2">
                                <div class="search pull-right mar-top-25">
                                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>"> 
                                        <input type="text" class="input-custom" value="<?php echo get_search_query(); ?>" name="s"  placeholder="<?php esc_attr_e('Search ...','exposed'); ?>" /> 
                                        <button class="srch" type="submit"><i class="fa fa-search"></i></button> 
                                    </form> 
                                </div>
                            </div>
                        <?php endif; ?>
                    </div><!--/.row-->  
                </div><!--/.container-->  
            </div><!--/.top-bar--> 
            
            <div class="main-nav" id="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="navbar navbar-fixed-top navbar-default border-bouble"> 
                                <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'exposed' ); ?></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div><!--/.navbar-header--> 

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <?php exposed_main_menu(); ?>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav><!--/.navbar-default--> 
                        </div>
                    </div><!--/.container-->  
                    <div class="double-border"></div>
                </div><!--/.container-->      
            </div><!--/.main-nav-->
        </header>
		<!--Header End-->
 
<?php 
    if(is_page()){
        $exposed_header = get_post_meta(get_the_ID(),'_exposed_header_style',true);
        $exposed_rev_sliders = get_post_meta(get_the_ID(),'_exposed_rev_slidr_alias',true);
        if($exposed_header == 'pstslidr'){ 
            get_template_part('header/post-slider');
        }elseif($exposed_header == 'revsldr'){ 
            echo '<div class="container rvslider-ex">';
            if (class_exists('RevSlider')) {
                putRevSlider($exposed_rev_sliders);
            }
            echo '</div>';
        }elseif($exposed_header == 'bnr'){ 
            get_template_part('header/banner');
        }else{  
            // nothing to show
        }
    }else{
        if($exposed_blogEnabl!=true){
            get_template_part('header/banner');
        }
    }
?>

	<div id="content" class="site-content">
