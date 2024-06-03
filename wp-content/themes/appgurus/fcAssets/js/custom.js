$(document).ready(function() {


    // scroll hide and show

    $("#fcClick").click(function() {
        $('html, body').animate({
            scrollTop: $("#freeConsultation").offset().top - 110
        }, 1000);
    });


    // top nav header scroll active class add start

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header-main").addClass("active");
        } else {
            $(".header-main").removeClass("active");
        }
    });
    // top nav header scroll active class add end


    
    // $('.contact-us-click').click(function(){
    //     $('#contact-us .contact-us').addClass('open');
    //     $('body').addClass('no-scroll');
    // });
    
    // $('.contact-us-close > a').click(function(){
    //     $('#contact-us .contact-us').removeClass('open');
    //     $('body').removeClass('no-scroll');
    // });


    $('.text-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 1000,
        slidesToShow: 1,
        arrows: false,
        vertical: true,
        touchMove:false,
        swipeToSlide:false,
        swipe:false,
        cssEase: 'linear',
        verticalSwiping: true,
        focusOnSelect: false
    });

    $('.clients-logo-inner').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        slidesToShow: 5,
        speed: 5000,
        cssEase: "linear",
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });


    
    

    // $('.clients-logo-inner').slick({
    //     dots: false,
    //     infinite: true,
    //     arrows: false,
    //     speed: 300,
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     responsive: [{
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 3,
    //                 infinite: true,
    //                 dots: true
    //             }
    //         }, {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2
    //             }
    //         }, {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });




    // review-slider Js Start

    var rev = $(".review-slider");
    rev
        .on("init", function(event, slick, currentSlide) {
            var cur = $(slick.$slides[slick.currentSlide]),
                next = cur.next(),
                next2 = cur.next().next(),
                prev = cur.prev(),
                prev2 = cur.prev().prev();
            prev.addClass("slick-sprev");
            next.addClass("slick-snext");
            prev2.addClass("slick-sprev2");
            next2.addClass("slick-snext2");
            cur
                .removeClass("slick-snext")
                .removeClass("slick-sprev")
                .removeClass("slick-snext2")
                .removeClass("slick-sprev2");
            slick.$prev = prev;
            slick.$next = next;
        })
        .on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            console.log("beforeChange");
            var cur = $(slick.$slides[nextSlide]);
            console.log(slick.$prev, slick.$next);
            slick.$prev.removeClass("slick-sprev");
            slick.$next.removeClass("slick-snext");
            slick.$prev.prev().removeClass("slick-sprev2");
            slick.$next.next().removeClass("slick-snext2");
            (next = cur.next()), (prev = cur.prev());
            //prev2.prev().prev();
            //next2.next().next();
            prev.addClass("slick-sprev");
            next.addClass("slick-snext");
            prev.prev().addClass("slick-sprev2");
            next.next().addClass("slick-snext2");
            slick.$prev = prev;
            slick.$next = next;
            cur
                .removeClass("slick-next")
                .removeClass("slick-sprev")
                .removeClass("slick-next2")
                .removeClass("slick-sprev2");
        });

    rev.slick({
        speed: 1000,
        arrows: true,
        dots: true,
        focusOnSelect: true,
        infinite: true,
        centerMode: true,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "0",
        swipe: true,
        // customPaging: function(slider, i) {
        //     return "";
        // }
        /*infinite: false,*/
    });

    // review-slider Js End




    // var typed = new Typed("#typed", {
    //     stringsElement: '#typed-strings',
    //     typeSpeed: 40,
    //     loop: true,
    //     backDelay: 3000,
    //     backSpeed: 5,
    // });


});


$(window).on('load',function(){
    setTimeout(function(){ 
         $('.preloader-circle').delay(1000).fadeOut();
    });
});




