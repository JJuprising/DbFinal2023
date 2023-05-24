<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\AppServ\www\DbFinal2023/application/index\view\treat\treat.html";i:1684903886;s:24:"./public/common/top.html";i:1684910846;}*/ ?>
<meta charset="utf-8">
<center>
<table width=999px border=0>
<tr>
<td rowspan=2><img src="/dbFinal2023/public/static/pic/logo.jpg" style="width:250px; height:68px"> </td>

<td style="font-size:x-small;">

<?php echo \think\Session::get('No'); ?>欢迎使用医院管理系统</td>
<td style="background:url('/dbFinal2023/public/static/image/topxmenubg.jpg'); font-size:x-small;text-align:center;">
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
<td style="text-align:right;"><img src="/dbFinal2023/public/static/image/ttel.jpg"></td>
</tr>
<tr><td colspan=3 style="background-color:#1E90FF; font-size: small;text-align:center; width:999px;height:40px">
 <span style=" color:White;"> |</span> &nbsp; &nbsp; &nbsp;
 	<!-- 医生导航栏 -->
 	<?php if(\think\Session::get('job') == 'doctor'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('schedule/schedule'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">排班</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('treat/treat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">接诊</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
	<a href="<?php echo url('recipet/recipet'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">处方</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
 	<!-- 病人导航栏 -->
 	<?php if(\think\Session::get('job') == 'patient'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('book/book'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">挂号</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('gettreat/gettreat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">就诊</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('pay/pay'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">缴费</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
     <a href="<?php echo url('consult/consult'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">查询</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
 	<!-- 管理员导航栏 -->
 	<?php if(\think\Session::get('job') == 'administrator'): endif; if(\think\Session::get('job') == ''): ?>
 	 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:宋体"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
    
</td>
<!-- </tr>
<tr><td colspan=3 style="background:url('/dbFinal2023/public/static/image/search_bg.jpg'); font-size: small;text-align:center; width:999px;height:35px">
<span style="font-weight:bold; font-size:x-small; font-family:宋体">
</span>
</td>
</tr> -->
</table></center>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="/dbFinal2023/public/static/css/treat.css" rel="stylesheet" type="text/css">
<title>Insert title here</title>
</head>

<body>
<center>

<div id="pat_content">
	<?php if(is_array($patInfo) || $patInfo instanceof \think\Collection || $patInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $patInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
		<div class="pat_div">
			<a href="">
			<img src="/dbFinal2023/public/static/image/User.png" border="0"/>
			</a>
			<div id="pat_title_div">
				<a><?php echo $data['patName']; ?></a>
				<a><?php echo $data['sex']; ?></a>
				<!-- <a><?php echo $data['patNo']; ?></a> -->
			</div>
			<div id="pat_infm_div">电话：<?php echo $data['telephone']; ?></div>
			<div id="pat_infm_div">病案号：<?php echo $data['patNo']; ?></div>
			<div id="pat_infm_div">创建时间：<?php echo $data['bookingTime']; ?></div>
			
			
			<div id>
				<div id="treat_div">
				<a href="/dbFinal2023/application/index/view/recipet/recipet.html">接诊</a>
				</div>					
				<div id="infm_div">
				<a href="">病人信息</a>
				</div>					
			</div>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
		
</div>

</center>

</body>

</html>