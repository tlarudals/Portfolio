$(function () {
    
    $('.company_explain').addClass('on');
    $('.company_inner h2').addClass('on');
    $('.company_inner p').addClass('on');
    
    $(window).scroll(function(){
        var sc_top = $(this).scrollTop();
        var safe_top = $('.safe_product').offset().top-500;
        var safe_box_top = $('.safe_box').offset().top-700;
        
//        console.log(sc_top);
//        console.log('safe '+safe_top);
        
        if(sc_top>safe_top){
            $('.safe_product_inner>p').addClass('on');            
        }
        
        if(sc_top>safe_box_top){
            $('.safe_box').addClass('on');
        }
        
        
    });
    
    
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
    
    



}); //jQuery
