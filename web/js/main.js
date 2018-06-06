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
 $('.flexslider').flexslider({
        animation: "slide"
    });

  $(".work-box").fancybox({  });
  
});

$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion'), false);
});


