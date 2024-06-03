$(window).load(function () {
  if ($(".preloader-circle").length) {
    $(".preloader-circle").delay(400).fadeOut();
  }
});

$(document).ready(function () {
  var typed = new Typed("#typed", {
    stringsElement: "#typed-strings",
    typeSpeed: 40,
    loop: true,
    backDelay: 3000,
    backSpeed: 5,
  });

  // Custom load more changes

  var pageNumber = 1;

  function load_posts() {
    pageNumber++;

    var numberofpage = $("#numberofpage").val();

    console.log("numberofpage " + numberofpage);

    var ppp = numberofpage; // Post per page

    var str =
      "&pageNumber=" + pageNumber + "&ppp=" + ppp + "&action=more_post_ajax";
    $.ajax({
      type: "POST",
      dataType: "html",
      url: ajaxurl,
      data: str,
      success: function (data) {
        $("#ajax-posts").append($data);
        //console.log(data);
        var $data = $(data);
        if ($data.length) {
          $("#ajax-posts").append($data);
          //$("#more_posts").attr("disabled",false); // Uncomment this if you want to disable the button once all posts are loaded
          //$("#more_posts").hide(); // This will hide the button once all posts have been loaded

          var ajaxposts = $(".blog-col").length;
          var getTotalBlog = $("#getTotalBlog").val();

          console.log("ajaxposts -- " + ajaxposts);
          console.log("getTotalBlog -- " + getTotalBlog);

          if (ajaxposts == getTotalBlog) {
            $("#more_posts").hide();
          } else {
            $("#more_posts").show();
          }
        } else {
          $("#more_posts").attr("disabled", true);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
      },
    });
    return false;
  }

  $("#more_posts").on("click", function () {
    // When btn is pressed.
    $("#more_posts").attr("disabled", true); // Disable the button, temp.
    load_posts();
    $(this).insertAfter("#ajax-posts"); // Move the 'Load More' button to the end of the the newly added posts.
  });
  // End custom load more changes

  // Custom Case Studies Start

  var pageCase = 1;

  function load_cases() {
    $("#more_cases").hide();
    $("#loader").show();
    pageCase++;

    var numberofcase = $("#numberofcase").val();

    var ccc = numberofcase; // Post per page

    var strr =
      "&pageCase=" + pageCase + "&ccc=" + ccc + "&action=more_case_ajax";
    $.ajax({
      type: "POST",
      dataType: "html",
      url: ajaxurl,
      data: strr,
      success: function (data) {
        $("#loader").hide();
        // console.log(data);

        // $("#ajax-cases").append($data);
        // console.log(data);
        var $data = $(data);
        if ($data.length) {
          $("#ajax-cases").append($data);
          //$("#more_posts").attr("disabled",false); // Uncomment this if you want to disable the button once all posts are loaded
          //$("#more_posts").hide(); // This will hide the button once all posts have been loaded

          var ajaxcases = $(".blog-col").length;
          var getTotalCase = $("#getTotalCase").val();

          // console.log('ajaxcases -- '+ ajaxcases);
          // console.log('getTotalCase -- '+ getTotalCase);

          if (ajaxcases >= getTotalCase) {
            $("#more_cases").hide();
          } else {
            $("#more_cases").show();
          }
        } else {
          $("#more_cases").show();
          $("#more_cases").attr("disabled", true);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        $("#more_cases").show();
        $("#loader").hide();

        $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
      },
    });
    return false;
  }

  $("#more_cases").on("click", function () {
    // When btn is pressed.
    $("#more_cases").attr("disabled", true); // Disable the button, temp.
    load_cases();
    $(this).insertAfter("#ajax-cases"); // Move the 'Load More' button to the end of the the newly added posts.
  });
  // Custom Case Studies End

  // slider js start

  var $status = $(".pagingInfo");
  var $slickElement = $(".testimonial-slider");

  $slickElement.on(
    "init reInit afterChange",
    function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $status.text(i + "/0" + slick.slideCount);
    }
  );

  $slickElement.slick({
    infinite: false,
    dots: false,
  });

  // slider js End

  $("span.counter").counterUp({
    delay: 10,
    time: 1000,
  });

  // Accordian js Start

  $(".accordian-title")
    .click(function () {
      $(".accordian-title").not($(this)).removeClass("active");
      $(".accordian-text").not($(this).next()).slideUp();
      $(this).toggleClass("active");
      $(this).next().slideToggle(250);
    })
    .filter(":first")
    .click();

  // Accordian js end

  $(".contact-us-click").click(function () {
    $("#contact-us .contact-us").addClass("open");
    $("body").addClass("no-scroll");
  });

  $(".contact-us-close > a").click(function () {
    $("#contact-us .contact-us").removeClass("open");
    $("body").removeClass("no-scroll");
  });

  $(".header-right .navbar-toggler").click(function () {
    $("body").toggleClass("body-scroll-stop");
  });

  $("#share-click").click(function () {
    $(".icon-main .share-icon-list").toggleClass("open");
  });

  $(".accord-title").click(function () {
    $(this).toggleClass("active");
    $(this).next(".accord-inner").slideToggle("slow");
    // $('.accord-title').not($(this).next()).slideUp('slow');
    // $('.accord-title').not($(this)).removeClass("active");
  });

  $(".banner-slider")
    .slick({
      slidesToShow: 1,
      dots: false,
      arrows: false,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      speed: 1500,
      pauseOnHover: false,
      autoplaySpeed: 2000,
    })
    .on("setPosition", function (event, slick) {
      slick.$slides.css("height", slick.$slideTrack.height() + "px");
    });
});

$('.s-logo-slider').slick({
  dots: false,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 0,
  slidesToShow: 5,
  speed: 5000,
  cssEase: "linear",
  pauseOnHover: true
});

jQuery(document).ready(function() {

  setInterval(function(){ 
     // toggle the class every 
     jQuery('.wireframe-slider').toggleClass('wireframe');  
     setTimeout(function(){
       // toggle another class
       jQuery('.wireframe-slider').toggleClass('black-screen');  
     },2000)

  },2000);

});

// Load Case Studies Post

// ======= header height count js start ===========

// $(window).on('load resize', function(){
//   var HeaderHeight = $('.header-main').outerHeight();
//       $('.page-wrapper').css('margin-top',HeaderHeight);
// });

// ======= header height count js End ===========

// $(document).ready(function() {
//   $('html, body').animate({scrollTop: '+=10px'}, 800);

//   $("#more_posts").click(function(event){
//   	$('html, body').animate({scrollTop: '+=10px'}, 800);
//   });
// });
