<?php
    include("header.php");
?>

<?
    $sql = "SELECT * from board order by no desc LIMIT 4";    
    $result = mysqli_query($con, $sql);

    

?>


<main id="main_h">
    <div class="main_view">

        <ul class="main_gallery clearfix">
            <li data-main="0" class="main1">

                <div class="view_inner">
                    <h2>No.1<br>
                        Health Care<br>
                        Leader<br>
                    </h2>
                    <p>당신의 더 좋은 삶을 위한 좋은 선택</p>
                </div>
            </li>

            <li data-main="1" class="main2">
                <div class="view_inner">
                    <h2>HACCP, GMP 인증
                    </h2>
                    <p>고객에게 믿음을 드리는 엄격한 품질관리<br>
                        안전한 제조공정, 제품의 생산을 통해<br>
                        고객의 건강과 행복을 최우선으로 생각합니다.</p>
                </div>

            </li>

            <li data-main="2" class="main3">
                <div class="view_inner">
                    <h2>Better Lifre through<br>
                        Better Medicine
                    </h2>
                    <p>종근단건강이 건강한 삶과<br>
                        행복한 미래를 위해 노력합니다</p>
                </div>

            </li>

        </ul>

        <ul class="main_btngrp clearfix">
            <li class="on">●</li>
            <li>●</li>
            <li>●</li>

        </ul>


    </div>
</main>


