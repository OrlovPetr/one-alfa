window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    $(".owl-carousel").owlCarousel({
        items: 1,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        loop: true,
        autoplay: true,
        nav: false,
        dots: true,
        smartSpeed: 400,
        autoplayTimeout: 8000,
    });
});
