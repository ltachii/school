<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mine.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>我的</title>
</head>
<body>
    <?php 
        session_start();
        header("Content-Type: text/html; charset=utf8");
        if(isset($_SESSION["code"])){
            $server="localhost";//主机
            $db_username="root";//数据库用户名
            $db_password="root";//数据库密码
            $con = mysql_connect("localhost","root","root");//链接数据库
            mysql_select_db('login',$con);
            $theuser = "$_SESSION[username]";
            $sql = "select * from regcheck where username = '$theuser'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
        }
        else
        {
            echo "<script>alert('请先登录！');</script>";
            echo "<meta http-equiv=refresh content='0; url=login.php'>";
        }
    ?>
     <div class="mine_top1" id="hidduser">
                <div class="minet_left1">
                <h1><?php echo $row['username']; ?></h1>
                <p><?php echo $row['synopsis']; ?></p>
                </div>
                <div class="minet_left2">
                    <img src="images/photo/<?php echo $row['photo']; ?>">
                </div>
    </div>

    <?php
        $sql = "select * from content where username = '$theuser'";
        $result = mysql_query($sql);
        date_default_timezone_set("Asia/Shanghai");
        $row = mysql_fetch_array($result);
    ?> 
	<div class="mine_in">
		<div class="minti_all">
            <a href="person.php?id=<?php echo $row['id']; ?>"><img src="images/send.jpg"></a>
            <a href="person.php?id=<?php echo $row['id']; ?>">我的发布</a>
        </div>
		<div class="minti_all">
			<a href="<?php $var = "second"; echo "isend.php?news=".$var ?>"><img src="images/put.jpg"></a>
			<a href="<?php $var = "second"; echo "isend.php?news=".$var ?>">我的二手</a>
		</div>
		<div class="minti_all">
			<a href="<?php $var = "job"; echo "isend.php?news=".$var ?>"><img src="images/load.jpg"></a>
			<a href="<?php $var = "job"; echo "isend.php?news=".$var ?>">我的兼职</a>
		</div>
        <div class="minti_all">
            <a href="<?php $var = "school"; echo "isend.php?news=".$var ?>"><img src="images/think.jpg"></a>
            <a href="<?php $var = "school"; echo "isend.php?news=".$var ?>">我的校园</a>
        </div>
        <div class="minti_all">
            <a href="<?php $var = "study"; echo "isend.php?news=".$var ?>"><img src="images/money.jpg"></a>
            <a href="<?php $var = "study"; echo "isend.php?news=".$var ?>">我的找人学</a>
        </div>
		<div class="minti_all">
			<a href="collect.php?id=<?php echo $row['id']; ?>"><img src="images/favorite.jpg"></a>
			<a href="collect.php?id=<?php echo $row['id']; ?>">我的收藏</a>
		</div>
	</div>
	<div class="minti_all">
			<a href="information.php"><img src="images/set.jpg"></a>
			<a href="information.php">修改资料</a>
	</div>
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
            <a href="job.php"><img src="images/bottom5.jpg"></a>
            <p>兼职</p>
        </div>
        <div class="bott_but">
            <a href="mine.php"><img src="images/bottom8.jpg"></a>
            <p>我的</p>
        </div>
    </div>

    <!--发布界面-->

    <div class="home_send" id="send">
        <div class="send_img">
            <div class="send_top">
                <a href="#"><img src="images/school.jpg"></a>
                <a href="#"><img src="images/second.jpg"></a>
                <a href="#"><img src="images/jobtime.jpg"></a>
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