<section>


    <article class="health">

        <div class="health_inner">
            <h2>Healthcare 대표기업 <br> 종근당건강</h2>

            <div class="health_wrap clearfix">
                <div class="health_box">
                    <div><img src="img/main/icon1.png" alt="트로피 이미지"></div>
                    <p class="care_title">No.1</p>
                    <p class="care_explain">구매율,섭취율 <br>국내 1위</p>
                </div>

                <div class="health_box">
                    <div><img src="img/main/icon2.png" alt="통 이미지"></div>
                    <p class="care_title">1초</p>
                    <p class="care_explain">1초에 1통씩 <br>팔리는 락토핏</p>
                </div>

                <div class="health_box">
                    <div><img src="img/main/icon3.png" alt="그래프 이미지"></div>
                    <p class="care_title">4900억</p>
                    <p class="care_explain">2020년 매출기준</p>
                </div>

            </div>
        </div>
    </article>


    <article class="best_wrap" id="m_page1">


        <div class="best_inner">
            <p>많은 소비자가 믿고 찾는 <br>
                종근당건강의 <b>베스트제품</b>
            </p>

            <div class="best_pd_list">
                <div class="bbtn_wrap clearfix">
                    <div class="bbtn bprev"><a href="#"><span>이전버튼</span></a></div>
                    <div class="bbtn bnext"><a href="#"><span>다음버튼</span></a></div>

                </div>

                <div class="best_pd_slide clearfix">

                    <div class="best_pd_wrap on clearfix">
                        <div class="best_pd">
                            <p class="pd_num">01</p>
                            <p class="pd_ex">나에게 꼭 맞는 <br>
                                프로바이오틱스</p>
                            <p class="pd_name">락토핏</p>
                            <a href="sub/sub2_1_lactofit.php" class="best_more">제품 보러가기</a>
                        </div>
                        <div class="pd">
                            <img src="img/main/product_1.png" alt="나에게 맞는 프로바이오틱스 락토핏">
                        </div>
                    </div>

                    <div class="best_pd_wrap clearfix">
                        <div class="best_pd">
                            <p class="pd_num">02</p>
                            <p class="pd_ex">건강한 혈행을 위한<br>
                                1등 오메가</p>
                            <p class="pd_name">프로메가</p>
                            <a href="sub/sub2_1_promega.php" class="best_more">제품 보러가기</a>
                        </div>
                        <div class="pd">
                            <img src="img/main/product_2.png" alt="혈행건강 프로메가">
                        </div>
                    </div>

                    <div class="best_pd_wrap clearfix">
                        <div class="best_pd">
                            <p class="pd_num">03</p>
                            <p class="pd_ex">눈 나이 먹지 말고,<br>
                                아이클리어 먹자!</p>
                            <p class="pd_name">아이클리어</p>
                            <a href="sub/sub2_1_eyeclear.php" class="best_more">제품 보러가기</a>
                        </div>
                        <div class="pd">
                            <img src="img/main/product_3.png" alt="아이클리어">
                        </div>
                    </div>


                </div>

            </div>

        </div>


    </article>



    <article class="brand" id="m_page2">
        <div class="brand_inner">
            <h2>브랜드관</h2>

            <div class="brand_pd_list clearfix">

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_lactofit.php"><img src="img/main/lacto.png" alt="락토핏"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_lactofit.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">락토핏</h3>
                    <p class="brand_ex">나에게 꼭 맞는 유산균</p>
                </div>


                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_promega.php"><img src="img/main/promega.png" alt="프로메가"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_promega.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>

                        </div>
                    </div>

                    <h3 class="brand_title">프로메가</h3>
                    <p class="brand_ex">건강한 혈액순환을 위한<br>1등 오메가</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_eyeclear.php"><img src="img/main/eyeclear.png" alt="아이클리어"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_eyeclear.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">아이클리어</h3>
                    <p class="brand_ex">눈 나이 먹지말고,<br>아이클리어 먹자!</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_itall.php"><img src="img/main/itall.png" alt="아이커"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_itall.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">아이커</h3>
                    <p class="brand_ex">소중한 우리아이<br>아이 키엔, 아이커!</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_allcut.php"><img src="img/main/allcut.png" alt="올컷다이어트"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_allcut.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">올컷다이어트</h3>
                    <p class="brand_ex">사이즈는 빼고! 자신감은 더하고!<br>올컷 다이어트</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_allatme.php"><img src="img/main/allatme.png" alt="올앳미"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_allatme.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">올앳미</h3>
                    <p class="brand_ex">나의 아름다움을 위한 모든것</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_earthtous.php"><img src="img/main/ustous.png" alt="어스투어스"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_earthtous.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">어스투어스</h3>
                    <p class="brand_ex">대지의 건강함을 더하다</p>
                </div>

                <div class="brand_pd_wrap">
                    <div class="brand_img_wrap">
                        <a href="sub/sub2_1_realman.php"><img src="img/main/realman.png" alt="리얼맨"></a>

                        <div class="brand_over">
                            <a href="sub/sub2_1_realman.php">
                                <img src="img/main/plus_btn.png" alt="더하기 아이콘">
                                <p class="brand_txt">상품보기</p>
                            </a>
                        </div>
                    </div>

                    <h3 class="brand_title">리얼맨</h3>
                    <p class="brand_ex">중년 남성들의 품격을 세우다</p>
                </div>


            </div>




            <a class="brand_btn" href="sub/sub2_1.php">브랜드관</a>




        </div>

    </article>



    <article class="contribute" id="m_page3">
        <div class="contribute_inner">
            <p>사회 공헌 활동을 실천하는 <b>종근당건강</b></p>
            <p>작은 사랑의 실천을 통해 함께 사는 세상 행복한 내일을 만들고자 합니다.</p>

        </div>


        <div class="contribute_slide">

            <div class="cbtn cprev"><span>이전버튼</span></div>
            <div class="cbtn cnext"><span>다음버튼</span></div>


            <div class="contribute_gallery">
                <div data-seq="0" class="contribute_wrap con_num1">
                    <p class="contribute_title">건강식체험</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute1.png" alt="건강식체험"></a></div>
                </div>

                <div data-seq="1" class="contribute_wrap con_num2">
                    <p class="contribute_title">두근두근 심프로 캠페인</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute2.png" alt="두근두근 심프로 캠페인"></a></div>
                </div>

                <div data-seq="2" class="contribute_wrap con_num3">
                    <p class="contribute_title">서포터즈 발대식 개최</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute3.png" alt="서포터즈 발대식 개최"></a></div>
                </div>

                <div data-seq="3" class="contribute_wrap con_num4">
                    <p class="contribute_title">사랑의 연탄 나눔</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute4.png" alt="사랑의 연탄 나눔"></a></div>
                </div>

                <div data-seq="4" class="contribute_wrap con_num5">
                    <p class="contribute_title">오페라 희망 이야기</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute5.png" alt="오페라 희망 이야기"></a></div>
                </div>

                <div data-seq="5" class="contribute_wrap con_num6">
                    <p class="contribute_title">플라워 챌린지</p>
                    <div class="contribute_imgbox"><a href="sub/sub3_2.php"><img src="img/main/contribute6.png" alt="플라워 챌린지"></a></div>
                </div>


            </div>

            <ul class="contribute_btngrp clearfix">
                <li class="on">●</li>
                <li>●</li>
                <li>●</li>
                <li>●</li>
                <li>●</li>
                <li>●</li>
            </ul>
        </div>



    </article>


    <article class="news" id="m_page4">

        <div class="news_subtitle">
            <h2><span>NEWS</span></h2>
        </div>
        <div class="news_inner">


            <div class="news_wrap clearfix">
                <div class="news_notice">
                    <div><img src="img/main/new_icon.png" alt="새싹 아이콘"></div>
                    <p>종근당건강의 새로운 <br>소식을 알려드립니다</p>

                    <div class="news_more_box"><a class="news_more_btn" href="/sub/sub3_1.php">MORE</a></div>
                </div>

                <div class="news_list">
                
            <?
                while($info = mysqli_fetch_array($result)){                     
             
            ?>                   
                   
                    <div class="news_box">
                        <a href="/sub/sub3_1_view.php?no=<?=$info['no']?>">
                   
                        <p class="news_title"><?=$info['title']?></p>
                        </a>
                        <p class="news_date"><?=$info['day']?></p>
                    </div>

            <?}?>

                </div>

            </div>
        </div>
    </article>

    <div id="badge">
        <span class="point"></span>
        <div class="close">X</div>
        <div class="box">
            <img src="img/main/QRCodeImg.jpg" alt="QR code">
            <p class="title">모바일 웹</p>
            <p class="des">QR코드를 스캔하세요.</p>
        </div>
    </div>              


</section>


<?php
    include("footer.php");   
?>
