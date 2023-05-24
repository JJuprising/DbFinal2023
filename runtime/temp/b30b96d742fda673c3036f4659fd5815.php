<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\AppServ\www\DbFinal2023/application/index\view\login\login.html";i:1684773795;s:24:"./public/common/top.html";i:1684903389;}*/ ?>
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
<tr><td colspan=3 style="background:url('/dbFinal2023/public/static/image/bg-navbox.png'); font-size: small;text-align:center; width:999px;height:40px">
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
<tr><td colspan=3 style="background:url('/dbFinal2023/public/static/image/search_bg.jpg'); font-size: small;text-align:center; width:999px;height:35px">
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

<!-- action关联了dologin方法 -->
<form action="<?php echo url('login/dologin'); ?>" method="post" name=f>
<table style="width:480px; border-width:3px; border-style:dotted;">
<tr><td colspan=2 style="text-align:center;height:60px;">请登录医院管理信息系统</td></tr>
<tr>
 <td style="text-align:right;height:30px;"><label id="NoLabel">病案号：</label></td>
<td align=left><input type=text name="No" id="No" placeholder = "请输入病人病案号"></td>
</tr>
<tr>
<td style="text-align:right;height:30px;">密码：</td>
<td align=left><input type=password name="Password"></td>
</tr>
<tr>
<td style="text-align:right;height:30px;">身份：</td>
<td style="">
<input type="radio" id="doctor" name="job" value="doctor"><label for="doctor" onclick="showNo('doctor')">医生</label>
<input type="radio" id="patient" name="job" value="patient"  checked onclick="showNo('patient')"><label for="patient">病人</label>
<input type="radio" id="administrator" name="job" value="administrator" onclick="showNo('administrator')"><label for="administrator">管理员</label>
</td>

</tr>

<tr><td colspan=2 style="text-align:center;height:60px;">
<input type=submit name=s value="登录">
</td></tr>
</table>
</form>


</center>

</body>
<script>
//添加一个showNo()函数，根据用户类型修改label标签和input输入框
function showNo(jobType) {
	console.log(1)
  var NoLabel = document.getElementById("NoLabel");
  if (jobType == "doctor") {
    NoLabel.innerHTML = "工号：";
    document.getElementById("No").placeholder = "请输入医生工号";
  } else if (jobType == "patient") {
    NoLabel.innerHTML = "病案号：";
    document.getElementById("No").placeholder = "请输入病人病案号";
  } else if (jobType == "administrator") {
    NoLabel.innerHTML = "管理员编号：";
    document.getElementById("No").placeholder = "请输入管理员编号";
  }
}
</script>
</html>