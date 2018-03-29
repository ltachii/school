<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mine.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>我的简介</title>
</head>
<body style="background: #f4f5f9;">
	<div class="login_top" style="background: #fafbfd;">
		<p>我的简介</p>
	</div>

	<div class="your_form">
		<form action="myphp/mycon.php" method="post">
			<textarea class="your_one" name="content"></textarea>
			<input type="submit" name="submit" value="完成" class="your_two">
		</form>
	</div>
</body>
</html>