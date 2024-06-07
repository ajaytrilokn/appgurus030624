$(document).ready(function() {

    

    $('.clients-logo-inner').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        variableWidth: true,
        autoplaySpeed: 0,
        // slidesToShow: 5,
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


    $('.team-title-slider').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        variableWidth: true,
        autoplaySpeed: 0,
        // slidesToShow: 5,
        speed: 8000,
        cssEase: "linear",
        pauseOnHover: false,
    });

    $('.team-person-slider').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                    infinite: false,
                    dots: false
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
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



    $('.industries-slider-main').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                    infinite: false,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });



    $('.blogs-sec-slider').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    $('.testimonials--slider').slick({
        dots: true,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // speed: 2000,
    });






    // scroll hide and show

    $('.navbar-nav li a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("no-scroll");
    });

    $(".header-menu ul li a").click(function() {
        $("body").removeClass("no-scroll");
    });


    // top nav header scroll active class add start

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll > 0) {
    //         $(".header-main").addClass("active");
    //     } else {
    //         $(".header-main").removeClass("active");
    //     }
    // });

    
    $(function(){
  
      var scroll = $(document).scrollTop();
      var navHeight = $('.header-main').outerHeight();
      
      $(window).scroll(function(){
        
        var scrolled = $(document).scrollTop();
         
        if(scrolled > navHeight){

          $('.header-main').addClass('active');
            }else{
            $('.header-main').removeClass('active');
            }

          if(scrolled > scroll){
            $('.header-main').removeClass('sticky');
            }else{
            $('.header-main').addClass('sticky');
            }
        
          scroll = $(document).scrollTop();

      }); 

    });



    // top nav header scroll active class add end




});



// Smoothly Scroll to contact form and hide the id

jQuery(document).ready(function($) {
    $('a[data-scroll-to]').on('click', function(event) {
        var target = $(this).data('scroll-to');
        if (target !== '') {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 2000, function() {
                // After scrolling, update the URL with a blank hash using history.pushState
                history.pushState(null, null, ' ');
            });
        }
    });
});


