$(function () {

    //$('.lo_img img').attr({
    //    src:'img/sub1_4/address-1.png'
    //});



    $('.lo_wrap .lo_box').click(function () {

        //      console.log('check');
        
        var lo_idx = $(this).index();
        
        
        
        $(this).addClass('on').siblings().removeClass('on');

//        $(this).find('.lo_address').find('img').attr({
//            src: 'img/sub1_4/address-1.png'
//        });
//            
//        $(this).siblings().find('.lo_address').find('img').attr({
//            src: 'img/sub1_4/address.png'
//        });
        
        
        $(this).find('.address_img').attr({
            src: 'img/sub1_4/address-1.png'
        });
        
        $(this).siblings().find('.address_img').attr({
            src: 'img/sub1_4/address.png'
        });
        
        
        
        $(this).find('.tel_img').attr({
            src: 'img/sub1_4/tel-1.png'
        });
        
        $(this).siblings().find('.tel_img').attr({
            src: 'img/sub1_4/tel.png'
        });
        
        $(this).find('.fax_img').attr({
            src: 'img/sub1_4/fax-1.png'
        });
        
        $(this).siblings().find('.fax_img').attr({
            src: 'img/sub1_4/fax.png'
        });
        
        
        
        
//        $(this).find('.lo_tel').find('img').attr({
//            src: 'img/sub1_4/tel-1.png'
//        });
//
//        $(this).siblings().find('.lo_tel').find('img').attr({
//            src: 'img/sub1_4/tel.png'
//        });
//
//        $(this).find('.lo_fax').find('img').attr({
//            src: 'img/sub1_4/fax-1.png'
//        });
//
//        $(this).siblings().find('.lo_fax').find('img').attr({
//            src: 'img/sub1_4/fax.png'
//        });
        
        
        if(lo_idx===0)
            {
                $('.lo_map>iframe').attr({
                    src : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.057038253873!2d126.96641931564757!3d37.55371993261909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2644b4c0dc9%3A0x3a5629865fd7a830!2z7ISc7Jq47Yq567OE7IucIOyaqeyCsOq1rCDssq3tjIzrj5kg7LKt7YyM66GcIDM4Mw!5e0!3m2!1sko!2skr!4v1626418250998!5m2!1sko!2skr'
                });
            }
        else if(lo_idx===1)
        {
            $('.lo_map>iframe').attr({
                    src : 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25516.087847760988!2d126.779477!3d36.925955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357afd54eae04289%3A0xf7fdaa6c87dc7a9!2z7Lap7LKt64Ko64-EIOuLueynhOyLnCDshqHslYXsnY0g67O17Jq0Meq4uCAzMA!5e0!3m2!1sko!2skr!4v1626428386387!5m2!1sko!2skr'
                });
        }
        else{
            $('.lo_map>iframe').attr({
                    src : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3727416293173!2d126.90864971564727!3d37.52270983439384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9ee1e0a30b1b%3A0xf36ce65be5561457!2z6rOg7LSM67mM65Sp!5e0!3m2!1sko!2skr!4v1626418376557!5m2!1sko!2skr'
                });
        }
        
        
    });



}); //jQuery
