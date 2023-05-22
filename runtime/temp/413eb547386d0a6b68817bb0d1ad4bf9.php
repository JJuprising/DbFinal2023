<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\Tools\php\AppServ\www\dbFinalcode./application/index\view\book\book.html";i:1684773736;s:24:"./public/common/top.html";i:1684773786;}*/ ?>
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
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>

<body>
<center>

病人-book 挂号


</center>

</body>

</html>