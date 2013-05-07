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
				<a class="active" href="<?php echo U(essay);?>">个人日志</a>
			</li>
			<li>
				<a href="<?php echo U(enshrine);?>">收藏</a>
			</li>
			<li>
				<a href="<?php echo U(about);?>">关于</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<!--右侧栏-->
	<div  class="rightSide">
		<!-- 所有专栏Topic -->
		<div class="baseDiv">
			<h4 class="sidebarTitle">博客专栏</h4>
			<ul class="sidebarMenu">
				<li>
					<a href="<?php echo U(essay);?>/catid/<?php echo ($curCat); ?>">全部</a>
				</li>
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U(essay);?>/catid/<?php echo ($curCat); ?>/topicid/<?php echo ($topic["id"]); ?>"><?php echo ($topic["name"]); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<!-- end 右侧栏 -->
	<div class="main baseDiv">
		<?php if(is_array($allBlogs)): $i = 0; $__LIST__ = $allBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><div class="feed">
				<div class="head">
					<span class="date"><?php echo ($blog["inputtime"]); ?></span>
					<a href="<?php echo U(blog_details);?>/blog/<?php echo ($blog["id"]); ?>" target="_parent">
						<?php if($blog['typeid'] == 1): ?><img src="__PUBLIC__/res/img/ico_original.gif" />
						<?php elseif($blog['typeid'] == 2 ): ?>
						<img src="__PUBLIC__/res/img/ico_translated.gif" />
						<?php else: ?>
						<img src="__PUBLIC__/res/img/ico_repost.gif" /><?php endif; ?>
					<?php echo ($blog["title"]); ?></a>
				</div>
				<div class="body"><?php echo ($blog["content"]); ?></div>
				<div class="foot">
					<span class="topic">专栏:<?php echo ($blog["topicname"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
					阅读(<?php echo ($blog["readcount"]); ?>)| 评论(<?php echo ($blog["commentcount"]); ?>)&nbsp;&nbsp;
					<a href="<?php echo U(blog_details);?>/blog/<?php echo ($blog["id"]); ?>" target="_blank" style="color:#666;text-decoration:underline;">阅读全文...</a>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
</body>
</html>