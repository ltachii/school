<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>兼职</title>
</head>
<body>
	<div class="second_top">
		<div class="secondt_left">
			<h1>校园兼职</h1>
			<p>你要的兼职都在这</p>
		</div>
		<div class="secondt_right">
			<a href="sendput.php">+</a>
			<a href="search.php"><img src="images/sear.jpg"></a>
		</div>
	</div>

	<?php
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('login',$con);//选择数据库
                $sql = "select * from content where type = 'job'";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?> 
                    <div class="content_per1">
                        <div class="content_user">
                            <div class="usre_img">
                                <div class="user_pho">
                                    <a href="person.php?id=<?php echo $row['id']; ?>"><img src="images/photo/<?php
                                            $conn = mysql_connect("localhost","root","root");
                                            mysql_select_db('login',$conn);
                                            $sqll = "select * from regcheck where username = '$row[username]'";
                                            $resultt = mysql_query($sqll);
                                            $roww = mysql_fetch_array($resultt);
                                            echo $roww['photo']; ?>"></a>
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
                        <div class="content_tell" onclick="location.href='substance.php';">
                            <div class="content_pass1">
                                <p style="margin: 30px 0 30px 0;"><?php echo $row['content']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php  
            }
            ?>

	 <!--底部按钮-->

    <div class="home_bott">
        <div class="bott_but">
            <a href="home.php"><img src="images/bottom1.jpg"></a>
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
            <a href="job.php"><img src="images/bottom6.jpg"></a>
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