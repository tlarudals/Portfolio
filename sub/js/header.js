$(function () {

    $('body,html').stop().delay(100).animate({
        scrollTop: 0
    }, 10);

    $('.logo .down').css({
        display: 'none'
    });

    //    header
    $(window).scroll(function () {
        var sc = $(window).scrollTop();
        var header_sc = $('header').height();

        if (sc > header_sc) {
            $('header').addClass('on');
            $('.logo .down').css({
                display: 'block'
            });
            $('.logo .up').css({
                display: 'none'
            });

        } else {
            $('header').removeClass('on');
            $('.logo .down').css({
                display: 'none'
            });
            $('.logo .up').css({
                display: 'block'
            });
            
        }



    });



    //nav
    $('.menu>li').mouseenter(function () {

        $(this).stop().children('.sub').slideDown();

    });

    $('.menu>li').mouseleave(function () {
        $('.sub').stop().slideUp();
    });





    //sub_menu
    //    $('.sub_menu_inner>div').click(function () { 
    //
    //        $(this).addClass('on').siblings().removeClass('on');
    //
    //
    //    });


}); //jQuery
