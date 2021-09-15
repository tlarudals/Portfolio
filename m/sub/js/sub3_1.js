//sub3_1.js

$(function () {


    //    alert('check');

    $('.news_box').hide().slice(0, 2).show();

    $('.news_btn').click(function (e) {

        e.preventDefault();
        $('.news_box:hidden').slice(0, 1).slideDown();

        var newsbox_top = $('.news_btn').offset().top;
        if ($('.news_box:hidden').length === 0) {
            $(this).fadeOut();
        }

        newsbox_top = newsbox_top - 200;

        $('html,body').animate({
            scrollTop: newsbox_top
        }, 1000);

    });

    if($('.news_box:hidden').length===0){
        $('.news_btn').css({
            display:'none'
         });}


});