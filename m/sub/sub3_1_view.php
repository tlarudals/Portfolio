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
        <article class="news_list">
            <div class="news_list_inner">
                <div class="news_content">
                    <h2 class="title"><?=$info['title']?></h2>
                    <p class="date"><?=$info['day']?></p>

                    <div class="nl_img">
                    <?
                        $imgpath = $info['imgpath'];
                        $imgalt = $info['alt'];
                
                        echo "<img src='{$imgpath}' alt='{$imgalt}'>"                        
                    ?>
                    </div>

                    <p class="news_body">
                             <?=$info['body']?>
                    </p>
                </div>
                
                <div class="move_page">
                    <div class="pre clearfix">
                        <p class="pre_txt">이전</p>
                        
                        <?if($pre['title']){?>
                        <a class="pre_title" href="?no=<?=$pre['no']?>&search=<?=$_GET['search']?>">
                            <?=$pre['title']?>
                        </a>
                        <?}else{?>
                        <p class="pre_view">이전 게시물이 없습니다.</p>
                        <?}?>  
                    </div>
                    <div class="next clearfix">
                        <p class="next_txt">다음</p>
                        <?if($next['title']){?>
                        <a class="next_title" href="?no=<?=$next['no']?>&search=<?=$_GET['search']?>">
                            <?=$next['title']?>
                        </a>
                        <?}else{?>
                        <p class="next_view">다음 게시물이 없습니다.</p>
                        <?}?>
                    </div>
                </div>
                
                <div class="list_btn_wrap">
                    <a href="sub3_1.php" class="list_btn">목록</a>
                </div>
                

            </div>

        </article>

    </section>


    <?php
    include("../footer.php");   
?>