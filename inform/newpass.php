<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>密码修改</title>
</head>
<body>
	<div class="login_top">
		<p>密码修改</p>
	</div>

	<div class="login_main">
		<form action="myphp/newcheck.php" method="post">
			<div class="login_num">
				<p>原密码</p>
			    <input type="password" class="login_form" id="theval" name="password">
		    </div>
		    <div class="login_num">
		    	<p>新密码</p>
			    <input type="password" class="login_form" name="newpass">
		    </div>
			<input type="submit" class="login_sub" value="确认修改" name="submit">
		</form>
	</div>

	<div class="login_bot">
		<div class="botto_reg">
			<a href="login.php">登录</a>
		</div>
	</div>
</body>
</html>