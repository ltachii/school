<?php  
    header("Content-Type: text/html; charset=utf8");
    session_start();  //登录系统开启一个session内容
    if (isset($_SESSION["code"])){
        if(isset($_POST["submit"]) && $_POST["submit"] == "确认修改")  
        {  
            $psw = $_POST["password"];  
            $newpsw = $_POST["newpass"]; 
            $theuser = "$_SESSION[username]"; 
            if($newpsw == "" || $psw == "")  
            {  
                echo "<script>alert('请填写完整！');</script>";  
            }  
            else  
            {  
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('login',$con);//选择数据库
                $sql_new = "UPDATE regcheck SET password = '$_POST[newpass]' WHERE username = '$theuser' AND password = '$_POST[password]'";
                $result = mysql_query($sql_new);  
                if(mysql_affected_rows())  
                {   
                    echo "<script>alert('修改成功！');</script>";
                    echo "<meta http-equiv=refresh content='0; url=../login.php'>"; 
                
                }  
                else  
                {  
                    echo "<script>alert('原密码不正确！');history.go(-1);</script>";  
                }  
            }  
        }  
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }

    }else{
            echo "<script>alert('系统繁忙，请稍后再试！'); history.go(-1);</script>"; 
    }
  
?>  