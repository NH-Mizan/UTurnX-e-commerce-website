jQuery(document).ready(function () {
    "use strict";

    // main slider 
    $(".main-slider").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 0,
        mouseDrag: true,
        smartSpeed: 1000,
        autoplayTimeout: 5000,

        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

        navText: [
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],

        responsive: {
            0: {
                nav: false
            },
            600: {
                nav: false
            },
            1000: {
                nav: false
            }
        }
    });

    // CATEGORY SLIDER
    $(document).ready(function () {
        $('.category-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            items: 3,
            autoplay: true,
            autoplayHoverPause: false,
            smartSpeed: 500,
            autoplayTimeout: 6000,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: { items: 2, nav: false },
                600: { items: 3 },
                1000: { items: 5 }
            }
        });
    });
})