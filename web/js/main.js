$(document).ready(function(){
  $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();

        if ( scroll > 50) {
            $(".navbar-dark").css("background-color", "#2e304a");
            $(".navbar-dark").css("min-height", "74px");
            $(".navbar-dark").css("border-style", "none");

        } else {
            $(".navbar-dark").css("background-color", "transparent");
            $(".navbar-dark").css("min-height", "100px");
            $(".navbar-dark").css("border-style", "none none solid none");
        }
    });
 $('.flexslider').flexslider({
        animation: "slide"
    });

  $(".work-box").fancybox({  });

  
});
