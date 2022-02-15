$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        loop:true,
        center:true,
        margin:10,
        nav:true,
        autoplay:3000,
        autoplayHoverPause:true,
        slideSpeed: 500,
        paginationSpeed: 1500,
        smartSpeed:2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
  });