//sub1_4.js

$(function () {

    //    alert('sub1_4');


    $('.lo_btn_wrap p').click(function () {
        var lo_index = $(this).index();
//        console.log(lo_index);
        if (lo_index === 0) {
            $('.lo_map>iframe').attr({
                src: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.057038253873!2d126.96641931564757!3d37.55371993261909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2644b4c0dc9%3A0x3a5629865fd7a830!2z7ISc7Jq47Yq567OE7IucIOyaqeyCsOq1rCDssq3tjIzrj5kg7LKt7YyM66GcIDM4Mw!5e0!3m2!1sko!2skr!4v1626418250998!5m2!1sko!2skr'
            });

            $(this).addClass('on').siblings().removeClass('on');
            $('.address').text('◈ 주소 : 서울특별시 용산구 청파로 383, 종근당건강 빌딩 5~6층');
            $('.tel').text('◈ 전화번호 : 02-575-0100');
            $('.fax').text('◈ 팩스 : 02-312-4375');

        } else if (lo_index === 1) {
            $('.lo_map>iframe').attr({
                src: 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25516.087847760988!2d126.779477!3d36.925955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357afd54eae04289%3A0xf7fdaa6c87dc7a9!2z7Lap7LKt64Ko64-EIOuLueynhOyLnCDshqHslYXsnY0g67O17Jq0Meq4uCAzMA!5e0!3m2!1sko!2skr!4v1626428386387!5m2!1sko!2skr'
            });
            $(this).addClass('on').siblings().removeClass('on');

            $('.address').text('◈ 주소 : 충청남도 당진시 송악읍 복운1길 30');
            $('.tel').text('◈ 전화번호 : 041-357-6699');
            $('.fax').text('◈ 팩스 : 041-357-9474');

        } else {
            $('.lo_map>iframe').attr({
                src: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3727416293173!2d126.90864971564727!3d37.52270983439384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9ee1e0a30b1b%3A0xf36ce65be5561457!2z6rOg7LSM67mM65Sp!5e0!3m2!1sko!2skr!4v1626418376557!5m2!1sko!2skr'
            });
            $(this).addClass('on').siblings().removeClass('on');
            $('.address').text('◈ 주소 : 서울특별시 영등포구 버드나루로 47 고촌빌딩 5층');
            $('.tel').text('◈ 전화번호 : 02-6292-9251');
            $('.fax').text('◈ 팩스 : 02-6292-9266');


        }




    });



});
