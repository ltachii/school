<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $id = $_GET['id'];
    if (isset($_SESSION["code"])){
    	$server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('login',$con);//选择数据库
        $theuser = "$_SESSION[username]";
    	$sql_delete = "delete from content where id = '$id'";
        $sql_delete1 = "delete from collection where thekey = '$id' and myname = '$theuser'";
        $theresult = mysql_query($sql_delete);
        $theresult1 = mysql_query($sql_delete1);
        if($theresult && $theresult1)  
        {  
            echo "<script>alert('删除成功！');history.go(-1);</script>";  
        }  
        else  
        {  
            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
        }
    }
?>