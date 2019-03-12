/*
$(document).ready(function () {

    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

});*/

(function ($) {
    "use strict";


    /* cart search */
    $(".icon-cart , .search-toggle").on("click", function () {
        $(this).parent().find('.shopping-cart-content , .search-content').slideToggle('medium');
    });

    /* slider active */
    $('.slider-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    /* course-slider-active */
    $('.slider-active-2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    /* course-slider-active */
    $('.course-slider-active').owlCarousel({
        margin: 10,
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    /* event-active */
    $('.event-active').owlCarousel({
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 30,
        item: 3,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })

    /* event-active */
    $('.course-slider-active-2').owlCarousel({
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 30,
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    /* event-active */
    $('.event-gallery-active').owlCarousel({
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 30,
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /* Product img slider */
    $('.producta-active').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Product img slider */
    $('.related-slider-active').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Product img slider */
    $('.course-slider-active-3').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Product img slider */
    $('.course-slider-active-4').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation2 b-navigation-prev2 "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation2 b-navigation-next2 active2"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Product img slider */
    $('.course-slider-active-5').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation3 b-navigation-prev3 "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation3 b-navigation-next3 active3"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* event-active */
    $('.brand-logo-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 1000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 30,
        item: 6,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 4,
                autoplay: true,
                autoplayTimeout: 1000,
            },
            1000: {
                items: 6
            }
        }
    })

    /* Product img slider */
    $('.blog-active').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Product img slider */
    $('.event-active-2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span class="e-navigation e-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="e-navigation e-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 992,
                settings: {}
            },
            {
                breakpoint: 768,
                settings: {}
            },
            {
                breakpoint: 767,
                settings: {}
            },
            {
                breakpoint: 420,
                settings: {}
            }
        ]
    });

    /*--
    Service Active
    -----------------------------------*/
    $('.b-navigation ')
        .click(function () {
            $('.b-navigation').removeClass('active');
            $(this).addClass('active');
        });
    /*--
    Service Active
    -----------------------------------*/
    $('.b-navigation3 ')
        .click(function () {
            $('.b-navigation3').removeClass('active3');
            $(this).addClass('active3');
        });
    /*--
    Service Active
    -----------------------------------*/
    $('.b-navigation2 ')
        .click(function () {
            $('.b-navigation2').removeClass('active2');
            $(this).addClass('active2');
        });


    /*--
    Service Active
    -----------------------------------*/
    $('.producta-active .owl-nav div')
        .click(function () {
            $('.producta-active .owl-nav div').removeClass('active');
            $(this).addClass('active');
        });

    /* magnificPopup video popup */
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /* counterUp */
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });


    // MOUSE MOVING BACKGTOUND 1
    $('#register-1').mouseParallax({
        moveFactor: 2
    });

    $('#register-2').mouseParallax({
        moveFactor: 2
    });

    $('#register-3').mouseParallax({
        moveFactor: 1
    });


    /*--
    Testimonial Slick Carousel
    -----------------------------------*/
    $('.testimonial-text-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        asNavFor: '.testimonial-image-slider',
    });

    /*--
        Testimonial Slick Carousel as Nav
    -----------------------------------*/
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text-slider',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '0px',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots: false,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 3,
                    centerMode: false,
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 2,
                    centerMode: false,
                }
            }
        ]
    });


    /*--
    Menu Stick
    -----------------------------------*/
    var header = $('.sticky-bar');
    var win = $(window);
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });

    /* jQuery MeanMenu */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });

    $('.commrnt-toggle a').on('click', function (e) {
        e.preventDefault();
        $('.blog-comment-content-wrap').slideToggle(1000);
    });


    /*--------------------------
        Product Zoom
	---------------------------- */
    $(".zoompro").elevateZoom({
        gallery: "gallery",
        galleryActiveClass: "active",
        zoomWindowWidth: 300,
        zoomWindowHeight: 100,
        scrollZoom: false,
        zoomType: "inner",
        cursor: "crosshair"
    });

    /*---------------------
        Product dec slider
    --------------------- */
    $('.product-dec-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="product-dec-icon product-dec-prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="product-dec-icon product-dec-next"><i class="fa fa-angle-right"></i></span>',
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /*--
	   pro-details color Active
    -----------------------------------*/
    $('.pro-details-color2-content ul li')
        .on('click', function () {
            $('.pro-details-color2-content ul li').removeClass('active');
            $(this).addClass('active');
        });

    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = $('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    /*-------------------------
        Create an account toggle
    --------------------------*/
    $('.checkout-toggle2').on('click', function () {
        $('.open-toggle2').slideToggle(1000);
    });

    $('.checkout-toggle').on('click', function () {
        $('.open-toggle').slideToggle(1000);
    });


    /*-------------------------------------
        Thumbnail Product activation
    --------------------------------------*/
    $('.thumb-menu').owlCarousel({
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 15,
        smartSpeed: 1000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 3,
                autoplay: true,
                smartSpeed: 300
            },
            576: {
                items: 3
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    $('.thumb-menu a').on('click', function () {
        $('.thumb-menu a').removeClass('active');
    })

    /*--------------------------
        ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-double-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


})(jQuery);

$(document).ready(function () {


    /*$('.video-popup').magnificPopup({
        type: 'iframe'
    });


    $('#start-popup').modal('show');
        setTimeout(function () {
        $('#start-popup').modal('hide');
    }, 10000);


    $('[id^=start-popup]').on('hidden.bs#start-popup', function(event) {
        console.log(player);
        event.target.stopVideo();
    });*/


    /*-------------------------------------
            Accordion-Script
    --------------------------------------*/


    var bodyEl = $('body'),
        accordionDT = $('.accordion').find('dt'),
        accordionDD = accordionDT.next('dd'),
        parentHeight = accordionDD.height(),
        childHeight = accordionDD.children('.content').outerHeight(true),
        newHeight = parentHeight > 0 ? 0 : childHeight,
        accordionPanel = $('.accordion-panel'),
        buttonsWrapper = accordionPanel.find('.buttons-wrapper'),
        openBtn = accordionPanel.find('.open-btn'),
        closeBtn = accordionPanel.find('.close-btn');

    bodyEl.on('click', function (argument) {
        var totalItems = $('.accordion').children('dt').length;
        var totalItemsOpen = $('.accordion').children('dt.is-open').length;

        if (totalItems == totalItemsOpen) {
            openBtn.addClass('hidden');
            closeBtn.removeClass('hidden');
            buttonsWrapper.addClass('is-open');
        } else {
            openBtn.removeClass('hidden');
            closeBtn.addClass('hidden');
            buttonsWrapper.removeClass('is-open');
        }
    });

    function openAll() {

        openBtn.on('click', function (argument) {

            accordionDD.each(function (argument) {
                var eachNewHeight = $(this).children('.content').outerHeight(true);
                $(this).css({
                    height: eachNewHeight
                });
            });
            accordionDT.addClass('is-open');
        });
    }

    function closeAll() {

        closeBtn.on('click', function (argument) {
            accordionDD.css({
                height: 0
            });
            accordionDT.removeClass('is-open');
        });
    }

    function openCloseItem() {
        accordionDT.on('click', function () {

            var el = $(this),
                target = el.next('dd'),
                parentHeight = target.height(),
                childHeight = target.children('.content').outerHeight(true),
                newHeight = parentHeight > 0 ? 0 : childHeight;

            // animate to new height
            target.css({
                height: newHeight
            });

            // remove existing classes & add class to clicked target
            if (!el.hasClass('is-open')) {
                el.addClass('is-open');
            }

            // if we are on clicked target then remove the class
            else {
                el.removeClass('is-open');
            }
        });
    }

    openAll();
    closeAll();
    openCloseItem();


    /*-------------------------------------
            Apply Stepper Script
    --------------------------------------*/


    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


//according menu for admission steps

    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');

    //Set The Accordion Content Width
    var contentwidth = $('.accordion-header').width();
    $('.accordion-content').css({});

    //Open The First Accordion Section When Page Loads
    $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
    $('.accordion-content').first().slideDown().toggleClass('open-content');

    // The Accordion Effect
    $('.accordion-header').click(function () {
        if ($(this).is('.inactive-header')) {
            $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }

        else {
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
    });

    return false;


//About Tabs


});


//Stepper

$(function () {
    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        enablePagination: false,
        transitionEffectSpeed: 500,
        labels: {
            current: ""
        }
    });

    // Custome Button Jquery Step
    $('.forward').click(function () {
        $("#wizard").steps('next');
    })


    $('.js-pscroll').each(function () {
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function () {
            ps.update();
        })
    });

})


$(document).ready(function () {

    $('.campus .tab-wrapper #pills-tab li').click(function () {
        this.addClass('.active').siblings().removeClass('active');
    });
});






