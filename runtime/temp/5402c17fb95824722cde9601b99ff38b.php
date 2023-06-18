<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\AppServ\www\DbFinal2023/application/index\view\index\index.html";i:1684930085;s:24:"./public/common/top.html";i:1687084028;s:27:"./public/common/bottom.html";i:1685260531;}*/ ?>
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
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link href="/DbFinal2023/public/static/css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<div id="news">
	<table>
		<tr>
			<td><h3>医院资讯</h3></td>
			<td><h3>医院通知</h3></td>
		</tr>
		<tr>
			<td>
				<ul>
					<li><a href="#">医院医疗专家组赴所罗门群岛开展医疗巡诊活动</a></li>
					<li><a href="#">大咖身份首次曝光!科普大赛超强阵容评审团.</a></li>
					<li><a href="#">五四表彰大会暨团旗飘飘风采展示晚会圆满举办</a></li>
					<li><a href="#">点赞!医院创伤骨科主任王芳获评“好医生”称号</a></li>
					<li><a href="#">呼吸与危重症医学科举办第21个世界哮喘日活动</a></li>
				</ul>
			</td>
			<td>
				<ul>
					<li><a href="#">通知：自即日起，就诊前请务必提前预约挂号。</a></li>
					<li><a href="#">本周五下午2点举行儿童健康讲座，欢迎家长参加。</a></li>
					<li><a href="#">免费心脏病筛查活动即将开始，详情请点击链接了解更多信息。</a></li>
				</ul>
			</td>
		</tr>
	</table>
</div>
<div id="content">
	<div id="sidebar">
		<h3>健康提示</h3>
		<ul>
			<li><a href="#">炎炎夏日,避免暴晒，注意中暑预防。</a></li>
			<li><a href="#">如何判断感冒和流感的区别？</a></li>
			<li><a href="#">多吃水果和蔬菜，保持饮食均衡。</a></li>
			<li><a href="#">每天进行适量的身体运动，保持健康。</a></li>
			<li><a href="#">做好心理调节，保持心理健康。</a></li>
			<li><a href="#">规律作息，保证充足的睡眠时间。</a></li>
			<li><a href="#">勤洗手，注意个人卫生，预防传染病。</a></li>
			<li><a href="#">戒烟限酒，避免不良生活习惯</a></li>
			<li><a href="#">定期体检，早发现早治疗疾病。</a></li>
		</ul>
	</div>
    <div id="img">
			<img src="/DbFinal2023/public/static/image/hospital.jpg">
    </div>
</div>
	<div id="footer" style="width:100%;border-top:1px solid #ccc;padding:5px;">
Copyright © 2023, hospitalcn.com, All Rights Reserved 粤华师备 23102013039号 粤ICP备 123456号
</div>
</center>
</body>
</html>