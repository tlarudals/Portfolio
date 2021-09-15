<?php
    include("../header.php");
?>

<?
    $sql = "SELECT * from board 
    where 
    title like '%".$_GET['search']."%' 
    or 
    body like '%".$_GET['search']."%' 
    order by no desc";
    
    $result = mysqli_query($con, $sql);

?>



<section>
    <article class="promotion">

        <div class="promotion_inner">
            <h2>홍보센터</h2>

            <p>최신 뉴스와 사회공헌활동을 전해 드립니다</p>
        </div>

    </article>



    <article class="sub_menu">
        <div class="sub_menu_inner clearfix">
            <div class="sub_menu_wrap">
                <div class="on">
                    <a href="sub3_1.php">NEWS</a>
                </div>

                <div>
                    <a href="sub3_2.php">사회공헌활동</a>
                </div>
            </div>
        </div>
    </article>


    <article class="news">
        <div class="news_inner">
            <h2>NEWS</h2>


            <form>
                <div class="searchform clearfix">
                    <div class="search_list">
                        <input type="text" name="search" placeholder="검색어를 입력해 주세요.">
                    </div>

                    <button>검색</button>

                </div>


            </form>


            <?
                while($info = mysqli_fetch_array($result)){
                     
                $imgpath = $info['imgpath'];
                $imgalt = $info['alt'];
            ?>


            <div class="news_container">
                <div class="news_img">
<!--                    <img src="../sub/img/sub3_1/needs.jpg" alt="매출액 이미지">-->
                   <?
                        echo "<img src='{$imgpath}' alt='{$imgalt}'>"                        
                     ?>
                </div>


                <div class="news_box">
                    <p class="news_date"><?=$info['day']?></p>
                    <a href="sub3_1_view.php?no=<?=$info['no']?>">
                        <p class="news_title"><?=$info['title']?></p>
                        <p class="news_txt"><?=$info['body']?></p>
                        <div class="news_arr">
                            <div><span>화살표</span></div>
                        </div>
                    </a>
                </div>

            </div>
            
            <?}?>



            <div class="news_more">
                <a href="#" class="news_more_btn">MORE +</a>

            </div>

        </div>



    </article>





</section>

<?php
    include("../footer.php");   
?>
