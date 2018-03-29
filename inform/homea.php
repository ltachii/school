<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>校园生活</title>
</head>
<body>

    <!--顶部搜索框-->

    <div class="home_top">
        <div class="top_input">
            <img src="images/search.jpg" />
            <input type="search" name="word"   onclick="location.href='search.php';" />
        </div>
    </div>

    <!--banner轮播-->
	
    <div class="banner">
	    <ul class="img">
    	    <li><a href="#"><img src="images/1.jpg"></a></li>
            <li><a href="#"><img src="images/2.jpg"></a></li>
            <li><a href="#"><img src="images/3.jpg"></a></li>
            <li><a href="#"><img src="images/4.jpg"></a></li>
        </ul>  
		
        <ul class="num">    	
        </ul>
		
        <div class="btn btn_l">&lt;</div>
        <div class="btn btn_r">&gt;</div>
    </div>

    <!--中部分类模块-->

    <div class="home_all">
        <div class="all_one">
            <p>买闲置</p>
            <a href="second.php"><img src="images/free.jpg"></a>
        </div>
        <div class="all_two">
            <p>逛校园</p>
            <a href="school.php"><img src="images/see.jpg"></a>
        </div>
        <div class="all_three">
            <p>找兼职</p>
            <a href="job.php"><img src="images/job.jpg"></a>
        </div>
        <div class="all_four">
            <p>找人学</p>
            <a href="study.php"><img src="images/study.jpg"></a>
        </div>
    </div>

    <!--内容部分-->

    <div class="home_content">
        <div class="content_top">
            <div class="ctop_p">
                <div class="ctop_yel1">
                    <a href="home.php">新鲜的</a>
                </div>
            </div>
            <div class="ctop_p">
                <div class="ctop_yelt1" >
                    <a href="homea.php" >热门的</a>
                </div>
            </div> 
        </div>
        <?php
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('login',$con);//选择数据库
                $sql = "select * from content order by seenum desc";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?> 
                    <div class="content_per">
                        <div class="content_user">
                            <div class="usre_img">
                                <div class="user_pho">
                                    <a href="person.php?id=<?php echo $row['id']; ?>"><img src="images/photo/<?php
                                            $conn = mysql_connect("localhost","root","root");
                                            mysql_select_db('login',$conn);
                                            $sqll = "select * from regcheck where username = '$row[username]'";
                                            $resultt = mysql_query($sqll);
                                            $roww = mysql_fetch_array($resultt);
                                            echo $roww['photo']; ?>" /></a>
                                </div>
                                <div class="user_name">
                                    <p class="name_blo"><?php echo $row['username']; ?></p>
                                    <img src="images/time.jpg">
                                    <p class="name_time">
                                    <?php
                                        $sendt = $row['thetime'];
                                        $time = time()-strtotime($sendt);
                                        $yourday = (int)($time/(3600*24));
                                        if($yourday<=1){
                                            echo "刚刚来过";
                                        }else{
                                            echo $yourday."天前来过";  
                                        }
                                    ?></p>
                                </div>
                            </div>
                            <div class="user_num">
                                <p>浏览量：<?php echo $row['seenum']; ?>次</p>
                            </div>
                        </div>
                        <div class="content_image">
                            <a href="substance.php?id=<?php echo $row['id'];?>"><img src="images/user/<?php echo $row['image']; ?>" class="content_imgspa1"></a>
                            <a href="substance.php?id=<?php echo $row['id'];?>"><img src="images/user/<?php echo $row['image1']; ?>" class="content_imgspa2"></a> 
                            <a href="substance.php?id=<?php echo $row['id'];?>"><img src="images/user/<?php echo $row['image2']; ?>" class="content_imgspa3"></a>  
                        </div>
                        <div class="content_tell" onclick="location.href='substance.php?id=<?php echo $row['id'];?>';">
                            <div class="content_pass">
                                <p><?php echo $row['content']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php  
            }
            ?>

     

    <!--底部按钮-->

    <div class="home_bott">
        <div class="bott_but">
            <a href="#"><img src="images/bottom2.jpg"></a>
            <p>校园</p>
        </div>
        <div class="bott_but">
            <a href="second.php"><img src="images/bottom3.jpg"></a>
            <p>二手</p>
        </div>
        <div class="bott_but" onclick="comeDiv()">
            <div class="bott_circle">
                <a href="#">+</a>
            </div>
            <div class="bott_in">
                <p>发布</p>
            </div>
        </div>
        <div class="bott_but">
            <a href="job.php"><img src="images/bottom5.jpg"></a>
            <p>兼职</p>
        </div>
        <div class="bott_but">
            <a href="mine.php"><img src="images/bottom7.jpg"></a>
            <p>我的</p>
        </div>
    </div>

    <!--发布界面-->

    <div class="home_send" id="send">
        <div class="send_img">
            <div class="send_top">
                <a href="sendput.php"><img src="images/school.jpg"></a>
                <a href="sendput.php"><img src="images/second.jpg"></a>
                <a href="sendput.php"><img src="images/jobtime.jpg"></a>
            </div>
            <div class="send_pass">
                <p>校园</p>
                <p>二手</p>
                <p>兼职</p>
            </div>
            <div class="send_wro">
                <div class="wor_pass">
                    <p id="wrong" onclick="comeDiv()">×</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>