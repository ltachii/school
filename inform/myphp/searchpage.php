<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "搜索")  
    {
    	$keyword = $_POST["thebut"];

    	$server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('login',$con);//选择数据库 

        $sql = "SELECT * FROM content WHERE title LIKE '%$keyword%'";
        $result = mysql_query($sql);
        date_default_timezone_set("Asia/Shanghai");
    }
?>