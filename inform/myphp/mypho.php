<?php
	session_start();
    header("Content-Type: text/html; charset=utf8");
    if (isset($_SESSION["code"])){
    	if(isset($_POST["submit"]) && $_POST["submit"] == "完成")  
        {    
            $phone = $_POST["phone"];
            $qq = $_POST["qq"];
            $wechat = $_POST["wechat"]; 
            $theuser = "$_SESSION[username]";
            $server="localhost";//主机
            $db_username="root";//数据库用户名
            $db_password="root";//数据库密码
            $con = mysql_connect("localhost","root","root");//链接数据库
            mysql_select_db('login',$con);//选择数据库 
            $res_insert = mysql_query("UPDATE regcheck SET phone = '$phone' WHERE username = '$theuser'");
            $res_insert1 = mysql_query("UPDATE regcheck SET qq = '$qq' WHERE username = '$theuser'");
            $res_insert2 = mysql_query("UPDATE regcheck SET wechat = '$wechat' WHERE username = '$theuser'");
            if($res_insert && $res_insert1 && $res_insert2)  
            {  
                echo "<script>alert('修改成功！');</script>";
                echo "<meta http-equiv=refresh content='0; url=../mine.php'>";
        	}  
        	else  
        	{  
            	echo "<script>alert('修改失败！'); history.go(-1); </script>";  
        	}
        }else
        {
        	echo "<script>alert('系统繁忙，请稍候！');history.go(-1);</script>";
        }
    }else
    {
        echo "<script>alert('请先登录！');</script>";
        echo "<meta http-equiv=refresh content='0; url=../login.php'>";
    }
?>