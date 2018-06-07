
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


    var last_id = localStorage.getItem('tab_id');
    if (last_id) {
        $menu_item=$(".accordion li[data_id='" +last_id+ "']");
        $menu_item.addClass('open');
        $next = $menu_item.children('ul');
        $next.slideToggle(0);
    }

    $('.accordion li').click(function () {
        var tab_id = $(this).attr('data_id');
        localStorage.setItem('tab_id', tab_id);
    })

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
            console.log($this);
            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);


    });
});




