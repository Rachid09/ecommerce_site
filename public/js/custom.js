(function($) {
    'use strict';

    /* Settings List Table
	
	  * Parallax - START CODE
	  * Scroll top by clicking arrow up
	  * Auto active class adding with navigation
	  * Quantity number changing script
	  * Update Header Style + Scroll to Top
	  * Put slider space for nav not in mini screen
	  * dropdown submenu on hover in desktopand dropdown sub menu on click in mobile
	  * Slider push menu visible
	  * Custom accordion useable settings for any type of accordion system
	  * Single Accordean
	  * Single Shop Left Sidebar Filter
	  * For Bootstrap Tooltip
	  * Data quick view popup
	  * Fact Counter For Achivement Counting
	  * Data quick view modal
	  * Elements Animation
	  * MixIt-up tab calling
	  * Our Partner Logos Slider Auto
	  * One item slide
	  * Two item slide
	  * Three item slide
	  * Four item slide
	  * Five item slide
	  * Five item slide 2
	  * Six item slide
	  * Eight item slide
	  * Ten item slide
	  * Start When document is Scrollig, do
	  * Date Counting
    
    */

    // Cache jQuery Selector
    var $window = $(window),
        $page_wrapper = $('#page_wrapper'),
        $sidenav = $('.nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push'),
        $header = $('header'),
        $navigation = $('#navbarSupportedContent'),
        $dropdown = $('.dropdown-toggle'),
        $brand = $('.partner-slider'),
        $single_carousel = $('.single-carousel'),
        $auto_single_carousel = $('.auto-single-carousel'),
        $two_carousel = $('.two-carousel'),
        $three_carousel = $('.three-carousel'),
        $four_carousel = $('.four-carousel'),
        $five_carousel = $('.five-carousel'),
        $five_carousel2 = $('.five-carousel2'),
        $six_carousel = $('.six-carousel'),
        $eight_carousel = $('.eight-carousel'),
        $ten_carousel = $('.ten-carousel'),
        $mix_tab = $('.mix-tab');



    // Parallax - START CODE
    if ($('.paraxify').length) {
        $(function() {
            $window.on("load resize scroll", function() {
                paraxify('.paraxify');
            });
        });
    }

    // Scroll top by clicking arrow up
    $window.scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 100);
        return !1;
    });


    // Auto active class adding with navigation
    $window.on('load', function() {
        var current = location.pathname;
        var $path = current.substring(current.lastIndexOf('/') + 1);
        $('#navbarSupportedContent li a').each(function(e) {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($path == $this.attr('href')) {
                $this.parent('li').addClass('active');
            } else if ($path == '') {
                $('.navbar-nav li:first-child').addClass('active');
            }
        })
    });


    $(".widget-toggle .widget-title").on("click", function() {
        $(this).parent('.widget').toggleClass('closed');
    });
	

    // Widget list toggle
    $('.widget > ul > li > .has-child').on('click', function(e) {
        if ($(this).parent('li').hasClass('open')) {
            $(this).parent('li').removeClass('open');
            e.stopPropagation();
        } else {
            $(this).parent('li').addClass('open');
            e.stopPropagation();
        }
    });
	

    $('.shipping-calculator-button').on('click', function() {
        $(this).parent('.woocommerce-shipping-calculator').toggleClass('active');
    });
	

    $('.wc_payment_method label').on('click', function() {
        $(this).parent('.wc_payment_method').siblings('.wc_payment_method').removeClass('active');
        $(this).parent('.wc_payment_method').addClass('active');
    });


    $('.e-hover-wrapper-absolute .row, .e-hover-wrapper-absolute.row').each(function() {
        $(this).on('mouseenter', function() {
            var height = $(this).children('.col').height();
            $(this).children('.col').css('height', height);
        });
        $(this).on('mouseleave', function() {
            $(this).children('.col').removeAttr('style');
        });
    });


    $('[class*="swatch-filter-"]').each(function() {
        var count = $(this).children('li').length;
        if (count > 5) {
            $(this).append('<div class="maxlist-more"> <span>+ Show More</span><span>- Show Less</span></div>');
        }
    });
    $(".maxlist-more").on("click", function() {
        $(this).parent('[class*="swatch-filter-"]').toggleClass('show-more');
    });
	

    // View Cart hover items toggle show hide
    if ($('.cart-view').has('.cart-popup')) {
        $('.has-cart-data').on('click', function(e) {
            e.preventDefault();
            if ($(this).parent('.cart-view').hasClass('show')) {
                $(this).parent('.cart-view').removeClass('show');
            } else {
                $(this).parent('.cart-view').addClass('show');
            }
            e.stopPropagation();
        });
        $(document).on('click', function(e) {
            var container = $('.cart-popup');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('.cart-view').hasClass('show')) {
                    $('.cart-view').removeClass('show');
                }
            }
        });
    }


    // My Account hover items toggle show hide
    if ($('.my-account-dropdown').has('.my-account-popup')) {
        $('.has-dropdown').on('click', function(e) {
            e.preventDefault();
            if ($(this).parent('.my-account-dropdown').hasClass('show')) {
                $(this).parent('.my-account-dropdown').removeClass('show');
            } else {
                $(this).parent('.my-account-dropdown').addClass('show');
            }
            e.stopPropagation();
        });
        $(document).on('click', function(e) {
            var container = $('.my-account-popup');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('.my-account-dropdown').hasClass('show')) {
                    $('.my-account-dropdown').removeClass('show');
                }
            }
        });
    }
	
	 // Search popup
    if ($('.global-search').has('.touch-screen-view')) {
        $('.search-pop').on('click', function(e) {
            e.preventDefault();
            if ($('.touch-screen-view').hasClass('visible')) {
                $('.touch-screen-view').removeClass('visible');
            } else {
                $('.touch-screen-view').addClass('visible');
            }
            e.stopPropagation();
        });
        $(document).on('click', function(e) {
            var container = $('.form-inline');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('.touch-screen-view').hasClass('visible')) {
                   $('.touch-screen-view').removeClass('visible');
                }
            }
        });
    }

    // Quantity number changing script
    $('<div class="quantity-nav"><div class="quantity-button quantity-down">-</div><div class="quantity-button quantity-up">+</div></div>').insertAfter('.quantity input');
    $('.quantity').each(function() {
        var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

    });


    // Update Header Style + Scroll to Top
    function headerStyle() {
        if ($window.width() >= 992) {
            if ($header.length) {
                var windowpos = $window.scrollTop();
                if (windowpos >= 200) {
                    $header.addClass('fixed-top');
                } else {
                    $header.removeClass('fixed-top');
                    $page_wrapper.removeClass('overlay');
                    $sidenav.removeClass('visible');
                }
            }
        }
    }
	
	
	// Product Category toggle
	$window.on('resize load', function(e){
		if($('.categories-menu-wrapper').has('.category-toggle-md')){	
			if($window.width() < 992){
				$('.category-title-wrapper').on('click', function(){
					$('.categories-menu').slideToggle();
				});
			}	
		}
	});


    // Put slider space for nav not in mini screen
    if (document.querySelector('.nav-on-top') !== null) {
        var get_height = jQuery('.nav-on-top').height();
        if (get_height > 0 && $window.width() > 991) {
            jQuery('.nav-on-top').next().css('margin-top', get_height);
        }
        $window.on('resize', function() {
            $header.removeClass('fixed-top');
            $page_wrapper.removeClass('overlay');
            $sidenav.removeClass('visible');
            var get_height = jQuery('.nav-on-top').height();
            if ($window.width() < 991) {
                jQuery('.nav-on-top').next().css('margin-top', '0');
            } else {
                jQuery('.nav-on-top').next().css('margin-top', get_height);
            }
        });
    }
    if (document.querySelector('.nav-on-banner') !== null) {
        var get_height = jQuery('.nav-on-banner').height();
        if (get_height > 0 && $window.width() > 991) {
            jQuery('.nav-on-banner').next().css('padding-top', get_height);
        }
        $window.on('resize', function() {
            $header.removeClass('fixed-top');
            $page_wrapper.removeClass('overlay');
            $sidenav.removeClass('visible');
            var get_height = jQuery('.nav-on-banner').height();
            if ($window.width() < 991) {
                jQuery('.nav-on-banner').next().css('padding-top', '0');
            } else {
                jQuery('.nav-on-banner').next().css('padding-top', get_height);
            }
        });
    }



    // dropdown submenu on hover in desktopand dropdown sub menu on click in mobile 
    $navigation.each(function() {
        $dropdown.on('click', function(e) {
            if ($window.width() < 1100) {
                if ($(this).parent('.dropdown').hasClass('visible')) {
                    $(this).parent('.dropdown').children('.dropdown-menu').first().stop(true, true).slideUp(300);
                    $(this).parent('.dropdown').removeClass('visible');
                    // window.location = $(this).attr('href');
                } else {
                    e.preventDefault();
                    $(this).parent('.dropdown').siblings('.dropdown').children('.dropdown-menu').slideUp(300);
                    $(this).parent('.dropdown').siblings('.dropdown').removeClass('visible');
                    $(this).parent('.dropdown').children('.dropdown-menu').slideDown(300);
                    $(this).parent('.dropdown').addClass('visible');
                }
                e.stopPropagation();
            }
        });

        $('body').on('click', function(e) {
            $dropdown.parent('.dropdown').removeClass('visible');
        });

        $window.on('resize', function() {
            if ($window.width() > 991) {
                $('.dropdown-menu').removeAttr('style');
                $('.dropdown ').removeClass('visible');
            }
        });
    });


    // Slider push menu visible
    if (document.querySelector('.push-nav-toggle') !== null) {
        var $this = $('.push-nav-toggle'),
            $close = $('.slide-nav-close');


        $this.on('click', function(event) {
            event.preventDefault();
            $sidenav.addClass('visible');
            $('#page_wrapper').addClass('overlay');
            event.stopPropagation();
        });


        $sidenav.on('click', function(event) {
            event.stopPropagation();
        });

        $window.on('click', function(e) {
            $sidenav.removeClass('visible');
            $('#page_wrapper').removeClass('overlay');
        });

        $close.on('click', function(e) {
            $sidenav.removeClass('visible');
            $('#page_wrapper').removeClass('overlay');
        });

    }



    // Custom accordion useable settings for any type of accordion system
    if (document.querySelector('.bb-accordion') !== null) {
        $('.ac-toggle').on('click', function(e) {
            e.preventDefault();

            var $this = $(this);

            if ($this.hasClass('active') && $this.next().hasClass('show')) {
                $this.removeClass('active');
                $this.next().removeClass('show');
                $this.next().slideUp(350);
            } else {

                // Check accordion type: for single item open
                if ($this.parent().parent().hasClass('ac-single-show')) {
                    $this.parent().parent().find('.ac-card .ac-toggle').removeClass('active');
                    $this.parent().parent().find('.ac-card .ac-collapse').removeClass('show');
                    $this.parent().parent().find('.ac-card .ac-collapse').slideUp(350);
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }

                // Check accordion type: for group item open
                else if ($this.parent().parent().hasClass('ac-group-show')) {
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }

                // Default if not use any accordion type
                else {
                    $this.parent().parent().find('.ac-card .ac-toggle').removeClass('active');
                    $this.parent().parent().find('.ac-card .ac-collapse').removeClass('show');
                    $this.parent().parent().find('.ac-card .ac-collapse').slideUp(350);
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }
            }
        });
    }


    if ($('#single-image-zoom').length) {
        //initiate the plugin and pass the id of the div containing gallery images
        $("#single-image-zoom").elevateZoom({
            gallery: 'gallery_09',
            zoomType: "inner",
            cursor: "crosshair",
            galleryActiveClass: 'active',
            imageCrossfade: true,
            loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
        });

        //pass the images to Fancybox
        $("#single-image-zoom").on("bind click", function(e) {
            var ez = $('#single-image-zoom').data('elevateZoom');
            $.fancybox(ez.getGalleryList());
            return false;
        });

    }
    // Single Accordean
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    // Single Shop Left Sidebar Filter
    $('li.wc-layered-nav-term').on('click', function() {
        if ($(this).hasClass('chosen')) {
            $(this).addClass('chosen');
        } else {
            $(this).siblings('li.wc-layered-nav-term').removeClass('chosen');
            $(this).addClass('chosen');
        }
    });

    $('body').on('click', function(e) {
        $dropdown.parent('.dropdown').removeClass('visible');
    });

    $window.on('resize', function() {
        if ($window.width() > 991) {
            $('.dropdown-menu').removeAttr('style');
            $('.dropdown ').removeClass('visible');
        }
    });


    // For Bootstrap Tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })



    // Data quick view popup
    if (document.querySelector('.quickview-btn') !== null) {
        $('.quickview-btn').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('body').addClass('modal-open');
            $('body').css('padding-right', '17px');
            $(target).show();
            $(target).addClass('show');
            e.stopPropagation();
        });

        $('.view-close').on('click', function() {
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '0');
            $(this).parents('.quick-view-modal').removeClass('show');
            $(this).parents('.quick-view-modal').hide();

        });

        $('.quick-view-modal').on('click', function(e) {
            if ($(e.target).closest('.modal-dialog').length === 0) {
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '0');
                $(this).removeClass('show');
                $(this).hide();
            }
        });
    }

    // Fact Counter For Achivement Counting
    function factCounter() {
        if ($('.fact-counter').length) {
            $('.fact-counter .count.animated').each(function() {
                var $t = $(this),
                    n = $t.find(".count-num").attr("data-stop"),
                    r = parseInt($t.find(".count-num").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function() {
                            $t.find(".count-num").text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $t.find(".count-num").text(this.countNum);
                        }
                    });
                }

                //set skill building height
                var size = $(this).children('.progress-bar').attr('aria-valuenow');
                $(this).children('.progress-bar').css('width', size + '%');

            });
        }
    }


    // Data quick view modal
    if (document.querySelector('.quickview-btn') !== null) {
        $('.quickview-btn').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('body').addClass('modal-open');
            $('body').css('padding-right', '17px');
            $(target).show();
            $(target).addClass('show');
            e.stopPropagation();
        });

        $('.view-close').on('click', function() {
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '0');
            $(this).parents('.quick-view-modal').removeClass('show');
            $(this).parents('.quick-view-modal').hide();

        });

        $('.quick-view-modal').on('click', function(e) {
            if ($(e.target).closest('.modal-dialog').length === 0) {
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '0');
                $(this).removeClass('show');
                $(this).hide();
            }
        });
    }


    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }



    // MixIt-up tab calling
    if ($mix_tab.length) {
        var containerEl = document.querySelector('.mix-element');
        var mixer = mixitup(containerEl);
    }


    // Our Partner Logos Slider Auto
    if ($brand.length) {
        $brand.owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            smartSpeed: 500,
            autoplay: 4000,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                600: {
                    items: 3
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        });
    }


    // One item slide
    if ($single_carousel.length) {
        $single_carousel.owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });
    }

    // One item slide
    if ($auto_single_carousel.length) {
        $auto_single_carousel.owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });
    }
    // Two item slide
    if ($two_carousel.length) {
        $two_carousel.owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                }
            }
        });
    }
    // Three item slide
    if ($three_carousel.length) {
        $three_carousel.owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    }
    // Four item slide
    if ($four_carousel.length) {
        $four_carousel.owlCarousel({
            loop: false,
            margin: 1,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }
    // Five item slide
    if ($five_carousel.length) {
        $five_carousel.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    }
    // Five item slide 2
    if ($five_carousel2.length) {
        $five_carousel2.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    }


    // Six item slide
    if ($six_carousel.length) {
        $six_carousel.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1300: {
                    items: 6
                }
            }
        });
    }



    // Eight item slide
    if ($eight_carousel.length) {
        $eight_carousel.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                400: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                },
                1200: {
                    items: 8
                }
            }
        });
    }

    // Ten item slide
    if ($ten_carousel.length) {
        $ten_carousel.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i><span>Prev</span></div>", "<div class='nav-btn next-slide'><span>Next</span><i class='fas fa-chevron-right'></i></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                400: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 8
                },
                1400: {
                    items: 10
                }
            }
        });
    }

    // Start When document is Scrollig, do
    $(window).on('scroll', function() {
        factCounter();
        headerStyle();
    });

    // Date Counting
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');

        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<ul><li><span>%D</span><span>Day</span></li> <li><span>%H</span><span>Hour</span></li> <li><span>%M</span><span>Min</span></li> <li><span>%S</span><span>Sec</span></li></ul>'));
        });
    });

})(jQuery);