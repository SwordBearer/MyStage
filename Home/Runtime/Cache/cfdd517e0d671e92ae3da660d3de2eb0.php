<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_home.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<body>
<div class="header">
	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<a class="brand" href="#">SwordBearer's Stage</a>
			<ul class="nav">
				<li class="active">
					<a href="<?php echo U(index);?>">首页</a>
				</li>
				<li>
					<a href="#">程序猿</a>
				</li>
				<li>
					<a href="#">个人日志</a>
				</li>
				<li>
					<a href="#">收藏</a>
				</li>
				<li>
					<a href="#">关于</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="main_content">
	<div class="baseDiv main"></div>
	<div class="sidebar">
		<div id="weiboInfo" class="baseDiv">
			<h4 class="sidebarTitle">W T F ?</h4>
			<ul class="sidebarMenu">
				<li><a>日访问量:200</a></li>
				<li><a>总访问量:3000</a></li>
			</ul>
			<iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=1&ptype=1&speed=100&skin=9&isTitle=0&noborder=1&isWeibo=1&isFans=0&uid=2407334984&verifier=ec0391a3&dpc=1"></iframe>
		</div>
		<div id="commnets" class="baseDiv">
			<h4 class="sidebarTitle">博客专栏</h4>
			<ul class="sidebarMenu">
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><li>
						<a href=""><?php echo ($topic["name"]); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
</body>
</html>