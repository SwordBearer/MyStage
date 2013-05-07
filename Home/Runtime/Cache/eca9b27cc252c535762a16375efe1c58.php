<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<!-- link google font -->
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700|Nunito' rel='stylesheet' type='text/css'>
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
 	<link href="__PUBLIC__/res/css/mystage_home.css" rel="stylesheet"/>
 	<link href="__PUBLIC__/res/css/mystage_common.css" rel="stylesheet"/>
</head>
<body>
<div class="nav">
  <div class="nav-inner">
    <a class="brand" href="#">SwordBearer's Lab</a>
    <ul>
      <li>
        <a href="<?php echo U(index);?>">首页</a>
      </li>
      <li>
        <a href="<?php echo U(monkey);?>">程序猿</a>
      </li>
      <li>
        <a href="<?php echo U(essay);?>">个人日志</a>
      </li>
      <li>
        <a href="<?php echo U(enshrine);?>">收藏</a>
      </li>
      <li>
        <a  class="active" href="<?php echo U(about);?>">关于</a>
      </li>
    </ul>
  </div>
</div>
<div class="main_content">
  <!--右侧栏-->
  <div  class="rightSide">
    <div id="weiboInfo" class="baseDiv">
      <h4 class="sidebarTitle">W T F ?</h4>
      <!-- 微博秀 -->
      <iframe width="100%" height="600" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=600&fansRow=2&ptype=1&speed=0&skin=9&isTitle=0&noborder=0&isWeibo=1&isFans=1&uid=2407334984&verifier=ec0391a3&dpc=1"></iframe>
      <ul class="sidebarMenu">
        <li>日访问量：237</li>
        <li>总访问量：3743</li>
      </ul>
    </div>
  </div>
  <!-- end 右侧栏 -->
  <!-- 主要内容 -->
  <div class="main">
  </div>
</div>
</body>
</html>