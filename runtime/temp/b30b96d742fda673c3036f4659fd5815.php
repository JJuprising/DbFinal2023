<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\AppServ\www\DbFinal2023/application/index\view\login\login.html";i:1687084028;s:24:"./public/common/top.html";i:1687084028;}*/ ?>
<meta charset="utf-8">
<center>
<table width=999px border=0>
<tr>
<td rowspan=2><img src="/DbFinal2023/public/static/pic/logo.jpg" style="width:250px; height:68px"> </td>
<td style="font-size:24px; float:right; font-family:微软雅黑"><?php echo \think\Session::get('No'); ?>欢迎使用医院管理系统</td>
<td style="text-align:right;"><img src="/DbFinal2023/public/static/image/ttel.jpg"></td>
</tr>

<tr>
	<td></td>
	<td style="float:right;">
	<?php if(\think\Session::get('No') == ''): ?>
	<a href="<?php echo url('login/login'); ?>" style="font-size:16px;;text-decoration:none;">登录</a>&nbsp;&nbsp;
	<?php else: ?>
	<a href="<?php echo url('login/logOut'); ?>" style="font-size:16px;text-decoration:none;">退出</a>&nbsp;&nbsp;
	<?php endif; ?>
	<a href="<?php echo url('register/register'); ?>" style="font-size:16px;text-decoration:none;">注册</a>&nbsp;&nbsp;
	<a href="<?php echo url('admin/adminlogin/login'); ?>" style="font-size:16px;text-decoration:none;">后台登录</a>&nbsp;&nbsp;</td>
</tr>

<tr><td colspan=3 style="background-color:#1E90FF; font-size: small;text-align:center; width:999px;height:40px">
 <span style="color:White;">|</span> &nbsp; &nbsp; &nbsp;
 	<!-- 医生导航栏 -->
 	<?php if(\think\Session::get('job') == 'doctor'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑;"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('schedule/schedule'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑;">排班</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('treat/treat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑;">接诊</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
	<a href="<?php echo url('departtreat/departtreat'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑;">住院</span></a>
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
 	<?php endif; ?>
 	<!-- 管理员导航栏 -->
 	<?php if(\think\Session::get('job') == 'manage'): ?>
 	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
 	<a href="<?php echo url('manage/manage'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑"> 医院信息</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('docmanage/docmanage'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">医生信息</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('officemanage/officemanage'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">科室信息</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url('medmanage/medmanage'); ?>"  style=" text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑">药品信息</span></a>
     &nbsp; &nbsp; &nbsp; <span style=" color:White;"> |</span>&nbsp;&nbsp;&nbsp;
 	<?php endif; if(\think\Session::get('job') == ''): ?>
	<a href="<?php echo url('index/index'); ?>" style="text-decoration:none;"><span style=" color:White; font-weight:bold; font-size:medium; font-family:微软雅黑"> 主页</span></a>
    &nbsp;&nbsp;&nbsp; <span style=" color:White;"> |</span> &nbsp;&nbsp;&nbsp;
 	<?php endif; ?>
</td>
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
<table style="width:480px; border-width:3px; border-style:dotted;margin-top:40px;">
<tr><td colspan=2 style="text-align:center;height:60px;">请登录医院管理信息系统</td></tr>
<tr>
	<td style="text-align:left;height:30px;"><label id="NoLabel" style="margin-left:60px;">病案号：</label></td>
	<td align=left><input type=text name="No" id="No" placeholder = "请输入病人病案号" style="width:200px; float:right; margin-right:60px;"></td>
</tr>
<tr>
	<td style="text-align:left;height:30px;"><label id="psw" style="margin-left:60px;">密码：</label></td>
	<td align=left><input type=password name="Password" style="width:200px; float:right; margin-right:60px;"></td>
</tr>
<tr>
	<td style="text-align:left;height:30px;"><label id="capcode" style="margin-left:60px;">验证码：</label></td>
	<td align=left><input type=text name="Code" style="width:100px; float:right; margin-right:60px;"><a style="float:right; "><?php echo captcha_img(); ?></a></td>
</tr>
<tr>
	<td style="text-align:left;height:30px;"><label id="iden" style="margin-left:60px;">身份：</label></td>
	<td align=left style="float:center;">
	<div style="float:right;margin-right:60px;">
	<input type="radio" id="doctor" name="job" value="doctor"><label for="doctor" onclick="showNo('doctor')">医生</label>
	<input type="radio" id="patient" name="job" value="patient"  checked onclick="showNo('patient')"><label for="patient">病人</label>
	<input type="radio" id="manage" name="job" value="manage" onclick="showNo('manage')"><label for="manage">管理员</label>
	</div>
	</td>

</tr>

<tr><td colspan=2 style="text-align:center;height:60px;">
<input type=submit name=s value="登录" style="width:120px;height:40px;color:#fff;background-color:#1E90FF;border:none;border-radius:10px;">
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
  } else if (jobType == "manage") {
    NoLabel.innerHTML = "管理员编号：";
    document.getElementById("No").placeholder = "请输入管理员编号";
  }
}
</script>
</html>