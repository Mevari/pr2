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

    // $(".cart_add").click(function () {
    //     alert("sdf");
    //    var id=$(this).attr("data-id");
    //    $.post("/cart/add/"+id,{},function (data) {
    //        $("#cart-count").html(data);
    //
    //    });
    //     return false;
    // });
    $(".cart_add").click(function () {

        var id = $(this).attr("data-id");
        $.ajax({
            url: '/cart/add/'+id,
            dataType: 'text',

            data: { _csrf: yii.getCsrfToken()},
            type: 'POST',

            async: false,
            success:
                function (data) {
                    $(".clear_basket").html(data);
                },
            error:
                function (data) {
                    alert('Ошибка запроса');
                }
        });
    });



    $('input[name="phone"]').attr('placeholder', '+375 (00) 000-00-00').inputmask('+375 (99) 999-99-99');

    $( "#target_plus" ).click(function() {
        var a= (parseInt($('.count_items').text())+1);
        $('.count_items').text(a);
    });



    $("#target_minus").click(function () {
        a = parseInt($('.count_items').text());

        if (a == 0)
            $('.count_items').text(a);
        else {
            a = parseInt($('.count_items').text()) - 1;
            $('.count_items').text(a);
        }
    });

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

