<?php
    session_start();
    header("Content-type:text/html;charset=utf-8");
    $server="localhost";//主机
    $db_username="root";//数据库用户名
    $db_password="root";//数据库密码
    $con = mysql_connect("localhost","root","root");//链接数据库
    mysql_select_db('login',$con);//选择数据库
    $theuser = "$_SESSION[username]";
    $thekey = $_GET['id'];
    if(isset($_SESSION["code"])){
        $count = 0;
        $sql = "select * from collection where thekey = '$thekey' and myname = '$theuser'";
        $result = mysql_query($sql);
        while($row = mysql_fetch_array($result))
        {
            $count ++;
        }
        if($count){
            $sql_delete = "delete from collection where thekey = '$thekey' and myname = '$theuser'";
            $theresult = mysql_query($sql_delete);
                if($theresult)  
                {  
                    echo "<script>alert('取消收藏成功！');</script>";  
                }  
                else  
                {  
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
                } 
        }else{

            $sql_insert = "insert into collection (myname,thekey) values ('$theuser','$thekey')"; 
            $res_insert = mysql_query($sql_insert); 
            if($res_insert)  
            {  
                echo "<script>alert('收藏成功！');</script>";
            }  
            else  
            {  
                echo "<script>alert('收藏失败，请稍后重试！');history.go(-1);</script>";  
            }
        }
    }else{
    	echo "<script>alert('请先登录！');</script>";
    }
?>