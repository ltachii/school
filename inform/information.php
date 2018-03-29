<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mine.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>我的资料</title>
</head>
<body>
	<div class="login_top" style="background: #fafbfd;">
		<p>我的资料</p>
	</div>

	<div class="infor_base">
		<p>基本资料</p>
	</div>

	<div class="infor_mine">
		<form id="myform" action="myphp/userinform.php" method="post" enctype="multipart/form-data" />
		<input type="file" name="file" style="width: 80%; height: 120px; position: absolute; opacity: 0;" onchange="test()" />
    	</form>
		<script type="text/javascript">
			function test()
        	{
    			document.getElementById("myform").submit();
			}
		</script>
		<p style="margin-top: 40px; float: left;">头像</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>

	<div class="infor_mine")">
		<form id="myform1" action="myphp/background.php" method="post" enctype="multipart/form-data" />
		<input type="file" name="file" style="width: 80%; height: 120px; position: absolute; opacity: 0;" onchange="test1()" />
    	</form>
    	<script type="text/javascript">
			function test1()
        	{
    			document.getElementById("myform1").submit();
			}
		</script>
		<p style="margin-top: 40px; float: left;">背景图</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>

	<div class="infor_mine" onclick="window.location.href='phone.php';">
		<p style="margin-top: 40px; float: left;">联系方式</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>

	<div class="infor_mine" onclick="window.location.href='yourself.php';">
		<p style="margin-top: 40px; float: left;">个人简介</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>

	<div class="infor_mine" onclick="window.location.href='newpass.php';">
		<p style="margin-top: 40px; float: left;">修改密码</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>
	<div class="infor_mine" onclick="window.location.href='loginout.php';">
		<p style="margin-top: 40px; float: left;">用户注销</p>
		<p style="float: right; margin: 40px 30px 0 0;">〉</p>
	</div>
</body>
</html>