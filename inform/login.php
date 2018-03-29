<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>登录</title>
</head>
<body>
	<div class="login_top">
		<p>账号登录</p>
	</div>

	<div class="login_main">
		<form action="myphp/logincheck.php" method="post">
			<div class="login_num">
				<p>账号</p>
			    <input type="text" class="login_form" value="手机号/会员名/邮箱" id="theval" onclick="delteVal()" name="username">
		    </div>
		    <div class="login_num">
		    	<p>密码</p>
			    <input type="password" class="login_form" name="password">
		    </div>
			<input type="submit" class="login_sub" value="登录" name="submit">
		</form>
	</div>

	<div class="login_bot">
		<div class="botto_reg">
			<a href="regester.php">免费注册</a>
		</div>
	</div>
</body>
</html>