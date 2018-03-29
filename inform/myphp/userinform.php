<?php
	session_start();
    header("Content-Type: text/html; charset=utf8");
    if (isset($_SESSION["code"])){
		$file = $_FILES['file']; //得到传输的数据
        $name = $file['name'];   //得到文件名称
        $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
        $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
        $theuser = "$_SESSION[username]";
        date_default_timezone_set("Asia/Shanghai");
                 
        if(!in_array($type, $allow_type))    //判断文件类型是否被允许上传
        {    
            return ;    //如果不被允许，则直接停止程序运行
        }

        if(!is_uploaded_file($file['tmp_name']))
        {    //判断是否是通过HTTP POST上传的
            return ;    //如果不是通过HTTP POST上传的
        }

        $upload_path = "../images/photo/"; //上传文件的存放路径
        $dest = date("ymdhis")."_".$file['name'];    //修改图片名字为日期加名字
        if(move_uploaded_file($file['tmp_name'],$upload_path.$dest))
        {    //开始移动文件到相应的文件夹
            echo "Successfully!";
        }else{
            echo "Failed!";
        }

        $server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('login',$con);//选择数据库 
        $res_insert = mysql_query("UPDATE regcheck SET photo = '$dest' WHERE username = '$theuser'");  
        if($res_insert)  
        {  
             echo "<script>alert('上传成功！');</script>";
             echo "<meta http-equiv=refresh content='0; url=../home.php'>";
        }  
        else  
        {  
            echo "<script>alert('上传失败！'); history.go(-1); </script>";  
        }  
    }else
    {
        echo "<script>alert('请先登录！');</script>";
        echo "<meta http-equiv=refresh content='0; url=../login.php'>";
    }
?>