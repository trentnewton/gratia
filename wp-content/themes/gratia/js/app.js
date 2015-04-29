/*----------------------------------------------------*/
/*	Start Foundation
/*----------------------------------------------------*/

 $(document).foundation();
 
/*----------------------------------------------------*/
/*	PageAnimations
/*----------------------------------------------------*/

 
 jQuery(document).ready(function() {
    jQuery('.fade-animate').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
       });
});

/*----------------------------------------------------*/
/*	Slick Carousel
/*----------------------------------------------------*/

$(document).ready(function(){
	$('.carousel').slick({
	  autoplay: true,
	  autoplaySpeed: 5000,
	  arrows: false,
	  fade: true,
	  pauseOnHover: false
	});
});

/*----------------------------------------------------*/
/*  Add preloader gif to contact form
/*----------------------------------------------------*/
var _wpcf7 = {"loaderUrl":"/wp-content/themes/gratia/assets/img/images/preloader.gif","sending":"Sending ...","cached":"1"};

/*----------------------------------------------------*/
/*	Parrallax and scrolling things
/*----------------------------------------------------*/
 
 // Scroll to top thingo
    $('#top').click(function() {
        $('html, body').animate({
            scrollTop : 0
        }, 800);
        return false;
    });