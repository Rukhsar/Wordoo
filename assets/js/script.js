(function($) {
    "use strict";


    $(window).on("load", function() { // makes sure the whole site is loaded


        //slider homepage setting
        if ($('.home-slider').find('.slide').length > 1) {
			
            $(".home-slider").owlCarousel({
                navigation: true, 
				navigationText: ['<span class="slide-nav inleft"><i class="fa fa-angle-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-angle-right"></i></span >'],
                slideSpeed: 300,
                autoplay: true,
                autoHeight: true,
                pagination: true,
                paginationSpeed: 300,
                singleItem: true,
                transitionStyle: "fade"
            }); 
        }

        //about slider setting
        if ($('.about-slider').find('.slide').length > 1) {
            $(".about-slider").owlCarousel({
                navigation: false, // Hide next and prev buttons
                slideSpeed: 300,
                autoplay: true,
                autoHeight: true,
                pagination: false,
                paginationSpeed: 300,
                singleItem: true,
                transitionStyle: "fade"
            });
        }
		
		//post slider setting
        if ($('.post-slider').find('.slide').length > 1) {
            $(".post-slider").owlCarousel({
                navigation: false, // Hide next and prev buttons
                slideSpeed: 300,
                autoplay: true,
                autoHeight: true,
                pagination: false,
                paginationSpeed: 300,
                singleItem: true,
                transitionStyle: "fade"
            });
        }

        // script popup image
        $('.popup-img').magnificPopup({
            type: 'image'
        });

        //move to hash after loading
        if (window.location.hash) {
			var menuheigt = $( ".for-sticky" ).height();
            $('html, body').stop().animate({
                scrollTop: $(window.location.hash).offset().top - menuheigt
            }, 300, 'linear');
        }
		
		//remove menu class in widget 
		$(".widget_nav_menu ul").removeClass("menu");
    });

    //create menu for tablet/mobile
    $(".menu-box .navigation").clone(false).find("ul,li").removeAttr("id").remove(".sub-menu").appendTo($(".mobile-menu"));
    $(".mobile-menu .sub-menu").remove();
    $('.mobile-menu').on('show.bs.collapse', function() {
        $('body').on('click', function() {
            $('.mobile-menu').collapse('hide');
        })
    })

    //toggle menu
    $('.menu-btn').on('click', function() {
        $('.mobile-menu').collapse({
            toggle: false
        });
    })

    //menu for tablet/mobile,slider button, about button scrolling
    $('.mobile-menu a,.sl-btn,.ab-btn').on('click', function() {
        var $anchor = $(this);
		var menuheigt = $( ".for-sticky" ).height();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - menuheigt
        }, 800, 'linear');
    });

    //blog slider setting
    $(".blog-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        autoplay: true,
        autoHeight: true,
        pagination: false,
        paginationSpeed: 300,
        singleItem: true,
        mouseDrag: true,
        navigationText: ['<span class="slide-nav inleft"><i class="fa fa-angle-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-angle-right"></i></span >'],
        stopOnHover: false,
        transitionStyle: "fade"
    });
	
    //Page scrolling
	var menuheigt = $( ".for-sticky" ).height();
    $('.home-section .menu-box .navigation').onePageNav({
        filter: ':not(.external a)',
        scrollThreshold: 0.25,
        scrollOffset: menuheigt
    });
	
    //script for navigation(superfish)
    $('.menu-box ul').superfish({
        delay: 400, //delay on mouseout
        animation: {
            opacity: 'show',
            height: 'show'
        }, // fade-in and slide-down animation
        animationOut: {
            opacity: 'hide',
            height: 'hide'
        },
        speed: 200, //  animation speed
        speedOut: 200,
        autoArrows: false // disable generation of arrow mark-up
    })
	
    //sticky navigation
    $(".for-sticky").sticky({
        topSpacing: 0
    });

    // Video responsive
    $("body").fitVids();

    //add class on touch device
    if (Modernizr.touch) {
        $('body').addClass('no-para');
    }


	//background ticker (bg2/testimonial)
    $('.big-ticker:has(>div:eq(1))').list_ticker({
        speed: 7000,
        effect: 'fade'
    });

    //replace the data-background into background image
    $(".para-bg").each(function() {
        var imG = $(this).data('background');
        $(this).css('background-image', "url('" + imG + "') "

        );
    });
	
	//button scroll
	$('.spc-btn,.go-btn').on('click', function (event) {
		var $anchor = $(this);
		var menuheigt = $( ".for-sticky" ).height();
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - menuheigt
		}, 800, 'linear');
		event.preventDefault();
	});

})(jQuery);