<?php
    include("header.php");
?>

<?
    $sql = "SELECT * from board order by no desc LIMIT 2";    
    $result = mysqli_query($con, $sql);    

?>


    <main>
        <div class="main_view">
            <ul class="main_gallery clearfix">
                <li data-main="0" class="main1">
                    <img src="img/main/m_main_1_2.jpg" alt="No.1 HealthCare Leader 당신의 더 좋은 삶을 위한 좋은 선택">

                    <div class="view_inner">
                        <h2>No.1<br>
                            Health Care<br>
                            Leader<br>
                        </h2>
                        <p>당신의 더 좋은 삶을 위한 좋은 선택</p>
                    </div>

                </li>

                <li data-main="1" class="main2">
                    <img src="img/main/m_main2_2.jpg" alt="HACCP, GMP 인증 고객에게 믿음을 드리는 엄격한 품질관리 안전한 제조공정, 제품의 생산을 통해 고객의 건강과 행복을 최우선으로 생각합니다">
                    <div class="view_inner">
                        <h2>HACCP, GMP 인증
                        </h2>
                        <p>고객에게 믿음을 드리는 엄격한 품질관리<br>
                            안전한 제조공정, 제품의 생산을 통해<br>
                            고객의 건강과 행복을 최우선으로 생각합니다.</p>
                    </div>

                </li>

                <li data-main="2" class="main3">
                    <img src="img/main/m_main3_2.jpg" alt="Better Life through Better Medicine 종근당건강이 건강한 삶과 행복한 미래를 위해 노력합니다">
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
                <div class="health_inner">
                    <h2>Healthcare 대표기업 <br> 종근당건강</h2>

                    <div class="health_wrap">
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

            </div>

        </article>


        <article class="best_wrap">

            <div class="swiper-container">
                <h2>베스트제품</h2>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="pd">
                            <img src="img/main/m_product1.png" alt="나에게 맞는 프로바이오틱스 락토핏">
                        </div>
                        <div class="best_pd">
                            <p class="pd_num">01</p>
                            <p class="pd_ex">나에게 꼭 맞는 <br>
                                프로바이오틱스</p>
                            <a href="sub/sub2_1_lactofit.php" class="best_more">제품 보러가기</a>
                        </div>


                    </div>

                    <div class="swiper-slide">

                        <div class="pd">
                            <img src="img/main/m_product2.png" alt="혈행건강 프로메가">
                        </div>
                        <div class="best_pd">
                            <p class="pd_num">02</p>
                            <p class="pd_ex">건강한 혈행을 위한<br>
                                1등 오메가</p>                          
                            <a href="sub/sub2_1_promega.php" class="best_more">제품 보러가기</a>
                        </div>

                    </div>


                    <div class="swiper-slide">

                        <div class="pd">
                            <img src="img/main/m_product3.png" alt="아이클리어">
                        </div>

                        <div class="best_pd">
                            <p class="pd_num">03</p>
                            <p class="pd_ex">눈 나이 먹지 말고,<br>
                                아이클리어 먹자!</p>
                           
                            <a href="sub/sub2_1_eyeclear.php" class="best_more">제품 보러가기</a>
                        </div>

                    </div>


                </div>

                <div class="swiper-pagination"></div>
            </div>


        </article>


        <article class="brand">
            <div class="brand_inner">
                <h2>브랜드관</h2>


                <div class="pd_list clearfix">
                    <div class="pd_wrap">
                        <a href="sub/sub2_1_lactofit.php">
                            <div class="pd_img">
                                <img src="img/main/m_lacto.png" alt="락토핏">
                            </div>

                            <h2>락토핏</h2>
                            <p>나에게 꼭 맞는 유산균</p>
                        </a>
                    </div>


                    <div class="pd_wrap">
                        <a href="sub/sub2_1_promega.php">
                            <div class="pd_img">
                                <img src="img/main/m_promega.png" alt="프로메가">
                            </div>

                            <h2>프로메가</h2>
                            <p>건강한 혈액순환을 위한 <br>
                                1등 오메가
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_eyeclear.php">
                            <div class="pd_img">
                                <img src="img/main/m_eyeclear.png" alt="아이클리어">
                            </div>

                            <h2>아이클리어</h2>
                            <p>눈 나이 먹지말고,<br>아이클리어 먹자!
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_itall.php">
                            <div class="pd_img">
                                <img src="img/main/m_tall.png" alt="아이커">
                            </div>

                            <h2>아이커</h2>
                            <p>소중한 우리아이<br>아이 키엔, 아이커!
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_allcut.php">
                            <div class="pd_img">
                                <img src="img/main/m_allcut.png" alt="올컷다이어트">
                            </div>

                            <h2>올컷다이어트</h2>
                            <p>사이즈는 빼고! 자신감은 더하고! 올컷 다이어트
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_allatme.php">
                            <div class="pd_img">
                                <img src="img/main/m_allatme.png" alt="올앳미">
                            </div>

                            <h2>올앳미</h2>
                            <p>나의 아름다움을 위한 모든것
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_earthtous.php">
                            <div class="pd_img">
                                <img src="img/main/m_ustous.png" alt="어스투어스">
                            </div>

                            <h2>어스투어스</h2>
                            <p>대지의 건강함을 더하다
                            </p>
                        </a>
                    </div>

                    <div class="pd_wrap">
                        <a href="sub/sub2_1_realman.php">
                            <div class="pd_img">
                                <img src="img/main/m_realman.png" alt="리얼맨">
                            </div>

                            <h2>리얼맨</h2>
                            <p>중년 남성들의 품격을<br> 세우다
                            </p>
                        </a>
                    </div>


                </div>

                <a href="#" class="brand_btn">MORE</a>

            </div>

        </article>


        <article class="contribute">
            <div class="contribute_inner swiper-container">
                <h2>사회공헌활동</h2>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h3>서포터즈 발대식 개최</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute3.png" alt="서포터즈 발대식 개최"></a>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <h3>사랑의 연탄 나눔</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute4.png" alt="사랑의 연탄 나눔"></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>오페라 희망 이야기</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute5.png" alt="오페라 희망 이야기"></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>플라워 챌린지</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute6.png" alt="플라워 챌린지"></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>건강식체험</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute1.png" alt="건강식체험"></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>두근두근 심프로 캠페인</h3>

                        <div class="cb_img">
                            <a href="sub/sub3_2.php"><img src="img/main/contribute2.png" alt="두근두근 심프로 캠페인"></a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination con_pager"></div>

                <!--
                <div class="cbtn cprev"><a href="#"><span>이전버튼</span></a></div>
                <div class="cbtn cnext"><a href="#"><span>다음버튼</span></a></div>

                <ul class="cb_grp clearfix">
                    <li class="on">●</li>
                    <li>●</li>
                    <li>●</li>
                    <li>●</li>
                    <li>●</li>
                    <li>●</li>

                </ul>
-->


            </div>

        </article>



        <article class="news">
            <div class="news_inner">
                <h2>NEWS</h2>

                <?
                while($info = mysqli_fetch_array($result)){                     
                    $imgpath = $info['imgpath'];
                    $imgalt = $info['alt'];
                ?>  

                <div class="news_wrap">
                    <a href="/m/sub/sub3_1_view.php?no=<?=$info['no']?>">
                    <div class="news_img">
             
                        <?
                                echo "<img src='{$imgpath}' alt='{$imgalt}'>"                        
                             ?>
                    </div>
                    
                        <p class="news_title"><?=$info['title']?>↑</p>
                    </a>
                    <p class="news_date"><?=$info['day']?></p>

                </div>
                <?}?>

                <div class="news_btn_wrap">
                    <a href="sub/sub3_1.php" class="news_btn">뉴스 이동하기</a>
                </div>


            </div>

        </article>
    </section>

<?php
    include("footer.php");   
?>