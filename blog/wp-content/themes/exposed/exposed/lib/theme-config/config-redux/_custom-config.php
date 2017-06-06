<?php 

class ExposedFrameworkOpt{
    // logo 
    public function exposed_logo(){
        global $exposed; 
        if((isset($exposed['logo-type'])) && ($exposed['logo-type']==1)){
	        if((isset($exposed['logo-img']['url'])) && !empty($exposed['logo-img']['url'])){ 
	            return '<img src="'.$exposed['logo-img']['url'].'" tilte="Exposed"/>';
	        }else{
	            return '<img src="'.get_template_directory_uri().'/assets/images/logo.png" alt="Exposed"/>';
	        }  
        }else{
	        if((isset($exposed['logo-text'])) && !empty($exposed['logo-text'])){
	            return $exposed['logo-text'];
	        }else{
	            return "exposed";
	        } 
        }
    } 
    // search icon
    public function exposed_srch_icon(){
        global $exposed;  
        if(isset($exposed['srch-ico'])){
            return $exposed['srch-ico'];
        }else{
            return 0;
        }   
    }  
    // menu icon
    public function exposed_popmenu_icon(){
        global $exposed;  
        if(isset($exposed['popmenu-ico'])){
            return $exposed['popmenu-ico'];
        }else{
            return 0;
        }   
    }  

    // blog page enable
    public function exposed_enable_banner(){
        global $exposed;  
        if(is_home() ){
            if(isset($exposed['blog-enable'])){
                return $exposed['blog-enable'];
            }else{
                return true;
            }   
        }elseif(is_search()){ 
            if(isset($exposed['search-enable'])){
                return $exposed['search-enable'];
            }else{
                return true;
            }  
        }elseif(is_single()){ 
            if(isset($exposed['single-enable'])){
                return $exposed['single-enable'];
            }else{
                return true;
            }  
        }elseif(is_archive()){ 
            if(isset($exposed['archive-enable'])){
                return $exposed['archive-enable'];
            }else{
                return true;
            }  
        }else{
            return true;
        }
    } 
    // blog page sidabar
    public function exposed_sidebar_banner(){
        global $exposed;  
        if(is_home() ){
            if(isset($exposed['blog-sidebar'])){
                return $exposed['blog-sidebar'];
            }else{
                return 'right';
            }   
        }elseif(is_search()){ 
            if(isset($exposed['srch-sidebar'])){
                return $exposed['srch-sidebar'];
            }else{
                return 'right';
            }  
        }elseif(is_single()){ 
            if(isset($exposed['single-sidebar'])){
                return $exposed['single-sidebar'];
            }else{
                return 'right';
            }  
        }elseif(is_archive()){ 
            if(isset($exposed['archv-sidebar'])){
                return $exposed['archv-sidebar'];
            }else{
                return 'right';
            }  
        }else{
            return 'right';
        }
    } 

    // blog page enable
    public function exposed_enable_banner_url(){
        global $exposed;  
        if(is_home() ){
            if((isset($exposed['blog-banner']['url'])) && ($exposed['blog-banner']['url']!='')){
                return $exposed['blog-banner']['url'];
            }else{
                return get_template_directory_uri() . "/assets/images/gallery/4.jpg";
            }   
        }elseif(is_search()){ 
            if(isset($exposed['srch-banner']['url'])){
                return $exposed['srch-banner']['url'];
            }else{
                return get_template_directory_uri() . "/assets/images/gallery/4.jpg";
            }  
        }elseif(is_single()){ 
            if(isset($exposed['single-banner']['url'])){
                return $exposed['single-banner']['url'];
            }else{
                return get_template_directory_uri() . "/assets/images/gallery/4.jpg";
            }  
        }elseif(is_archive()){ 
            if(isset($exposed['archv-banner']['url'])){
                return $exposed['archv-banner']['url'];
            }else{
                return get_template_directory_uri() . "/assets/images/gallery/4.jpg";
            }  
        }else{
            return get_template_directory_uri() . "/assets/images/gallery/4.jpg";
        }
    }  


    // copyright text here.
    public function exposed_copyright_text_here(){
        global $exposed;  
        if(isset($exposed['copyright-text'])){
            return $exposed['copyright-text'];
        }else{
            return "THEMEBEER";
        }   
    }  

    // body layout
    public function exposed_body_layout(){
        global $exposed;  
        if(isset($exposed['boctype'])){
            return $exposed['boctype'];
        }else{
            return "box";
        }   
    }  

}
