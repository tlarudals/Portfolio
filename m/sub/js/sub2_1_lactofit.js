//sub2_1lactofit.js

$(function(){
    
//    alert('check');
    
    $('.lt_box').hide().slice(0,4).show();
    
    $('.lt_more_btn').click(function(e){
        
        e.preventDefault();
        
        $('.lt_box').slideDown();
        
        var ltbox_top =  $('.lt_box').offset().top;
        
        ltbox_top = ltbox_top+310;
        
        $('html,body').animate({
            scrollTop: ltbox_top
        });
       
        
        if($('.lt_box:hidden').length===0){
            $(this).fadeOut(800);          
        }
        
         
        
        
    });
    
    
});