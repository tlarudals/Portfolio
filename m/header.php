<?php
    include("act/db.php");
?>

<?php
    $pn = str_replace('.php','',end(explode("/",$_SERVER["SCRIPT_FILENAME"])));
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>종근당건강-모바일</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/m/css/header.css">
    <link rel="stylesheet" href="/m/css/footer.css">
    <link rel="stylesheet" href="/m/css/swiper.css">
    

    <?
       
       if( strpos($pn,'detail')!== false){
           echo '<link rel="stylesheet" href="css/sub2_1_brand_detail.css">';
       }
       else{     
        echo '<a href="'.$link_address.'">Link</a>';   
        echo '<link rel="stylesheet" href="css/'.$pn.'.css">';
       }

   ?>

    <script src="/m/js/jquery-1.7.2.min.js"></script>
    <script src="/m/js/jquery-ui-1.12.1.min.js"></script>
    <script src="/m/js/swiper.min.js"></script>
    <script src="/m/js/header.js"></script>
    <script src="/m/js/footer.js"></script>
    <script src="js/<?=$pn?>.js"></script>



</head>

<body>
    <header>
        <div class="header_inner">
            <div class="clearfix">
                <h1 class="logo"><a href="/m/index.php"><img src="/m/img/main/logo.png" alt="logo"></a></h1>

                <div class="menu_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="/m/sub/sub1_1.php">소개</a>
    
                    <ul class="sub_menu">
                        <li><a href="/m/sub/sub1_1.php">회사소개</a></li>
                        <li><a href="/m/sub/sub1_2.php">경영이념</a></li>
                        <li><a href="/m/sub/sub1_3.php">회사연혁</a></li>
                        <li><a href="/m/sub/sub1_4.php">오시는길</a></li>
                    </ul>

                </li>
                <li><a href="/m/sub/sub2_1.php">브랜드관</a>
                    <ul class="sub_menu">
                        <li><a href="/m/sub/sub2_1.php">제품안내</a></li>
                    </ul>
                </li>
                <li><a href="/m/sub/sub3_1.php">홍보센터</a>
                    <ul class="sub_menu">
                        <li><a href="/m/sub/sub3_1.php">뉴스</a></li>
                        <li><a href="/m/sub/sub3_2.php">사회공헌활동</a></li>
                    </ul>
                </li>
                <li><a href="/m/sub/sub4_1.php">채용정보</a>
                    <ul class="sub_menu">
                        <li><a href="/m/sub/sub4_1.php">인재상</a></li>
                        <li><a href="/m/sub/sub4_2.php">채용절차</a></li>
                        <li><a href="/m/sub/sub4_3.php">복지제도</a></li>
                    </ul>
                </li>
            </ul>

        </nav>


    </header>

