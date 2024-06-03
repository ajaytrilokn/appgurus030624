$(document).ready(function() {


    $("#fcClick").click(function() {
        $('html, body').animate({
            scrollTop: $("#freeConsultation").offset().top - 160
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


    var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 40,
        loop: true,
        backDelay: 3000,
        backSpeed: 5,
    });


});


$(window).on('load',function(){
    setTimeout(function(){ 
         $('.preloader-circle').delay(200).fadeOut();
    });
});

