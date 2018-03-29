<?php  
    header("Content-Type: text/html; charset=utf8");
    session_start();  //登录系统开启一个session内容
    if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            $server="localhost";//主机
            $db_username="root";//数据库用户名
            $db_password="root";//数据库密码
            $con = mysql_connect("localhost","root","root");//链接数据库
            mysql_select_db('login',$con);//选择数据库
            $sql = "select username,password from regcheck where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
                $_SESSION["username"] = $user; 
                $_SESSION["code"] = mt_rand(0, 100000);  //给session附一个随机值，防止用户直接通过调用界面访问sendput.php
                echo "<script>alert('登录成功！');history.go(-2);</script>"; 
                
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }

    mysql_close($con);//关闭数据库连接，如不关闭，下次连接时会出错  
  
?>  