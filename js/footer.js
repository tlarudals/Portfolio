$(function () {    
    
    $('.agreement').click(function(e){
        e.preventDefault();
        
        window.open("/sub/agreement.html", "popup", "width=1200, height=800");
        
    });
    
    $('.privacy').click(function(e){
        e.preventDefault();
        
        window.open("/sub/privacy.html", "popup", "width=1200, height=800");
        
    });
    
    $('.email_refusal').click(function(e){
        e.preventDefault();
        
        window.open("/sub/email_refusal.html", "popup", "width=1000, height=500");
        
    });
    
    
    
    
    //footer familysite
    var site_clk = 0; //fmaily site 클릭
    var clk_check = 0; //광클방지
    
   
    
    $('.no_site').click(function(e){        
        e.preventDefault();        
    });
    
    
    //사이트 이동
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
