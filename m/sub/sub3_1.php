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
        <article class="news">
            <div class="news_inner">
                <form class="clearfix">
                    <div class="searchform clearfix">
                        <div class="search_list">
                            <input type="text" name="search" placeholder="검색어를 입력해 주세요.">
                        </div>

                        <button>검색</button>

                    </div>


                </form>

                

                <div class="news_wrap">
                <?
                    while($info = mysqli_fetch_array($result)){
                        
                    $imgpath = $info['imgpath'];
                    $imgalt = $info['alt'];
                ?>


                    <div class="news_box">
                        <a href="sub3_1_view.php?no=<?=$info['no']?>">
                            <div class="news_img">
                            <?
                                echo "<img src='{$imgpath}' alt='{$imgalt}'>"                        
                             ?>
                            </div>

                            <h3 class="news_title"><?=$info['title']?></h3>
                        </a>
                        <p class="news_date"><?=$info['day']?></p>


                    </div>

                    <?}?>
                </div>

                <div class="news_btn_wrap">
                    <a href="#" class="news_btn">More</a>
                </div>

            </div>

        </article>


    </section>


    <?php
    include("../footer.php");   
?>