$(function () {
    'use strict';

    // [01] Fade Out preloader

    $(".preloader").delay(1000).fadeOut("slow");
    // [02] Scroll To Section

    $('.navbar-nav li a').click(function (e) {

        e.preventDefault();

        $('html, body').animate({

            scrollTop: $($(this).data('scroll')).offset().top

        }, 1000);

    });
    // [03] Auto Type Setup

    $('header .header-content h1 .type').typed({
        strings: ["Software Engineer.", "Frontend Developer.", "Web developer.", "Web Application Developer."],
        loop: true,
        startDelay: 1000,
        backDelay: 2000
    });
    // [04] Change Navbar Background And Padding

    $(window).scroll(function () {

        var top = jQuery(document).scrollTop(),

            batas = 20;

        if (top > batas) {

            $('.navbar-brog').addClass('nav-sticy');

        } else {

            $('.navbar-brog').removeClass('nav-sticy');

        }
    });
    // [05] Scroll To About Section

    $('header .scroll-down').click(function () {

        $('body, html').animate({

            scrollTop: $('#about').offset().top - 90 + 'px'

        }, 800);

    });
    // [06] Owl Carousel "Testimonials"

    $('.grid').mixItUp();

    // [07] Owl Carousel "Testimonials"

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: false,
        nav: true,
        smartSpeed: 100,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});
