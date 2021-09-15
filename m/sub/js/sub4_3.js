$(function(){
    
//    alert('4-3');
    
    var box1_sc = $('.box1').offset().top-200;
    var box2_sc = $('.box2').offset().top-200;
    var box3_sc = $('.box3').offset().top-200;
    var box4_sc = $('.box4').offset().top-200;
    var box5_sc = $('.box5').offset().top-200;
    var box6_sc = $('.box6').offset().top-200;
    var box7_sc = $('.box7').offset().top-200;
    var gap=30;

    
    
    $(window).scroll(function(){
        var sc_top = $(this).scrollTop();
//        console.log(sc_top);
        
        
        if(sc_top>box1_sc-gap && sc_top<box1_sc+gap)
        {
             $('.box1').addClass('on');
        }
        else if(sc_top>box2_sc-gap && sc_top<box2_sc+gap){
            $('.box2').addClass('on');
        }
         else if(sc_top>box3_sc-gap && sc_top<box3_sc+gap){
            $('.box3').addClass('on');
        }
         else if(sc_top>box4_sc-gap && sc_top<box4_sc+gap){
            $('.box4').addClass('on');
        }
         else if(sc_top>box5_sc-gap && sc_top<box5_sc+gap){
            $('.box5').addClass('on');
        }
         else if(sc_top>box6_sc-gap && sc_top<box6_sc+gap){
            $('.box6').addClass('on');
        }
         else if(sc_top>box7_sc-gap && sc_top<box7_sc+gap){
            $('.box7').addClass('on');
        }
        
        
    });
    
    
    
    
    
    
});