var menu_setinter;

$(function () {

    var menu_pos=0;

    menu_setinter = setInterval(menu_move,20);
    
    
    function menu_move(){
        menu_pos++;
        
        var fm = $('.menu_view .menu_box').first().width();
        
        if(menu_pos>fm)
        {
            $('.menu_view').append($('.menu_view .menu_box').first()).css({
                left:0
            });
                      
            menu_pos=0;
        }
        else{
            $('.menu_view').css({
                left:-menu_pos+'px'
            });
            
        }
        
        
    } //menu_move()
    
    
    $('.menu_view').hover(
        function(){
            clearInterval(menu_setinter);
//            console.log('over');
        },
        function(){
            menu_setinter = setInterval(menu_move,20);
            
//            console.log('out');
        }
    
    );
    
    

}); //jQuery
