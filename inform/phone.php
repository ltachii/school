<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mine.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>我的联系方式</title>
</head>
<body style="background: #f4f5f9;">
	<div class="login_top" style="background: #fafbfd;">
		<p>联系方式</p>
	</div>

	<div class="your_form">
		<form action="myphp/mypho.php" method="post">
			<p class="conme_p1">电话</p><input class="your_one1" name="phone">
			<p class="conme_p2">Q Q</p><input class="your_one1" name="qq">
			<p class="conme_p3">微信</p><input class="your_one1" name="wechat">
			<input type="submit" name="submit" value="完成" class="your_two">
		</form>
	</div>
</body>
</html>