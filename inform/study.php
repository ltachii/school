<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script type="text/javascript" src="js/myjs.js"></script>
<title>找人学</title>
</head>
<body>
	<div class="home_top" style="background: #f4f5f9;">
        <div class="top_input" style="left: -40px; " >
            <img src="images/search2.jpg" />
            <input type="search" name="word"  style="background: #ffffff;" onclick="location.href='search.php';" />
            <input type="submit" name="thebut"  value="搜索" style="background: #f4f5f9; width: 90px; position: absolute; top: 0; right: -100px; text-indent: 0.2em;" />
        </div>
    </div>

    <div style="width: 100%; height: 200px;">
    </div>

    <?php
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('login',$con);//选择数据库
                $sql = "select * from content where type = 'study'";
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
</body>
</html>