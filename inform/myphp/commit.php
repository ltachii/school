<?php 
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if(isset($_SESSION["code"])){
     
        if(isset($_POST["submit"]) && $_POST["submit"] == "发送")  
        {  
        	$content = $_POST["content"]; 
            $theuser = "$_SESSION[username]";
            $thekey = $_GET['id'];

            if($content == ""){
            	echo "<script>alert('请输入文字！'); history.go(-1);</script>";  
            }
            else
            {

            	$server="localhost";//主机
            	$db_username="root";//数据库用户名
           		$db_password="root";//数据库密码
            	$con = mysql_connect("localhost","root","root");//链接数据库
            	mysql_select_db('login',$con);//选择数据库

            	$sql_insert = "insert into comment (othername,comm,thekey) values ('$theuser','$_POST[content]','$thekey')"; 
            	$res_insert = mysql_query($sql_insert);  
            	if($res_insert)  
            	{  
                	echo "<script>alert('评论成功！');history.go(-1);</script>";
            	}  
            	else  
            	{  
                	echo "<script>alert('系统繁忙，请稍候！');history.go(-1);</script>";  
            	}
            }
        }
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        } 
    }
    else
    {
    	echo "<script>alert('请先登录！');</script>";
    	echo "<meta http-equiv=refresh content='0; url=../login.php'>"; 
    }
?>