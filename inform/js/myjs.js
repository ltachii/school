$(function(){
	
	var i=0;
	var clone=$(".banner .img li").first().clone();
	$(".banner .img").append(clone);	
	var size=$(".banner .img li").size();	
	for(var j=0;j<size-1;j++){
		$(".banner .num").append("<li></li>");
	}
	$(".banner .num li").first().addClass("on");
	
	
	/*鼠标划入圆点*/
	$(".banner .num li").hover(function(){
		var index=$(this).index();
		i=index;
		$(".banner .img").stop().animate({left:-index*1024},500)	
		$(this).addClass("on").siblings().removeClass("on")		
	})
	
	
	/*自动轮播*/
	var t=setInterval(function(){
		i++;
		move()
	},2000)
	
	
	/*对banner定时器的操作*/
	$(".banner").hover(function(){
		clearInterval(t);
	},function(){
		t=setInterval(function(){
			i++;
			move()
		},2000)
	})
	
	
	
	/*向左的按钮*/
	$(".banner .btn_l").click(function(){
		i--
		move();	
	})
	
	
	
	/*向右的按钮*/
	$(".banner .btn_r").click(function(){
		i++
		move()				
	})
	
	function move(){
		
		if(i==size-1){
			$(".banner  .img").css({left:0})			
			i=0;
		}
		
		
		if(i==-1){
			$(".banner .img").css({left:-(size-1)*1024})
			i=size-2;
		}
		
		$(".banner .img").stop().animate({left:-i*1024},500)	
		
		if(i==size-1){
			$(".banner .num li").eq(0).addClass("on").siblings().removeClass("on")	
		}else{		
			$(".banner .num li").eq(i).addClass("on").siblings().removeClass("on")	
		}
		
		
		
	}
})


/*点击切换图片*/
function changeImg(){
    var obj = document.getElementById("heart");
    if(obj.getAttribute("src") == "images/heart.jpg"){
        obj.setAttribute("src","images/heart1.jpg");
    }else{
    	alert('你已经点过赞啦！');
    }
}

function changeImg1(){
    var obj = document.getElementById("favo");
    if(obj.getAttribute("src") == "images/favo.jpg"){
        obj.setAttribute("src","images/favo1.jpg");
    }else{
    	obj.setAttribute("src","images/favo.jpg");
    }
}

function delteVal(){
	var obj = document.getElementById("theval");
	if(obj.getAttribute("value") == "手机号/会员名/邮箱"){
		obj.setAttribute("value","");
	}else if(obj.getAttribute("value") == "请输入您的昵称"){
		obj.setAttribute("value","");
	}
}


/*发布界面display出现*/

function comeDiv(){
	var obj = document.getElementById("send");
	var thep = document.getElementById("wrong");
    if(obj.style.display != "block")
    {
        obj.style.display = "block";
    }
    else if(obj.style.display == "block")
    {
        obj.style.display = "none";
    }

}

function tellSend(){
	var obj = document.getElementById("tell");
    if(obj.style.display != "block")
    {
        obj.style.display = "block";
    }else if(obj.style.display == "block"){
    	obj.style.display = "none";
    }
}


function addPic1(){
	var obj1 = document.getElementById("picInput1");
	var obj2 = document.getElementById("picInput2");
    if(obj1.style.display == "none")
    {
        obj1.style.display = "block";
    }else if(obj1.style.display == "block"){
    	obj2.style.display = "block";
    }
}

function comeDiv1(){
	var obj = document.getElementById("phone");
    if(obj.style.display != "block")
    {
        obj.style.display = "block";
    }
    else if(obj.style.display == "block")
    {
        obj.style.display = "none";
    }
}

