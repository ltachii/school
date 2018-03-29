<?php
    header("Content-type:text/html;charset=utf-8");
    $server="localhost";//主机
    $db_username="root";//数据库用户名
    $db_password="root";//数据库密码
    $con = mysql_connect("localhost","root","root");//链接数据库
    mysql_select_db('login',$con);//选择数据库
    $id = $_GET['id'];
    if(isset($_POST["thethi"])){
    	mysql_query("UPDATE content SET think = think+1 WHERE id = $id");
    }else
    {
    	echo "<script>alert('点赞失败，请稍后重试！'); history.go(-1);</script>";
    }
?>