<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mine.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>我的发布</title>
</head>
<body>
    <?php
        session_start();
        $server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('login',$con);//选择数据库
        date_default_timezone_set("Asia/Shanghai");
        $theuser = "$_SESSION[username]";

        $id = $_GET['news'];
        $sql2 = "select * from content where username = '$theuser'";
        $result2 = mysql_query($sql2);
        $row2 = mysql_fetch_array($result2);
        $thename = $row2['username'];

        if($id){
            $sql = "select * from regcheck where username = '$thename' ";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
        }

        ?>
    <div class="person_img">
        <img src="images/userback/<?php echo $row['background']; ?>">
    </div>

    <div class="mine_top1" style="display: block;">
        <div class="minet_left1">
            <h1><?php echo $row['username']; ?></h1>
            <p><?php echo $row['synopsis']; ?></p>
        </div>
        <div class="minet_left2">
            <img src="images/photo/<?php
                $conn = mysql_connect("localhost","root","root");
                mysql_select_db('login',$conn);
                $sqll = "select * from regcheck where username = '$thename'";
                $resultt = mysql_query($sqll);
                $roww = mysql_fetch_array($resultt);
                echo $roww['photo']; ?>">
            <div class="person_writ">
                <p href="inform.php"><?php echo $row['username']; ?></p>
            </div>
        </div>
    </div>

    <?php
        date_default_timezone_set("Asia/Shanghai");
        $sql = "select * from content where username = '$thename' and type = '$id'";
        $result = mysql_query($sql);
        date_default_timezone_set("Asia/Shanghai");
        while($row = mysql_fetch_array($result))
        {
        ?> 


        <div class="person_his">
            <div class="history_time">
                <div class="time_left">
                <h3><?php  $sendt = $row['thetime']; echo substr($sendt,2,2); ?></h3>
                <p><?php  $sendt = $row['thetime']; echo substr($sendt,6,1); ?>月</p>
                </div>
                <div class="time_right">
                    <div class="time_img">
                        <a href="substance.php?id=<?php echo $row['id'];?>"><img src="images/user/<?php echo $row['image']; ?>"></a>
                        <div class="time_p">
                        <a href="substance.php?id=<?php echo $row['id'];?>"><?php echo $row['content']; ?></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

</body>
</html>