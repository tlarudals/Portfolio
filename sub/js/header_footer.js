$(function () {
    
    $('body,html').stop().delay(100).animate({
        scrollTop: 0
    },10);
    
    
    //header
//    $(window).scroll(function(){
//        var sc = $(window).scrollTop();
//        var header_sc = $('header').height();
//        
//        if(sc>header_sc){
//            $('header').addClass('on');            
//        }
//        else{
//            $('header').removeClass('on');  
//        }
//        
//        
//        
//    });
    
    

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



    //footer familysite
    var site_clk = 0; //fmaily site 클릭
    var clk_check = 0; //광클방지

    $('.site_link').click(function (e) {
        e.preventDefault();




        if (clk_check === 1) return false;
        clk_check = 1;

        if (site_clk === 0) {
            site_clk = 1;

            $('.site_list').slideDown(function () {
                clk_check = 0;
            });

        } else {
            site_clk = 0;
            $('.site_list').slideUp(function () {
                clk_check = 0;
            });
        }


        $('.familysite').mouseleave(function () {
            $('.site_list').slideUp();
            site_clk = 0;
        });

    });



}); //jQuery
