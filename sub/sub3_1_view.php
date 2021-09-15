<?php
    include("../header.php");
?>

<?
    $no = $_GET['no'];
    $sql = "SELECT * from board where no=$no";
    $result = mysqli_query($con, $sql);
    $info = mysqli_fetch_array($result);


//    $sql = "SELECT * FROM board WHERE `no`>$no ORDER BY `no` ASC LIMIT 1";
     $sql = "SELECT * FROM board WHERE `no`>$no AND (title LIKE '%{$_GET['search']}%' OR body LIKE '%{$_GET['search']}%') ORDER BY `no` ASC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $pre = mysqli_fetch_array($result);

//    $sql = "SELECT * FROM board WHERE `no`<$no ORDER BY `no` DESC LIMIT 1";
     $sql = "SELECT * FROM board WHERE `no`<$no AND (title LIKE '%{$_GET['search']}%' OR body LIKE '%{$_GET['search']}%') ORDER BY `no` DESC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $next = mysqli_fetch_array($result);


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


    <article class="news_view">
        <div class="view_inner">
            <p class="view_date">작성일자 <span><?=$info['day']?></span></p>
            <h2 class="view_title"><?=$info['title']?></h2>

            <div class="view_wrap">
                <div class="imgbox">
<!--                    <img src="../sub/img/sub3_1/needs.jpg" alt="매출액 이미지">-->
                       <?
                        $imgpath = $info['imgpath'];
                        $imgalt = $info['alt'];
                
                        echo "<img src='{$imgpath}' alt='{$imgalt}'>"                        
                        ?>
                </div>

                <p class="content"><?=$info['body']?></p>
            </div>

            <div class="list_grp">
                <a href="sub3_1.php" class="list_btn">목록</a>
            </div>


            <div class="move">
                <div class="prev_con clearfix">
                    <p>이전글</p>
                    
                    <?if($pre['title']){?>
                        <a href="?no=<?=$pre['no']?>&search=<?=$_GET['search']?>">
                            <?=$pre['title']?>
                        </a>
                        <?}else{?>
                        <p class="pre_view">이전 게시물이 없습니다.</p>
                        <?}?>
                    
<!--                    <a href="#" class="pre_view">Delivers 서비스 이용 약관 개정 안내</a>-->
                </div>

                <div class="next_con clearfix">
                    <p>다음글</p>
                    <?if($next['title']){?>
                        <a href="?no=<?=$next['no']?>&search=<?=$_GET['search']?>">
                            <?=$next['title']?>
                        </a>
                        <?}else{?>
                        <p class="next_view">다음 게시물이 없습니다.</p>
                        <?}?>
                    
<!--                    <a href="#" class="next_view">개인정보 처리방침 개정 안내</a>-->
                </div>

            </div>


        </div>





    </article>





</section>

<?php
    include("../footer.php");   
?>
