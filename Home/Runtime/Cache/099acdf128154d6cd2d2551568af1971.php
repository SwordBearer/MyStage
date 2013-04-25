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
	<div class="navbar navbar-inverse navbar-fixesd-top">
		<div class="navbar-inner">
			<div class="container">
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
</div>
<div class="main_content">
	<!--右侧栏-->
	<div  class="rightSide">
		<!-- 所有专栏Topic -->
		<div id="commnets" class="baseDiv">
			<h4 class="sidebarTitle">博客专栏</h4>
			<ul class="sidebarMenu">
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><li>
						<a href=""><?php echo ($topic["name"]); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<!-- end 右侧栏 -->
	<div class="main baseDiv">
		<?php if(is_array($allBlogs)): $i = 0; $__LIST__ = $allBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><div class="blogEntry">
				<span class="ico_type_Original"/>
				<a href="<?php echo U(blog_details);?>/blogid/<?php echo ($blog["id"]); ?>" target="_blank"><?php echo ($blog["title"]); ?></a>
				<div class="blogManage">
					<?php echo ($blog["inputtime"]); ?>&nbsp;[<?php echo ($blog["readcount"]); ?>/<?php echo ($blog["commentcount"]); ?>]
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
</body>
</html>