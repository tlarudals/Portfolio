var sc_sts = 0;


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
            //            $('header').addClass('on');
            //            $('.logo .down').css({
            //                display: 'block'
            //            });
            //            $('.logo .up').css({
            //                display: 'none'
            //            });
            logo_change(0);
//            sc_sts = 1;
            sc_sts = 1;
        } else {
            //            $('header').removeClass('on');
            //            $('.logo .down').css({
            //                display: 'none'
            //            });
            //            $('.logo .up').css({
            //                display: 'block'
            //            });
            logo_change(1);
            
            sc_sts = 0;
            
        }



    });



    //nav
    //    $('.menu>li').mouseenter(function () {
    //
    //        $(this).stop().children('.sub').slideDown();
    //
    //    });
    //
    //    $('.menu>li').mouseleave(function () {
    //        $('.sub').stop().slideUp();
    //    });

    $('nav').mouseenter(function () {
//                $('.smenu').stop().slideDown();
        $('.smenu').show();

        logo_change(0);

    });

    $('.smenu').mouseleave(function () {
//                $('.smenu').stop().slideUp();
        $('.smenu').hide();


        if (sc_sts === 0) {
            logo_change(1);
        }
    });




    //sub_menu
    //    $('.sub_menu_inner>div').click(function () { 
    //
    //        $(this).addClass('on').siblings().removeClass('on');
    //
    //
    //    });



    function logo_change(chg) {

        if (chg === 0) {
            $('header').addClass('on');
            $('.logo .down').css({
                display: 'block'
            });
            $('.logo .up').css({
                display: 'none'
            });

        } else if (chg === 1) {
            $('header').removeClass('on');
            $('.logo .down').css({
                display: 'none'
            });
            $('.logo .up').css({
                display: 'block'
            });

        }



    }

}); //jQuery
