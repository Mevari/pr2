
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



    initQuantity();




    // $('#ordershop-phone').attr('placeholder', '').inputmask('+375 (99) 999-99-99');

    $( ".target_plus" ).click(function() {
        var c=$(this).parent().parent();
        var c1=c.siblings(".items_price").find(".items_pric");
        var summa=(parseInt(c1.text())+parseInt(c1.attr("data-id")));
        c1.text(summa);
        var sum_itog=document.getElementById("id_summa");
        var sum_text=parseInt(sum_itog.innerHTML)+parseInt(c1.attr("data-id"));
        sum_itog.innerHTML=sum_text;
        var b=$(this).siblings(".count_items");
        var a= (parseInt(b.text())+1);
        b.text(a);
        var b=$(this).siblings(".count_items");

    });



    $(".target_minus").click(function () {
        var c=$(this).parent().parent();
        var c1=c.siblings(".items_price").find(".items_pric");
        var summa=(parseInt(c1.text())-parseInt(c1.attr("data-id")));
        c1.text(summa);
        var sum_itog=document.getElementById("id_summa");
        var sum_text=parseInt(sum_itog.innerHTML)-parseInt(c1.attr("data-id"));

        var b=$(this).siblings(".count_items");
        a = parseInt(b.text());
        if (a == 1) {
            b.text(a);
            c1.text(parseInt(c1.attr("data-id")));
        }
        else {
            a = parseInt(b.text()) - 1;
           b.text(a);
            sum_itog.innerHTML=sum_text;
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
        animation: "slide",
     controlNav: false,

     directionNav: true,
     prevText: "",
     nextText: "",

 });

  $(".work-box").fancybox({  });


    $menu_item = $(".accordion li[class='open']");
    $next = $menu_item.children('ul');
    $next.slideToggle(0);

    // console.log($menu_item);
    // var last_id =  $.cookie('tab_id');
    // if (last_id) {
    //     $menu_item=$(".accordion li[data_id='" +last_id+ "']");
    //     $menu_item.addClass('open');
    //     $next = $menu_item.children('ul');
    //     $next.slideToggle(0);
    // }
    //
    // $('.accordion li').click(function () {
    //     var tab_id = $(this).attr('data_id');
    //     $.cookie('tab_id', tab_id);
    //     // console.log($.cookie('tab_id'));
    // })

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

    function initQuantity()
    {
        // Handle product quantity input
        if($('.product_quantity').length)
        {
            var input = $('#quantity_input');
            var incButton = $('#quantity_inc_button');
            var decButton = $('#quantity_dec_button');

            var originalVal;
            var endVal;

            incButton.on('click', function()
            {
                originalVal = input.val();
                endVal = parseFloat(originalVal) + 1;
                input.val(endVal);
            });

            decButton.on('click', function()
            {
                originalVal = input.val();
                if(originalVal > 0)
                {
                    endVal = parseFloat(originalVal) - 1;
                    input.val(endVal);
                }
            });
        }
    }
});

function add_cart(id,count = 1) {
    $.ajax({
        url: '/cart/add/'+id,
        dataType: 'text',
        data: {'count':count },
        type: 'POST',

        async: false,
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
}
function delete_cart(id) {
    $.ajax({
        url: '/cart/delete_product/'+id,
        dataType: 'text',

        data: { },
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
}


function AddFromCategory() {
    var id = $(this).attr("data-id");
    var count =1;
    var input = $('#quantity_input');
    console.log(input);
    if (input.length){
        console.log(input.val())
        count = input.val();

    }

    add_cart(id,count);
}

function AddFromCart() {
   var el =  $(this).parents('.order_row');
   var id = el.attr("item-id");
   add_cart(id);
}
function DeleteFromCart() {
    var el =  $(this).parents('.order_row');

    var id = el.attr("item-id");
    delete_cart(id);
}


$(".cart_add").click(AddFromCategory);
$('.target_plus').click(AddFromCart);
$('.target_minus').click(DeleteFromCart);




