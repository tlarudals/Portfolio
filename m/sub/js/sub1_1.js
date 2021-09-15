var safe_sct=0;

$(window).scroll(function(){
    var sc_top = $(this).scrollTop()+200;
    
    
    if(sc_top>safe_sct){
        $('.safe_product_inner').addClass('on');
        
    }
    
});


$(function(){
//    alert('1_1');
    
    $('.com_txt').addClass('on');
    
    safe_sct= $('.safe_product').offset().top;
    
    

    
    
    
});