$(document).ready(function(){
    "use strict";
 // =================================
//	Sticky Side-bar
//	=================================== 
if(matchMedia( 'only screen and (min-width: 1199px)' ).matches) {
		var s = $("#sticker");
		var pos = s.position();	
		var stickermax = $(document).outerHeight() - $(".footer").outerHeight() - s.outerHeight() - 40; //40 value is the total of the top and bottom margin
		$(window).scroll(function() {
			var windowpos = $(window).scrollTop();
			// s.html("Distance from top:" + pos.top + "<br />Scroll position: " + windowpos);
			// if (windowpos >= pos.top && windowpos < stickermax) {
			if (windowpos >= 3400 && windowpos < 4000) {
				s.attr("style", ""); //kill absolute positioning
				s.addClass("stick"); //stick it
			} else if (windowpos >= stickermax) {
				s.removeClass(); //un-stick
				// s.css({position: "absolute", top: stickermax + "px"}); //set sticker right above the footer
				// s.css({position: "absolute", top: stickermax + "px"}); //set sticker right above the footer
				
			} else {
				s.removeClass(); //top of page
			}
		})
	}
      
}); 

