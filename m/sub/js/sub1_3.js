//sub1_3.js

$(function(){
//    alert('check');
    
    
    
    $('.history_sel a').click(function(e){
        e.preventDefault();
        
        var page = $(this).attr('href');
//        console.log(page);
        
        var page_top=$(page).offset().top;
//        console.log(page_top);
        $('html, body').animate({
            scrollTop: page_top
        });
        
//        $('.history_sel p').addClass('active').siblings().removeClass('active');
        $(this).parent().addClass('active').siblings().removeClass('active');
        
    });
    
    
});