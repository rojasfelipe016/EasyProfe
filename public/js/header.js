jQuery(document).ready(function() {
  
	var navOffset =jQuery("nav").offset().top;
 	
 	jQuery(window).scroll(function () {
     	var scrollPos =jQuery(window).scrolltop();

     	if(scrollPos >=navOffset){
     		jQuery("nav").addClass("fixed");
     	}else{
     		jQuery("nav").removeClass()
     	}
    
  });

});
