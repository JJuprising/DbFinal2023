<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\Tools\php\AppServ\www\dbFinalcode./application/index\view\index\index.html";i:1684661086;s:24:"./public/common/top.html";i:1684773786;s:27:"./public/common/bottom.html";i:1684640682;}*/ ?>
<meta charset="utf-8">
<center>
<table width=999px border=0>
<tr>
<td rowspan=2><img src="/dbFinalcode/public/static/pic/logo.jpg" style="width:250px; height:68px"> </td>

<td style="font-size:x-small;">

<?php echo \think\Session::get('No'); ?>欢迎使用医院管理系统</td>
<td style="background:url('/dbFinalcode/public/static/image/topxmenubg.jpg'); font-size:x-small;text-align:center;">
<a href="member.php" style="text-decoration:none;">我的帐户</a>|
<a href="<?php echo url('order/showorder'); ?>" style="text-decoration:none;">我的订单</a>|
<a href="<?php echo url('cart/index'); ?>" style="text-decoration:none;">购物车</a>|
</td>
</tr>
<tr>
<td>
<?php if(\think\Session::get('No') == ''): ?>
<a href="<?php echo url('login/login'); ?>" style="font-size:x-small;text-decoration:none;">登录</a>&nbsp;&nbsp;
<?php else: ?>
<a href="<?php echo url('login/logOut'); ?>" style="font-size:x-small;text-decoration:none;">退出</a>&nbsp;&nbsp;
<?php endif; ?>
<a href="<?php echo url('register/register'); ?>" style="font-size:x-small;text-decoration:none;">注册</a>&nbsp;&nbsp;
<a href="<?php echo url('admin/adminlogin/login'); ?>" style="font-size:x-small;text-decoration:none;">后台登录</a>&nbsp;&nbsp;</td>
<td style="text-align:right;"><img src="/dbFinalcode/public/static/image/ttel.jpg"></td>
</tr>
<tr><td colspan=3 style="background:url('/dbFinalcode/public/static/image/bg-navbox.png'); font-size: small;text-align:center; width:999px;height:40px">
 <span style=" color:White;"> |</span> &nbsp; &nbsp; &nbsp;
 	<!-- 医生导航栏 -->
 	<?php if(\think\Session::get('job') == 'doctor'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('schedule/schedule'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">排班</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('treat/treat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">接诊</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('recipet/recipet'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">处方</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
 	<!-- 病人导航栏 -->
 	<?php if(\think\Session::get('job') == 'patient'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('book/book'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">挂号</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('gettreat/gettreat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">就诊</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('pay/pay'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">缴费</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
     <a href="<?php echo url('consult/consult'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体">查询</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
 	<!-- 管理员导航栏 -->
 	<?php if(\think\Session::get('job') == 'administrator'): endif; if(\think\Session::get('job') == ''): ?>
 	 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
    
</td>
</tr>
<tr><td colspan=3 style="background:url('/dbFinalcode/public/static/image/search_bg.jpg'); font-size: small;text-align:center; width:999px;height:35px">
<span style="font-weight:bold; font-size:x-small; font-family:宋体">
</span>
</td>
</tr>
</table></center>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link href="/dbFinalcode/public/static/css/prodList.css" rel="stylesheet" type="text/css">
	<style>
		/* 样式表 */
        a {
  color: var(--primary-color);
  text-decoration: none;
}
        #all{
            display:flex;
        }
		#slider {
			width: 60%;
			height: 400px;
			overflow: hidden;
			position: relative;
		}
		#slider img {
			width: 100%;
			height: 400px;
			position: absolute;
			top: 0;
			left: 0;
		}
		#slider .slider-btns {
			position: absolute;
			bottom: 10px;
			left: 50%;
			transform: translateX(-50%);
			z-index: 1;
		}
		#slider .slider-btns button {
			display: inline-block;
			width: 10px;
			height: 10px;
			border-radius: 50%;
			margin: 0 5px;
			background-color: #ccc;
			border: none;
			cursor: pointer;
		}
		#slider .slider-btns button.active {
			background-color: #333;
		}
		#sidebar {
			width: 20%;
			float: left;
			padding: 20px;
			box-sizing: border-box;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}
		#sidebar ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}
		#sidebar ul li {
			margin-bottom: 10px;
		}
        #sidebar ul li a:hover {
            background-color: #f0f0f0;
        }
		#sidebar ul li a:hover {
			background-color: #ccc;
		}
		#main {
			
			float: right;
			padding: 20px;
			box-sizing: border-box;
		}
		#news {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}
		#news h2 {
			margin-top: 0;
            color: var(--primary-color);
		}
	</style>
</head>
<body>
<center>
 <div id="all">
        <div id="sidebar">
            <ul>
                <li><a href="#">科室1</a></li>
                <li><a href="#">科室2</a></li>
                <li><a href="#">科室3</a></li>
                <li><a href="#">科室4</a></li>
                <li><a href="#">科室5</a></li>
            </ul>
        </div>
        <div id="slider">
            <img src="https://picsum.photos/1200/400?random=1" alt="Slider Image 1">
            <img src="https://picsum.photos/1200/400?random=2" alt="Slider Image 2">
            <img src="https://picsum.photos/1200/400?random=3" alt="Slider Image 3">
            <div class="slider-btns">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>
        
        <div id="main">
            <div id="news">
                <h2>医院资讯</h2>
                <ul>
                    <li><a href="#">医院医疗专家组赴所罗门群岛开展医疗巡诊活动</a></li>
                    <li><a href="#">[揭秘]大咖身份首次曝光!科普大赛超强阵容评审团.</a></li>
                    <li><a href="#">五四表彰大会暨团旗飘飘风采展示晚会圆满举办</a></li>
                    <li><a href="#">点赞!医院创伤骨科主任王芳获评“好医生”称号</a></li>
                    <li><a href="#">呼吸与危重症医学科举办第21个世界哮喘日活动</a></li>
                </ul>
            </div>
        </div>
    </div>
	
	<script>
		// JavaScript代码
		const sliderImgs = document.querySelectorAll('#slider img');
		const sliderBtns = document.querySelectorAll('#slider button');
		let currentSlide = 0;

		function reset() {
			sliderImgs.forEach(img => {
				img.style.display = 'none';
			});
			sliderBtns.forEach(btn => {
				btn.classList.remove('active');
			});
		}

		function startSlide() {
			reset();
			sliderImgs[currentSlide].style.display = 'block';
			sliderBtns[currentSlide].classList.add('active');
		}

		function slideLeft() {
			reset();
			currentSlide--;
			if (currentSlide < 0) {
				currentSlide = sliderImgs.length - 1;
			}
			sliderImgs[currentSlide].style.display = 'block';
			sliderBtns[currentSlide].classList.add('active');
		}

		function slideRight() {
			reset();
			currentSlide++;
			if (currentSlide >= sliderImgs.length) {
				currentSlide = 0;
		}
			sliderImgs[currentSlide].style.display = 'block';
			sliderBtns[currentSlide].classList.add('active');
		}

		sliderBtns.forEach((btn, i) => {
			btn.addEventListener('click', () => {
				reset();
				currentSlide = i;
				sliderImgs[currentSlide].style.display = 'block';
				sliderBtns[currentSlide].classList.add('active');
			});
		});

		startSlide();
		setInterval(() => {
			slideRight();
		}, 5000);
	</script>
	<div id="footer">
Copyright © 2016, flowersforjx.com, All Rights Reserved 粤华师备 20132003040号 粤ICP备 123456号
</div>
</center>
</body>
</html>