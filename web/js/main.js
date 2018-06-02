$(document).ready(function(){
//  $(window).on('scroll', function() {
//        var scroll = $(window).scrollTop();
//
//        if ( scroll > 50) {
//            $(".navbar-dark").css("background-color", "#2e304a");
//            $(".navbar-dark").css("min-height", "74px");
//            $(".navbar-dark").css("border-style", "none");
//
//        } else {
//            $(".navbar-dark").css("background-color", "transparent");
//            $(".navbar-dark").css("min-height", "100px");
//            $(".navbar-dark").css("border-style", "none none solid none");
//        }
//    });
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {

                $('#toTop').fadeIn();

            } else {

                $('#toTop').fadeOut();

            }
        });

        $('#toTop').click(function () {

            $('body,html').animate({scrollTop: 0}, 800);

        });

    });
 new WOW().init();
                
 $('.flexslider').flexslider({
        animation: "slide"
    });

  $(".work-box").fancybox({  });

 

  
});

