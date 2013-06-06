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
<title>键人唐的博客</title>
<body>
<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="<?php echo U(index);?>">SwordBearer's Lab</a>
		<ul class="nav-menu">
			<li></li>
			<li>
				<a class="active" href="<?php echo U(index);?>">首页</a>
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
				<a href="#">相册</a>
			</li>
			<li>
				<a href="<?php echo U(about);?>">关于</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<!--右侧栏-->
	<div  class="rightSide baseDiv">
		<!-- <div class="sideDiv">
		<div class="sidebarTitle">W T F ?</div>
		<ul class="sidebarMenu">
			<li>日访问量：237</li>
			<li>总访问量：3743</li>
			<li>原创(231) | 转载(34) | 翻译(9)</li>
		</ul>
	</div>
	<hr/>
	-->
	<!-- 微博秀 -->
	<iframe width="100%" height="600" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=600&fansRow=2&ptype=1&speed=0&skin=9&isTitle=0&noborder=0&isWeibo=1&isFans=1&uid=2407334984&verifier=ec0391a3&dpc=1"></iframe>
</div>
<!-- end 右侧栏 -->
<!-- 主要内容 -->
<div class="feedDiv baseDiv">
	<?php if(is_array($allBlogs)): $i = 0; $__LIST__ = $allBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><div class="feed">
			<div class="head">
				<!-- <span class="date"><?php echo ($blog["inputtime"]); ?></span>
			-->
			<a href="<?php echo U(blog_details);?>/blog/<?php echo ($blog["id"]); ?>" target="_blank">
				<?php if($blog['catid'] == 1): ?><img src="__PUBLIC__/res/img/ico_monkey.png" />
					<?php elseif($blog['catid'] == 2 ): ?>
					<img src="__PUBLIC__/res/img/ico_essay.png" />
					<?php else: ?>
					<img src="__PUBLIC__/res/img/ico_enshrine.png" /><?php endif; ?>
				<?php echo ($blog["title"]); ?>
			</a>
		</div>
		<!-- <div class="body"><?php echo ($blog["content"]); ?></div>
	-->
	<div class="foot">
		<span class="topic">专栏:<?php echo ($blog["topicname"]); ?></span>
		&nbsp;&nbsp;
		阅读(<?php echo ($blog["readcount"]); ?>)&nbsp;&nbsp;
		<a href="<?php echo U(blog_details);?>/blog/<?php echo ($blog["id"]); ?>#commentTitle" target="_blank">评论(<?php echo ($blog["commentcount"]); ?>)</a>
</div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="gototop" style="display:none;">
<a id="gototop_hint" href="#" title="回到顶部">
<img src="__PUBLIC__/res/img/gototop.png" alt="TOP" />
</a>
</div>
<script type="text/javascript">
    $(function(){
        var d_top=$('#gototop');
        document.onscroll=function(){
            var scrTop=(document.body.scrollTop||document.documentElement.scrollTop);
            if(scrTop>500){
                d_top.show();
            }else{
                d_top.hide();
            }
        }
        $('#gototop_hint').click(function(){
            scrollTo(0,0);
            this.blur();
            return false;
        });
    });
	</script>
</div>
</body>
</html>