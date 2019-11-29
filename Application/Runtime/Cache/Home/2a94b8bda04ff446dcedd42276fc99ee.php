<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<link type="text/css" rel="stylesheet" href="/moshop/Public/Home/style/reset.css">
<link type="text/css" rel="stylesheet" href="/moshop/Public/Home/style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<?php if(($_SESSION['username'])): ?><div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏慕课</a>
			</div>
			<div class="rightArea">
				欢迎&nbsp;<strong><?php echo (session('username')); ?></strong>&nbsp;来到慕课网！<a href="<?php echo U('Car/car');?>">购物车</a>&nbsp;&nbsp;<a href="<?php echo U('Index/logout');?>">退出</a>
			</div>
		</div>
	</div>

	<?php else: ?>
	<div class="topBar">
    <div class="comWidth">
      <div class="leftArea">
        <a href="#" class="collection">收藏</a>
      </div>
      <div class="rightArea">
        欢迎来到慕课网！<a href="<?php echo U('login');?>">[登录]&nbsp;</a><a href="<?php echo U('reg');?>">[免费注册]</a> 
      </div>
    </div>
    </div><?php endif; ?>
	<!--顶部-->
	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="/moshop/Public/Home/images/logo.jpg" alt="慕课网"></a>
			</div>
			<div class="search_box fl">
			<form method="post">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr">
			</form>
			</div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0</span>
			</div>
		</div>
	</div>
	<div class="navBox">
		<div class="comWidth clearfix">
			<div class="shopClass fl">
				<h3>全部商品分类<i class="shopClass_icon"></i></h3>
				<div class="shopClass_show">
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
				</div>
				<div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
			</div>
			<ul class="nav fl">
				<li><a href="#" class="active">数码城</a></li>
				<li><a href="#">天黑黑</a></li>
				<li><a href="#">团购</a></li>
				<li><a href="#">发现</a></li>
				<li><a href="#">二手特卖</a></li>
				<li><a href="#">名品会</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="banner comWidth clearfix">
	<div class="banner_bar banner_big">
		<ul class="imgBox">
			<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_01.jpg" alt="banner"></a></li>
			<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_02.jpg" alt="banner"></a></li>
		</ul>
		<div class="imgNum">
			<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
		</div>
	</div>
</div>
<div class="shopTit comWidth">
	<span class="icon"></span><h3>家用电脑</h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_sm_01.jpg" alt="banner"></a></li>
				<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_sm_02.jpg" alt="banner"></a></li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top clearfix">
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
		</div>
		<div class="shopList_sm clearfix">
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shopTit comWidth">
	<span class="icon"></span><h3>家用电脑</h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_sm_01.jpg" alt="banner"></a></li>
				<li><a href="#"><img src="/moshop/Public/Home/images/banner/banner_sm_02.jpg" alt="banner"></a></li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top clearfix">
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
		</div>
		<div class="shopList_sm clearfix">
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#"><img src="/moshop/Public/Home/images/shopImg.jpg" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>￥149.00	</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">慕课简介</a><i>|</i><a href="#">慕课公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/ images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>