<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\AppServ\www\DbFinal2023/application/index\view\recipet\recipet.html";i:1684911432;s:24:"./public/common/top.html";i:1684911694;}*/ ?>
<meta charset="utf-8">
<center>
<table width=999px border=0>
<tr>
<td rowspan=2><img src="/dbFinal2023/public/static/pic/logo.jpg" style="width:250px; height:68px"> </td>

<td style="font-size:16px; float:center;"><?php echo \think\Session::get('No'); ?>欢迎使用医院管理系统</td>

<!-- <td style="background:url('/dbFinal2023/public/static/image/topxmenubg.jpg'); font-size:x-small;text-align:center;">
<a href="member.php" style="text-decoration:none;">我的帐户</a>|
<a href="<?php echo url('order/showorder'); ?>" style="text-decoration:none;">我的订单</a>|
<a href="<?php echo url('cart/index'); ?>" style="text-decoration:none;">购物车</a>|
</td> -->
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
</table></center>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="/dbFinal2023/public/static/css/recipet.css" rel="stylesheet" type="text/css">
<title>Insert title here</title>
</head>

<body>
<center>

<div id="info_content">
	<div id="info_block">
		<div>姓名:</div>
		<div><input type="text" name="patName" value="张三"></div>
	</div>
	<div id="info_block">
		<div>性别:</div>
		<div><input type="text" name="sex" value="男"></div>
	</div>
	<div id="info_block">
		<div>电话号码:</div>
		<div><input type="text" name="telephone" value="13812345678"></div>
	</div>
	<div id="info_block">
		<div>病案号:</div>
		<div><input type="text" name="patNo" value="13812345678"></div>
	</div>
	<div id="info_long_block">
		<div>住址:</div>
		<div><input type="text" name="address" value="13812345678"></div>
	</div>
	<div id="symptom_block">
		<div>症状:</div>
		<div><textarea rows="3" cols="80"></textarea></div>
	</div>
</div>

<div id="recipet_content">
	<div id="recipet_left_block">
		<table>
			<tr>
				<th>编号</th>
				<th>名称</th>
				<th>单价</th>
				<th>用法</th>
				<th>数量</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>YP202301</td>
				<td>阿司匹林</td>
				<td>3</td>
				<td>口服，每次一片，每天</td>
				<td><input type="text" name="num" value="1"></td>
				<td><button id="move_button">移除</button></td>
			</tr>
			<tr>
				<td>YP202301</td>
				<td>阿司匹林</td>
				<td>3</td>
				<td>口服，每次一片，每天</td>
				<td><input type="text" name="num" value="1"></td>
				<td><button id="move_button">移除</button></td>
			</tr>
			<tr>
				<td>YP202301</td>
				<td>阿司匹林</td>
				<td>3</td>
				<td>口服，每次一片，每天</td>
				<td><input type="text" name="num" value="1"></td>
				<td><button id="move_button">移除</button></td>
			</tr>
			<tr>
				<td>YP202301</td>
				<td>阿司匹林</td>
				<td>3</td>
				<td>口服，每次一片，每天</td>
				<td><input type="text" name="num" value="1"></td>
				<td><button id="move_button">移除</button></td>
			</tr>
		</table>
	</div>
	
	<div id="recipet_right_block">
		<div id="search_bar">
			<input type="text" name="search" placeholder="输入药品名称">
			<button>搜索</button>
		</div>
		<div>
			<table>
				<tr>
					<th>编号</th>
					<th>名称</th>
					<th>价格</th>
					<th>库存</th>
					<th>操作</th>
				</tr>
				<tr>
					<td>YP202301</td>
					<td>阿司匹林</td>
					<td>3</td>
					<td>200</td>
					<td><button id="add_btn">添加</button></td>
				</tr>
				<tr>
					<td>YP202301</td>
					<td>阿司匹林</td>
					<td>3</td>
					<td>200</td>
					<td><button id="add_btn">添加</button></td>
				</tr>
			</table>
		</div>
	</div>
	<div id="bottom_button">
		<button id="save_btn">保存</button>
		<button id="apply_btn">申请住院</button>
		<button id="over_btn">结束就诊</button>
	</div>
</div>


</center>

</body>

</html>