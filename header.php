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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if lt IE 9]>          
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>       
<![endif]-->
    <title>종근당 건강</title>

    <!-- [if It IE 9]
        <script src="js/respond.js"></script>
<[endif] -->

    <!--favicon-->
    <!--pc용/ico-->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">

    <!--안드로이드/png-->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">

    <!--아이폰/png,jpg-->
    <link rel="apple-touch-icon" href="/img/favicon/favicon.ico">



    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans+KR&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">





    <!--
    <link rel="stylesheet" href="css/sub2_1_brand_allatme_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_allcut_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_earthtous_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_eyeclear_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_itall_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_lactofit_detail.css">
    <link rel="stylesheet" href="css/sub2_1_brand_promega_detail.css">
    <link rel="stylesheet" href="css/sub2_1_realman_detail.css">
-->

    <?
        if($pn=='sub2_1_allatme_3270_detail' || $pn=='sub2_1_allatme_lightly_detail' || $pn=='sub2_1_allatme_moist_detail' || $pn=='sub2_1_allatme_thin_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_allatme_detail.css">';
            
        }
        elseif($pn=='sub2_1_allcut_beauty_detail' || $pn=='sub2_1_allcut_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_allcut_detail.css">';
        }            
        elseif($pn=='sub2_1_earthtous_krill_detail' || $pn=='sub2_1_earthtous_oil_detail' || $pn=='sub2_1_earthtous_oilcap_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_earthtous_detail.css">';
        }
        elseif($pn=='sub2_1_eyeclear_detail' || $pn=='sub2_1_eyeclear_jiajantin_detail' || $pn=='sub2_1_eyeclear_lutain_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_eyeclear_detail.css">';
        }
        elseif($pn=='sub2_1_itall_detail' || $pn=='sub2_1_itall_ibignote_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_itall_detail.css">';
        }
        elseif($pn=='sub2_1_lactofit_bebe_detail' || $pn=='sub2_1_lactofit_core_detail' || $pn=='sub2_1_lactofit_gold_detail' || $pn=='sub2_1_lactofit_kids_detail' || $pn=='sub2_1_lactofit_moms_detail' || $pn=='sub2_1_lactofit_pass_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_lactofit_detail.css">';
        }
        elseif($pn=='sub2_1_promega_alt_dual_detail' || $pn=='sub2_1_promega_dual_detail' || $pn=='sub2_1_promega_kids_detail' || $pn=='sub2_1_promega_omega3_detail' || $pn=='sub2_1_promega_omega3_triple_detail' || $pn=='sub2_1_promega_vegetable_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_brand_promega_detail.css">';
        }
        elseif($pn=='sub2_1_realman_detail'){
            echo '<link rel="stylesheet" href="css/sub2_1_realman_detail.css">';
        }
    
    
    ?>



    <link rel="stylesheet" href="css/<?=$pn?>.css">




    <script src="/js/jquery-1.7.2.min.js"></script>
    <script src="/js/jquery-ui-1.12.1.min.js"></script>
    <script src="/js/jquery.rotate.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>

    <script src="/sub/js/sub2_1_brands.js"></script>
    <script src="js/<?=$pn?>.js"></script>

    <?
        if($pn=='sub2_1_lactofit' || $pn=='sub2_1_promega'){
            echo '<script src="/sub/js/sub2_1_brands_flow.js"></script>';
            
        }
    ?>




</head>

<body>

    <header>
        <div class="header_inner clearfix">
            <h1 class="logo"><a href="/index.php"><img class="down" src="/img/main/logo.png" alt="종근당로고">
                    <img class="up" src="/img/main/top_logo.png" alt="종근당로고2">
                </a></h1>

            <nav>
                <ul class="menu">
                    <li><a href="/sub/sub1_1.php">소개</a></li>
                    <li><a href="/sub/sub2_1.php">브랜드관</a></li>
                    <li><a href="/sub/sub3_1.php">홍보센터</a></li>
                    <li><a href="/sub/sub4_1.php">채용정보</a></li>
                </ul>

            </nav>
        </div>
        <div class="smenu">
            <div class="smenu_inner">
                <div class="smenu_wrap">
                    <ul>
                        <li><a href="/sub/sub1_1.php">회사소개</a></li>
                        <li><a href="/sub/sub1_2.php">경영이념</a></li>
                        <li><a href="/sub/sub1_3.php">회사연혁</a></li>
                        <li><a href="/sub/sub1_4.php">오시는길</a></li>
                    </ul>
                    <ul>
                        <li><a href="/sub/sub2_1.php">제품안내</a></li>
                    </ul>

                    <ul>
                        <li><a href="/sub/sub3_1.php">뉴스</a></li>
                        <li><a href="/sub/sub3_2.php">사회공헌활동</a></li>
                    </ul>

                    <ul>
                        <li><a href="/sub/sub4_1.php">인재상</a></li>
                        <li><a href="/sub/sub4_2.php">채용절차</a></li>
                        <li><a href="/sub/sub4_3.php">복지제도</a></li>
                    </ul>

                </div>
            </div>
        </div>



    </header>
