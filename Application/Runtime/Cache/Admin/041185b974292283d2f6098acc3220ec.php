<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="/moshop/Public/Admin/styles/reset.css">
<link type="text/css" rel="stylesheet" href="/moshop/Public/Admin/styles/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="../js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="/moshop/Public/Admin/images/logo.png" alt="渔沙坦影院网"></a>
			</div>
			<h3 class="welcome_title">欢迎登陆</h3>
		</div>
	</div>
</div>

<div class="loginBox">
	<div class="login_cont">
	<form method="post">
		<table>
			<ul class="login">
				<li class="l_tit">管理员帐号</li>
				<li class="mb_10"><input type="text"  name="aname" placeholder="请输入管理员帐号"class="login_input user_icon"></li>
				<li class="l_tit">密码</li>
				<li class="mb_10"><input type="password"  name="apassword" class="login_input password_icon"></li>
				
				<li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label></li>
				<li><input type="submit" value="" class="login_btn"></li>
			</ul>
			</table>
		</form>
	</div>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p>广州渔沙坛幼儿园与影视股份有限公司Copyright &copy2017  <a href="http:/www.apoloo.win">Apoloo.win</a> Inc. All rights reserved.</p>
<p>粤ICP证000000号 网络视听许可证0108265号网络文化经营许可证 广播电视节目制作经营许可证(京)字第0000号 粤公网安备：88888888888号</p>
</div>
</body>
</html>