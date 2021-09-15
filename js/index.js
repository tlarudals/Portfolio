var sc_mpage1;
var sc_mpage2;
var sc_mpage3;
var sc_mpage4;
var mpage3_h;
var main_h;
var main_sc;
var cbtn_snum = 0;


$(window).scroll(function () {
    var m_sctop = $(this).scrollTop();
    //    console.log(m_sctop);
    var gap = $(this).height();
    var gap2 = gap - 110;


    if (m_sctop > main_sc + main_h / 2) {
        //        $('.health_inner').stop().animate({
        //            left: 0
        //        }, 2000, 'easeOutElastic');

        $('.health_inner').addClass('on');


    }


        if (m_sctop > sc_mpage1 - gap && m_sctop < sc_mpage1 - gap2) {
            $('#m_page1').fadeTo(800, 1, 'easeInExpo');
        } else if (m_sctop > sc_mpage2 - gap && m_sctop < sc_mpage2 - gap2) {
            $('#m_page2').fadeTo(800, 1, 'easeInExpo');
        } else if (m_sctop > sc_mpage3 - gap && m_sctop < sc_mpage3 - gap2) {
            $('#m_page3').fadeTo(800, 1, 'easeInExpo');
        } else if (m_sctop > sc_mpage4 - gap && m_sctop < sc_mpage4 - gap2) {
            $('#m_page4').fadeTo(800, 1, 'easeInExpo');
        }
        else if (m_sctop > sc_mpage3 + (mpage3_h - 100) / 2) {
            $('#m_page5').fadeTo(800, 1, 'easeInExpo');
        }





});




$(function () {
    //    alert('check');
    var page_num = 0;
    var page;

    $('html,body').stop().delay(100).animate({
        scrollTop: 0
    }, 10);


    sc_mpage1 = $('#m_page1').offset().top;
    sc_mpage2 = $('#m_page2').offset().top;
    sc_mpage3 = $('#m_page3').offset().top;
    sc_mpage4 = $('#m_page4').offset().top;

    mpage3_h = $('#m_page3').height();
    main_h = $('#main_h').height();
    main_sc = $('#main_h').offset().top;

    //    console.log('mpage4_h ' + mpage4_h);




    //main txt
    $('.main_gallery li').eq(0).addClass('on').siblings().removeClass('on');

    var main_interval = setInterval(function () {
        main_slide();
    }, 6000);

    function main_slide() {

        $('.main_gallery').animate({
            left: '-100%'
        }, 800, function () {
            $(this).append($('.main_gallery li').first()).css({
                left: 0
            });

        });

        var main_sn = $('.main_gallery li').eq(1).attr('data-main');

        //                console.log(main_sn);

        //main txt
        $('.main_gallery li').eq(1).addClass('on').siblings().removeClass('on');


        $('.main_btngrp li').eq(main_sn).addClass('on').siblings().removeClass('on');


    } //main_slide()

    //main_view hover
    //    $('.main_view').hover(
    //        function () {
    //
    //            clearInterval(main_interval);
    //            
    //        },
    //        function () {
    //            main_interval = setInterval(function () {
    //                main_slide();
    //            }, 6000);
    //        }
    //
    //    ); 









    //best
    var best_interval;
    //    var best_timeout;


    best_interval = setInterval(rfade, 3000);

    //        var last =$('.best_pd_slide').prepend($('.best_pd_slide .best_pd_wrap').last());



    function rfade() {
        var first = $('.best_pd_slide .best_pd_wrap').first();
        var second = first.next();

        second.hide().addClass('on').fadeIn(1000, 'easeInSine');
        $('.best_pd_slide').append(first);
        first.removeClass('on');
    }



    function lfade() {
        var last = $('.best_pd_slide').prepend($('.best_pd_slide .best_pd_wrap').last());
        var first = $('.best_pd_slide .best_pd_wrap').first();
        var second = first.next();

        first.hide().addClass('on').fadeIn(1000, 'easeInSine');
        second.removeClass('on');

        //        console.log('check');
    }






    //    best_inter();
    //
    //    function best_inter() {
    //        best_interval = setInterval(function () {
    //            best_rslide();
    //
    //        }, 2000);
    //    }


    //    function best_time() {
    //        clearTimeout(best_timeout);
    //        best_timeout = setTimeout(function () {
    //
    //            best_inter();
    //
    //        }, 3000);
    //    }

    //best_slide()
    //    function best_rslide() {
    //        if (page_num === 3) {
    //            page_num = 1;
    //        }
    //        page_num++;
    //        page = -730 * page_num;
    //
    //
    //        $('.best_pd_slide').css({
    //            left: page
    //        }).append($('.best_pd_slide').children('div').first()).css({
    //            left: 0
    //        });
    //
    //    } 
    //
    //    function best_lslide() {
    //        if (page_num === 3) {
    //            page_num = 1;
    //        }
    //        page_num++;
    //        page = 730 * page_num;
    //
    //
    //        $('.best_pd_slide').css({
    //            left: page
    //        }).prepend($('.best_pd_slide').children('div').last()).css({
    //            left: 0
    //        });
    //
    //    }



    $('.best_pd_wrap').hover(
        function () {

            clearInterval(best_interval);
            //            console.log('over');
        },
        function () {
            best_interval = setInterval(rfade, 3000);
            //            best_inter();
            //            console.log('out');
        }

    );



    $('.bbtn').click(function (e) {
        var bbtn_check = $(this).index('.bbtn');
        e.preventDefault();
        clearInterval(best_interval);

        if (bbtn_check === 0) {
            lfade();
        } else if (bbtn_check === 1) {
            rfade();
        }


    });




    //contribute
    $('.cbtn').click(function () {
        var cbtn = $(this).index('.cbtn');



        if (cbtn === 0) {


            cbtn_snum--;
            if (cbtn_snum === -1) {
                cbtn_snum = 5;
            }
            contribute_slide(0);

        } else if (cbtn === 1) {

            cbtn_snum++;
            if (cbtn_snum === 6) {
                cbtn_snum = 0;
            }

            contribute_slide(1);

        }

        $('.contribute_btngrp li').eq(cbtn_snum).addClass('on').siblings().removeClass('on');


    });




    $('.close').click(function(){
        $('#badge').hide();
    });


}); //jQuery

var ct_click = 0;

function contribute_slide(direct) {

    if (ct_click === 1) return false;
    ct_click = 1;

    var tg = document.querySelector('.contribute_gallery');
    var tg2 = tg.querySelectorAll('.contribute_wrap');


    //    console.log('갯수체크 : ' + tg2.length);

    if (direct === 0) {
        tg.insertBefore(tg2.item(tg2.length - 1), tg2.item(0));
        //        alert('0');
    } else if (direct === 1) {
        tg.appendChild(tg2.item(0));
        //        alert('1');
    }

    tg2 = tg.querySelectorAll('.contribute_wrap');
    //    console.log('갯수체크2 : ' + tg2.length);
    for (var i = 0; i < tg2.length; i++) {

        tg2[i].setAttribute('class', 'con_num' + (i + 1));
        tg2[i].classList.add('contribute_wrap');

    }

    setTimeout(function () {
        ct_click = 0;
    }, 400);

} //contribute_slide
