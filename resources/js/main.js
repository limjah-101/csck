$(document).ready(function() {
    /*------------------------------------------------
     * navigation
    -------------------------------------------------*/
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();
        if (scroll > 400) {
            $(".navbar").css("background", "#f2f3f7");
            $(".navbar.navbar-expand-lg").css("padding", "5px");
            $(".nav-link").css({
                color: "#58585a",
                "font-weight": 600
            });
            $(".info_nav").hide();
        } else {
            $(".navbar").css("background", "transparent");
            $(".navbar.navbar-expand-lg").css("padding", "16px");
            $(".nav-link").css("color", "#f2f3f7");
            $(".info_nav").show();
        }
    });

    /*------------------------------------------------
     * responsive owl carousel
    -------------------------------------------------*/
    $(".owl-carousel").owlCarousel({
        autoplay: false,
        // dots: true,
        // loop: true,
        // nav: true,
        // items: 1,
        margin: 30,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: true
            },
            778: {
                items: 2,
                dots: true,
                nav: true
            },
            1170: {
                items: 3,
                dots: true,
                nav: true,                
            }
        },
        navText: [
            '<span class="nav_icon"><i class="icofont-long-arrow-left"></i></span>',
            '<span class="nav_icon"><i class="icofont-long-arrow-right"></i></span>'
        ], 
    });
});
