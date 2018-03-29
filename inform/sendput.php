
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<title>发布</title>
</head>
<body>
	<div class="sendput_top">
		<p>发布</p>
	</div>

	<div class="sendput_con">
		<form action="myphp/article.php" method="post"  enctype="multipart/form-data">
			<input type="text" value="标题 别人可以搜到你的帖子" class="con_form" id="putl" onfocus="if(value =='标题 别人可以搜到你的帖子'){value =''}" onblur="if (value ==''){value='标题 别人可以搜到你的帖子'}" name="title">
			<input type="text" class="con_form" value="写写你想说的" onfocus="if(value =='写写你想说的'){value =''}" onblur="if (value ==''){value='写写你想说的'}" name="content">

			<div class="sendd_pic">
				<div class="pic_one" id="picInput">
					<div class="one_circle">
					    <p>+</p>
					    <input type="file" name='myfile[]' id="addBtn" onclick="addPic1()">
				    </div>
				</div>

				<div class="pic_one" id="picInput1" style="display: none;">
					<div class="one_circle">
					    <p>+</p>
					    <input type="file" name='myfile[]' id="addBtn" onclick="addPic1()">
				    </div>
				</div>

				<div class="pic_one" id="picInput2" style="display: none;">
					<div class="one_circle">
					    <p>+</p>
					    <input type="file" name='myfile[]' id="addBtn">
				    </div>
				</div>
            </div>

            <div class="send_cho">
            	<input type="radio" name="choose" value="school" checked><p>校园</p>
            	<input type="radio" name="choose" value="job"><p>兼职</p>
            	<input type="radio" name="choose" value="second"><p>二手</p>
            	<input type="radio" name="choose" value="study"><p>找人学</p>
            </div>

			<div class="send_sub">
				<input type="submit" value="确定发布" name="submit">
			</div>
		</form>
	</div>
</body>
</html>