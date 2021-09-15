$(function () {
    //    alert('check');


    //메뉴버튼 클릭
    var menu_sts = 0;
    $('.menu_btn').click(function () {

        //        alert('ddd');


        if (menu_sts === 0) {
            $('nav').animate({
                left: '0%'
            });
            menu_sts = 1;
        } else {
            $('nav').animate({
                left: '-90%'
            });
            menu_sts = 0;
        }

    });


    //main menu click
    var li_idx = 99;
    var li_idx2 = 0;

    $('.menu>li>a').click(function (e) {

        e.preventDefault();

        li_idx2 = li_idx;
        li_idx = $(this).parent().index();
        //        console.log(li_idx);


        if (li_idx === li_idx2) {
            $(this).parent().find('ul.sub_menu').slideToggle();
            $(this).toggleClass();

        } else {
            $(this).parent().find('ul.sub_menu').slideDown().parent().siblings().find('ul.sub_menu').slideUp();

            $(this).addClass('on').parent().siblings().children('a').removeClass('on');

        }




    });







});
