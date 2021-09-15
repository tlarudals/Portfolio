var cb1, cb2, cb3, cb4, cb5, cb6;
var sc_con;

$(window).scroll(function () {
    var sc_top = $(this).scrollTop();
    var gap = $(this).height();
    var gap2 = gap - 100;
    //    console.log(check);

    //    if (sc_top > cb1 - gap && sc_top < cb1 - gap2) {
    //        $('.con1').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con2').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    } else if (sc_top > cb2 - gap && sc_top < cb2 - gap2) {
    //        $('.con3').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con4').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    } else if (sc_top > cb3 - gap && sc_top < cb3 - gap2) {
    //        $('.con5').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con6').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    } else if (sc_top > cb4 - gap && sc_top < cb4 - gap2) {
    //        $('.con7').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con8').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    } else if (sc_top > cb5 - gap && sc_top < cb5 - gap2) {
    //        $('.con9').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con10').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    } else if (sc_top > cb6 - gap && sc_top < cb6 - gap2) {
    //        $('.con11').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //
    //        $('.con12').animate({
    //            left: '0%'
    //        }, 1000, 'easeOutCirc');
    //    }



    if (sc_top > cb2 - gap && sc_top < cb2 - gap2) {
        $('.con3').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');

        $('.con4').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');
    } else if (sc_top > cb3 - gap && sc_top < cb3 - gap2) {
        $('.con5').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');

        $('.con6').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');
    } else if (sc_top > cb4 - gap && sc_top < cb4 - gap2) {
        $('.con7').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');

        $('.con8').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');
    } else if (sc_top > cb5 - gap && sc_top < cb5 - gap2) {
        $('.con9').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');

        $('.con10').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');
    } else if (sc_top > cb6 - gap && sc_top < cb6 - gap2) {
        $('.con11').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');

        $('.con12').animate({
            left: '0%'
        }, 1000, 'easeOutCirc');
    }
    

    if(sc_top>sc_con){
//        $('.cb_txt_inner .cb_txt').addClass('on');
        $('.cb_txt_inner .cb_txt').fadeIn(2000);
    }
    

});

$(function () {

    //    alert('check');
    $('.cb_activity_lbox').css({
        left: '-100%'
    });

    $('.cb_activity_rtxt').css({
        left: '100%'
    });

    $('.cb_activity_ltxt').css({
        left: '-100%'
    })

    $('.cb_activity_rbox').css({
        left: '100%'
    });


    $('.con1').animate({
        left: '0%'
    }, 1000, 'easeOutCirc');

    $('.con2').animate({
        left: '0%'
    }, 1000, 'easeOutCirc');

    //    cb_activity_ltxt
    //    cb_activity_rbox

    cb1 = $('#cb_page1').offset().top;
    cb2 = $('#cb_page2').offset().top;
    cb3 = $('#cb_page3').offset().top;
    cb4 = $('#cb_page4').offset().top;
    cb5 = $('#cb_page5').offset().top;
    cb6 = $('#cb_page6').offset().top;
    
    sc_con = $('.contribute ').offset().top-300;
    
    

});
