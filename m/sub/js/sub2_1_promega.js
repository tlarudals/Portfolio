//sub2_1_promega.js

$(function(){
    
//    alert('check');
    
    $('.pm_box').hide().slice(0,4).show();
    
    $('.pm_more_btn').click(function(e){
        
        e.preventDefault();
        
        $('.pm_box').slideDown();
        
        var ltbox_top =  $('.pm_box').offset().top;
        
        ltbox_top = ltbox_top+400;
        
        $('html,body').animate({
            scrollTop: ltbox_top
        });
       
        
        if($('.pm_box:hidden').length===0){
            $(this).fadeOut(800);          
        }
        
         
        
        
    });
    
    
});