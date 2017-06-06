(function ($) {
    "use strict";

// bx slider
$('.bxslider').bxSlider({
  pager: false
});

// iframe attribute remove
$('iframe').removeAttr('frameborder');
 
// featured post shortcode
$('featured-post .col-md-4:nth-child(2) .pos-relative a.button').removeClass('yellow-bg').addClass('green-bg');

// pagination
$('.business.blog-post nav ul.page-numbers').addClass('pagination pagination-sm');

// megamenu
$('ul.dropdown-menu.multi-level li').removeClass('dropdown').addClass('dropdown-submenu');
$('ul.dropdown-menu.multi-level li:first-child').addClass('active');
$('ul.dropdown-menu.multi-level li ul.dropdown-menu').removeClass('dropdown-menu3');

$('ul.dropdown-menu.dropdown-menu3 > li > ul.dropdown-menu.dropdown-menu3 > li > div > a').remove();
$('ul.dropdown-menu.dropdown-menu3 > li > ul.dropdown-menu.dropdown-menu3 > li > div > p').css('margin-bottom','9px');

$('.dropdown-menu.multi-level.cl2 > li').hover(
    function(){ 
        $(this).addClass("active").siblings().removeClass("active"); 
        var itm = $(this).find('.dropdown-menu li').size();
        if(itm==2){
          $(this).parents('.dropdown-menu.multi-level.cl2').css({"width": "750px"});
          $(this).find('.dropdown-menu').css({"width": "550px"});
        }else if(itm==1){
          $(this).parents('.dropdown-menu.multi-level.cl2').css({"width": "485px"});
          $(this).find('.dropdown-menu').css({"width": "280px"});
        }else{
          $(this).parents('.dropdown-menu.multi-level.cl2').css({"width": "1014px"});
          $(this).find('.dropdown-menu').css({"width": "810px"});
        }
    },
    function(){
        $(".dropdown-menu.multi-level li:first-child").addClass("active"); 
});
$('.navbar-nav > li').hover(
    function(){  
        var itm = $(this).find('.dropdown-menu.multi-level.cl3 > li').size();
        if(itm==2){
          $(this).find('.dropdown-menu.multi-level.cl3').css({"width": "685px","left": "-325px"}); 
        }else if(itm==1){
          $(this).find('.dropdown-menu.multi-level.cl3').css({"width": "355px","padding-right": "0","left": "-165px"}); 
        }else{
          $(this).find('.dropdown-menu.multi-level.cl3').css({"width": "1014px","left": "-491px"}); 
        }
    },
    function(){
         
});
 
//  about widget footer
$('#footer #exposed_rcp-widget-2 hr:last-child').remove();

 // =================================
//	OWL-SLIDER 
//	===================================  
    var width;

      $("#owl-demo").owlCarousel({

          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,

             navigationText: [
              "<i class='fa fa-chevron-left'></i>",
              "<i class='fa fa-chevron-right'></i>"
              ]

      });
  
         /*---------------------
         --- Load More
         ---------------------*/
        var size_li = $(".list-sks").size();
        var x=3;
        $('.list-sks:lt('+x+')').show();
        $('.load-more-btn').on('click',function() {
            x= (x+1 <= size_li) ? x+1 : size_li;
            if(x==size_li){
              $('.load-more-btn').hide();
            } 
            $('.list-sks:lt('+x+')').show();
        });
    
 // Overlay Menu      
            $("#inner_nav").on('click',function(){
                $(".navigation-items").addClass("click");
            });
      
        
            $("#inner_nav2").on('click',function(){
                $(".navigation-items").removeClass("click");
            });
// stylebar-button
            $("#stylebar-icon").on('click',function(){
                $(".fixed-stylebar").toggleClass("move");
            });    
    
    
//sidebar-function
       
    $('#sidebar-select').on('change',function(){
        var sidebar1 = ($(this).val());
        if(sidebar1 == "wide" ){
            $(".wrapper").addClass("wrapper2");
        }
        else {
            $(".wrapper").removeClass("wrapper2");
        }

    });
//Boxed view background    
     $("#bg-image1").on('click',function(){
        $("body").css({ 
            'background' : 'url(http://localhost/exposed/wp-content/themes/exposed/assets/images/Stylebar/1.jpg) no-repeat fixed',
            'height': '100%',
            'width': '100%'
           });
    });
      
     $("#bg-image2").on('click',function(){
        $("body").css({ 
            'background' : 'url(http://localhost/exposed/wp-content/themes/exposed/assets/images/Stylebar/2.jpg) no-repeat fixed'      
           });
    });
     
     $("#bg-image3").on('click',function(){
        $("body").css({ 
            'background' : 'url(http://localhost/exposed/wp-content/themes/exposed/assets/images/Stylebar/3.jpg) no-repeat fixed'     
           });
    });
    
    $("#bg-color1").on('click',function(){
        $("body").css({ 
            'background' : '#f5f5f5'     
           }); 
    });
    $("#bg-color2").on('click',function(){
        $("body").css({ 
            'background' : '#e5e5e5'     
           });
    });
    $("#bg-color3").on('click',function(){
        $("body").css({ 
            'background' : '#d5d5d5'     
           });
    });
    $("#bg-color4").on('click',function(){
        $("body").css({ 
            'background' : '#c5c5c5'     
           });
    });    
    
    
     
     var width = $(window).width();
//     alert(width);
     $(".navigation-items").css('width', width);
    
//reset-button
    $("#reset-button").on('click',function(){
        $("body").css('background','#fff');
        $(".wrapper").removeClass("wrapper2");
    });
//navigation-items gone on scroll
    $(window).on('scroll',function(){
        $(".navigation-items").removeClass("click");
    });

// gallery slider
$(".bx-controls-direction .bx-prev").empty().append( '<i class="fa fa-chevron-left"></i>' );
$(".bx-controls-direction .bx-next").empty().append( '<i class="fa fa-chevron-right"></i>' );

// responsive media jquery
var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

$(function() {
    var pause = 100;
    // will only process code within delay(function() { ... }) every 100ms.

    $(window).resize(function() {
        delay(function() {
            var width = $(window).width();
            if( width >= 540 && width <= 991 ) {
                $("ul.dropdown-menu.multi-level.cl2").removeClass( 'multi-level cl2' ).addClass( 'dropdown-menu3' );
                $("ul.dropdown-menu.multi-level.cl3").removeClass( 'multi-level cl3' ).addClass( 'dropdown-menu3' );
                $("ul.dropdown-menu.dropdown-menu3").css({'z-index':'99999999','top':'0'});
                $("div.site-content").css('z-index','1');
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-submenu div > a").css('display','none');
                $("ul.dropdown-menu.dropdown-menu3 li").css('position','relative');
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-menu").css({'max-width':'280px','width':'810px','padding':'30px 25px 45px 25px','top':'-25px','position':'abolute'});
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-menu li").css('display','block'); 
                // code for tablet view
            }else if( width <= 539 ) {
                $("ul.dropdown-menu.multi-level.cl2").removeClass( 'multi-level cl2' ).addClass( 'dropdown-menu3' );
                $("ul.dropdown-menu.multi-level.cl3").removeClass( 'multi-level cl3' ).addClass( 'dropdown-menu3' );
                $("ul.dropdown-menu.dropdown-menu3").css({'z-index':'99999999','top':'0'});
                $("div.site-content").css('z-index','1');
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-submenu div > a").css('display','none');
                $("ul.dropdown-menu.dropdown-menu3 li").css('position','relative');
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-menu").css({'max-width':'280px','width':'810px','padding':'30px 25px 45px 25px','top':'-25px','left':'30px','position':'abolute','background':'#333'});
                $("ul.dropdown-menu.dropdown-menu3 .dropdown-menu li").css('display','block'); 
            }
        }, pause );
    });

    $(window).resize();
});

      
})(jQuery); 

