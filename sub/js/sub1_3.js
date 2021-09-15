var head_height;
var page1_sctop;
var tst = 0;
var page1, page2, page3;
var gap = 30;
var hs_flag=0;

$(window).scroll(function () {
    var sc_top = $(this).scrollTop();

    //    console.log(sc_top);




    if (sc_top > page1_sctop && tst === 0) {

        $('.history_sel_wrap').addClass('on');
        $('.history_sel_wrap.on').animate({
            top: '40px'
        }, 300);

        tst = 1;



    } else if (sc_top < page1_sctop && tst === 1) {
        $('.history_sel_wrap.on').animate({
            top: '10px'
        }, 300, function () {
            $('.history_sel_wrap').removeClass('on');

        });



        tst = 0;
    }

    
    if(hs_flag===1) return false; //hs_btn color change check

    if (sc_top > page1 - gap && sc_top < page1 + gap) {
        $('.history_sel p').eq(0).addClass('active').siblings().removeClass('active');
    } else if (sc_top > page2 - gap && sc_top < page2 + gap) {
        $('.history_sel p').eq(1).addClass('active').siblings().removeClass('active');
    } else if (sc_top > page3 - gap && sc_top < page3 + gap) {
        $('.history_sel p').eq(2).addClass('active').siblings().removeClass('active');
    }

    
    

});




$(function () {

    head_height = $('header').height();
    page1_sctop = $('#page1').offset().top;

    page1 = $('#page1').offset().top - (head_height * 2);
    page2 = $('#page2').offset().top - (head_height * 2);
    page3 = $('#page3').offset().top - (head_height * 2);



    //    console.log(sel_height);


    $('html, body').stop().delay(100).animate({
        scrollTop: 0
    }, 10)
    //새로 고침시 맨위로 이동


    $('.history_sel a').click(function (e) {

        hs_flag=1;
        e.preventDefault();

        var page_id = $(this).attr('href');
        var page_move = $(page_id).offset().top;

        //        console.log(page_id);

        $(this).parent().addClass('active').siblings().removeClass('active');


        $('html, body').stop().animate({
            scrollTop: page_move - (head_height * 2) +'px'
        }, 800, 'easeInOutCirc',function(){
            hs_flag=0;
            
        });
        
        
        //scollTop 


    }); // history_sel a click



}); //jQuery
