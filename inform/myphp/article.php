<?php 
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if (isset($_SESSION["code"])){
     
        if(isset($_POST["submit"]) && $_POST["submit"] == "确定发布")  
        {  
            $title = $_POST["title"];  
            $content = $_POST["content"];
            $thetype = $_POST["choose"];   
            $theuser = "$_SESSION[username]";
            if($title  == "" || $content == "" || $title  == "标题 别人可以搜到你的帖子" || $content == "写写你想说的")  
            {  
                echo "<script>alert('请填写完整！'); history.go(-1);</script>";  
            }  
            else  
            {  
                $file = $_FILES['myfile'];  //得到传输的数据,以数组的形式
                $name = $file['name'];      //得到文件名称，以数组的形式
                $upload_path = "../images/user/"; //上传文件的存放路径

                foreach ($name as $k=>$names)
                {
                    $type = strtolower(substr($names,strrpos($names,'.')+1));//得到文件类型，并且都转化成小写
                    $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
                    //把非法格式的图片去除
                    if (!in_array($type,$allow_type))
                    {
                        unset($name[$k]);
                    }  
                }
                $str = '';
                $x = 0;
                $dest=array("","","");
                foreach ($name as $k=>$item)
                {
                    $type = strtolower(substr($item,strrpos($item,'.')+1));//得到文件类型，并且都转化成小写
                    $dest[$x] = time().$name[$k];
                   
                    if (move_uploaded_file($file['tmp_name'][$k],$upload_path.$dest[$x]))
                    {
                       
                        echo 'success';
                    }else{
                         echo 'failed';
                    } 
                    $x++;
                }


                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('login',$con);//选择数据库
                
                $sql_insert = "insert into content (username,title,content,image,image1,image2,type) values ('$theuser','$_POST[title]','$_POST[content]','$dest[0]','$dest[1]','$dest[2]','$thetype')";  
                $res_insert = mysql_query($sql_insert);  
                if($res_insert)  
                {  
                    echo "<script>alert('发布成功！');</script>";
                    echo "<meta http-equiv=refresh content='0; url=../home.php'>";  
                }  
                else  
                {  
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
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