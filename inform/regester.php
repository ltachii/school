<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>注册</title>
</head>
<body>
	<div class="login_top">
		<p>账号注册</p>
	</div>

	<div class="login_main">
		<form action="myphp/regcheck.php" method="post">
			<div class="login_num">
				<p>账号</p>
			    <input type="text" class="login_form" value="请输入您的昵称" id="theval" name="username" onclick="delteVal()">
		    </div>
		    <div class="login_num">
		    	<p>密码</p>
			    <input type="password" class="login_form" name="password">
		    </div>
			<input type="submit" class="login_sub" value="注册" name="submit">
		</form>
	</div>

	<div class="login_bot">
		<div class="botto_reg">
			<a href="login.php">登录</a>
		</div>
	</div>
</body>
</html>