<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>详情</title>
</head>
<body>
	<div class="sub_shear">
		<a href="#" id="zone" ><img src="images/share.jpg" /></a>
	</div>
    <script type="text/javascript">
         $("#zone").click(function(){  
                var p = {  
                    url:location.href,  
                    showcount:'1',    /*是否显示分享总数,显示：'1'，不显示：'0' */  
                    desc:'',    /*默认分享理由(可选)*/  
                    summary:'快来看看我的分享！',    /*分享摘要(可选)*/  
                    title:'',    /*分享标题(可选)*/  
                    site:'校园信息平台',    /*分享来源 如：腾讯网(可选)*/  
                    pics:'images/minefish.jpg', /*分享图片的路径(可选)*/  
                    style:'203',  
                    width:98,  
                    height:22  
                };  
                var s = [];  
                for(var i in p){  
                    s.push(i + '=' + encodeURIComponent(p[i]||''));  
                }  
                window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&'));  
            }); 
    </script>>
    
    <?php
        session_start();
        $server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('login',$con);//选择数据库
        date_default_timezone_set("Asia/Shanghai");
        $id = $_GET['id'];

        mysql_query("UPDATE content SET seenum = seenum+1 WHERE id = $id");


        if($id){
            $sql = "select * from content where id = '".$id."'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
        }
         ?> 

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
            <p>收到的赞：<?php echo $row['think']; ?></p>
        </div>
    </div>	

    <div class="sub_content">
    	<div class="content_font">
    		<p><?php echo $row['content']; ?></p>
    	</div>
    	<div class="content_img">
    		<img src="images/user/<?php echo $row['image']; ?>">
    		<img src="images/user/<?php echo $row['image1']; ?>">
    		<img src="images/user/<?php echo $row['image2']; ?>">
    	</div>
    </div>



    <div class="content_mine">
    	<div class="conmin_left">
    		<h3><?php echo $row['username']; ?></h3>
    		<p><?php
                $conn1 = mysql_connect("localhost","root","root");
                mysql_select_db('login',$conn1);
                $sqll1 = "select * from regcheck where username = '$row[username]'";
                $resultt1 = mysql_query($sqll1);
                $roww1 = mysql_fetch_array($resultt1);
                echo $roww1['synopsis']; ?></p>
    	</div>

    	<div class="conmin_right">
            <a href="person.php?id=<?php echo $row['id']; ?>"><img src="images/photo/<?php
                $conn = mysql_connect("localhost","root","root");
                mysql_select_db('login',$conn);
                $sqll = "select * from regcheck where username = '$row[username]'";
                $resultt = mysql_query($sqll);
                $roww = mysql_fetch_array($resultt);
                echo $roww['photo']; ?>"></a>
    	</div>
    </div> 

    <div class="con_commit">
    	<div class="commit_top">
    		<h3>
                留言 * <?php 
                    $sql = "select * from comment where thekey = '$id'";
                    $result = mysql_query($sql);
                    $count = 0;
                    while($row = mysql_fetch_array($result))
                    {
                        $count ++;
                    }
                    echo $count;
                ?>
                    
            </h3>
    	</div>

        <?php
                $sql = "select * from comment where thekey = '$id'";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?> 
    	           <div class="commit_con">
    		            <div class="user_pho">
                            <a href="person.php?id=<?php 
                            $sql1 = "select * from content where username='$row[othername]'";
                            $result1 = mysql_query($sql1);
                            $row1 = mysql_fetch_array($result1);
                            echo $row1['id']; ?>"><img src="images/photo/<?php
                                            $conn = mysql_connect("localhost","root","root");
                                            mysql_select_db('login',$conn);
                                            $sqll = "select * from regcheck where username = '$row[othername]'";
                                            $resultt = mysql_query($sqll);
                                            $roww = mysql_fetch_array($resultt);
                                            echo $roww['photo']; ?>" style="width:50%;"></a>
                        </div> 
    		            <div class="user_name">
                           <p class="name_blo"><?php echo $row['othername']; ?></p>
                           <img src="images/time.jpg">
                           <p class="name_time">
                               <?php
                                        $sendt = $row['lasttime'];
                                        $time = time()-strtotime($sendt);
                                        $yourday = (int)($time/(3600*24));
                                        if($yourday<1){
                                            echo "刚刚来过";
                                        }else{
                                            echo $yourday."天前来过";  
                                        }
                                    ?>
                           </p>
                        </div>
                    <div class="commit_pa">
            	        <p><?php echo $row['comm']; ?></p>
                    </div>
                </div>
            <?php  
            }
            ?>
    </div>

    <div class="commit_bo">
    </div>

    <div class="con_bot">
    	<form class="bot_img" action="myphp/think.php?id=<?php echo $id; ?>" method="post" target='ifr'>
    		<img src="images/heart.jpg" id="heart">
    		<p>超赞</p>
            <input type="submit" name="thethi" onclick="changeImg()" style="width: 60px; height: 60px; position: absolute; left: 20px;opacity:0;">
    	</form>
        <iframe name='ifr' id="ifr" style='display: none;'></iframe>
    	<div class="bot_img" onclick="tellSend()" id="btn">
    		<img src="images/massage.jpg">
    		<p>留言</p>
    	</div>
    	<div class="bot_img">
            <form action="myphp/collect.php?id=<?php echo $id; ?>" method="post" target='ifr'>
    		    <img src="images/<?php 
                if (isset($_SESSION["code"])){
                    $count1 = 0;
                    $theuser1 = "$_SESSION[username]";
                    $sql3 = "select * from collection where thekey = '$id' and myname = '$theuser1'";
                    $result3 = mysql_query($sql3);
                    while($row3 = mysql_fetch_array($result3))
                    {
                        $count1 ++;
                    }
                    if($count1){
                        echo "favo1.jpg";
                    }else
                    {
                        echo "favo.jpg";
                    }
                }else
                {
                    echo "favo.jpg";
                }
                ?>" id="favo">
    		    <p>收藏</p>
                <input type="submit" name="thecol" onclick="changeImg1()" style="width: 60px; height: 60px; position: absolute; right: 420px;opacity:0;">
            </form>
    	</div>
    	<div class="bot_phone" onclick="comeDiv1()">
    		<div class="phone_want">
    			<a href="#">联系他</a>
    		</div>
    	</div>
    </div>

    <?php
        $conn = mysql_connect("localhost","root","root");
        mysql_select_db('login',$conn);
        $sqll = "select * from regcheck where username = '$row[username]'";
        $resultt = mysql_query($sqll);
        $roww = mysql_fetch_array($resultt);
    ?>

    <div class="phone_hid" id="phone">
        <div class="hidden_con">
            <p>联系电话：<?php echo $roww1['phone']; ?></p>
        </div>
        <div class="hidden_con1">
            <p>QQ：<?php echo $roww1['qq']; ?></p>
        </div>
        <div class="hidden_con1">
            <p>微信：<?php echo $roww1['wechat']; ?></p>
        </div>
    </div>

    <!--留言-->

    <div class="tell_one" id="tell">
        <form action="myphp/commit.php?id=<?php echo $id; ?>" method="post">
            <input type="text" class="tell_form" name="content">
            <input type="submit" value="发送" class="tell_send" name="submit">
        </form>
    </div>
</body>
</html>