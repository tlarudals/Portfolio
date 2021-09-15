$(function () {    
    
    $('.menu_box a').hover(
        function(){
           $(this).find('img').stop().animate({
               rotate: '-15deg'
           },300);
            
        },
        function(){
            
            $(this).find('img').stop().animate({
               rotate: '0deg'
           },300);
            
        }
    
    );
    
    

}); //jQuery
