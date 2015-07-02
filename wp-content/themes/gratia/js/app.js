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
var _wpcf7 = {"loaderUrl":templateUrl + "/assets/img/images/preloader.gif","sending":"Sending ...","cached":"1"};

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

/*----------------------------------------------------*/
/*  Make the footer sticky
/*----------------------------------------------------*/

$(window).bind("load", function () {
    var footer = $("footer");
    var pos = footer.position();
    var height = $(window).height();
    height = height - pos.top;
    height = height - footer.height();
    if (height > 0) {
        footer.css({
            'margin-top': height + 'px'
        });
    }
});