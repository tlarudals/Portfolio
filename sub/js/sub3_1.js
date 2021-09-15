$(function(){
    
    
//    alert('3_1 check');
    
   

    

    $('.news_container').hide().slice(0,2).show();

    
    
    
    $('.news_more_btn').click(function(e){
        
        e.preventDefault();
        
        $('.news_container:hidden').slice(0,1).slideDown();
        var btn_sc = $('.news_more_btn').offset().top-200;
        
        if($('.news_container:hidden').length===0){
            $(this).fadeOut();            
        }
        
        $('html, body').animate({
            scrollTop:btn_sc
            
        },1500);
            
        
    });
    
    
    if($('.news_container:hidden').length===0){
    $('.news_more_btn').css({
        display:'none'
     });}
    
    
    
});