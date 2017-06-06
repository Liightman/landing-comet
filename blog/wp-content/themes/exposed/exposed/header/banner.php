<?php 
if(is_page()){ 
	if(get_post_meta(get_the_ID(),'_exposed_page_banner',true) != ''){
		$exposed_bnr_img = get_post_meta(get_the_ID(),'_exposed_page_banner',true);
	}else{
		$exposed_bnr_img = get_template_directory_uri() . "/assets/images/gallery/4.jpg";
	}
}else{
    $exposed_opt = new ExposedFrameworkOpt();
    $exposed_bnr_img = $exposed_opt->exposed_enable_banner_url(); 
}
?> 
    <!-- Main Slider Start-->
    <div class="main-slider mar-btm-50 mar-top-50" id="main_slider">
        <div class="container">
            <div class="banner">
                <img src="<?php echo esc_url($exposed_bnr_img); ?>" class="img-responsive" alt="Exposed Banner">
            </div>
        </div><!--/.container--> 
    </div><!--/#main_slider-->
    <!-- Main Slider End-->
    