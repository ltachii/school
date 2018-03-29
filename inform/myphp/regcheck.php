<?php  
    header("Content-Type: text/html; charset=utf8");
    if(isset($_POST["submit"]) && $_POST["submit"] == "注册")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
              
            $server="localhost";//主机
            $db_username="root";//数据库用户名
            $db_password="root";//数据库密码
            $con = mysql_connect("localhost","root","root");//链接数据库
            mysql_select_db('login',$con);//选择数据库
            $sql = "select username from regcheck where username = '$_POST[username]'"; //SQL语句  
            $result = mysql_query($sql);    //执行SQL语句  
            $num = mysql_num_rows($result); //统计执行结果影响的行数  
            if($num)    //如果已经存在该用户  
            {  
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
            }  
            else    //不存在当前注册用户名称  
            {  
                $sql_insert = "insert into regcheck (username,password) values ('$_POST[username]','$_POST[password]')";  
                $res_insert = mysql_query($sql_insert);  
                if($res_insert)  
                {  
                    echo "<script>alert('注册成功！');</script>";
                    echo "<meta http-equiv=refresh content='0; url=../login.php'>";  
                }  
                else  
                {  
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
                }  
            }    
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>