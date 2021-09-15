$(function () {

    //main

    $('.main_gallery li').eq(0).addClass('on').siblings().removeClass('on');
    var main_interval = setInterval(function () {
        main_slide();
    }, 5000);

    function main_slide() {

        $('.main_gallery').animate({
            left: '-100%'
        }, 800, function () {
            $(this).append($('.main_gallery li').first()).css({
                left: 0
            });
            
            

        });
    
        var main_sn = $('.main_gallery li').eq(1).attr('data-main');
        $('.main_btngrp li').eq(main_sn).addClass('on').siblings().removeClass('on');
        
              
         $('.main_gallery li').eq(1).addClass('on').siblings().removeClass('on');
        
    }
    
    
    
    
    

    //best
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
    });



    //brand
    $('.pd_wrap').hide().slice(0, 2).show();

    $('.brand_btn').click(function (e) {

        e.preventDefault();
        $('.pd_wrap:hidden').slice(0, 2).slideDown();
//            console.log('visible');
        if ($('.pd_wrap:hidden').length === 0) {
            $('.brand_btn').fadeOut(600);
//            console.log('hidden');
        }

        $('html, body').animate({
            scrollTop: $(this).offset().top - 120
        }, 1500);


    }); //brand_btn


    //contribute
    function rfade() {
        var first = $('.cb_container .cb_wrap').first();
        var second = first.next();

        console.log(first);

        second.hide().addClass('on').fadeIn(1000, 'easeInSine');

        $('.cb_container').append(first);
        first.removeClass('on');

    }

    function lfade() {
        var last = $('.cb_container').prepend($('.cb_container .cb_wrap').last());
        var first = $('.cb_container .cb_wrap').first();
        var second = first.next();

        first.hide().addClass('on').fadeIn(1000, 'easeInSine');
        second.removeClass('on');

        //        console.log('check');
    }



    var cbtn_snum = 0;
    $('.cbtn').click(function (e) {
            e.preventDefault();
            var cbtn = $(this).index('.cbtn');

//            console.log(cbtn);

            if (cbtn === 0) {
                lfade();
                cbtn_snum--;
                if (cbtn_snum === -1) {
                    cbtn_snum = 5;
                }
            }
         else if (cbtn === 1) {
             rfade();
            cbtn_snum++;
            if (cbtn_snum === 6) {
                cbtn_snum = 0;
            }


        }

        $('.cb_grp li').eq(cbtn_snum).addClass('on').siblings().removeClass('on');


    });





});
