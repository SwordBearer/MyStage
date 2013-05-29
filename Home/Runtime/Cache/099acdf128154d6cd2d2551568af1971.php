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
<title>键人唐--<?php echo ($curBlog["title"]); ?></title>
<link href="__PUBLIC__/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>
</head>
<body>
<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="<?php echo U(index);?>">SwordBearer's Lab</a>
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
				<a href="<?php echo U(about);?>">关于</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<!--右侧栏-->
	<div  class="rightSide baseDiv">
		<div class="sidebarTitle">W T F ?</div>
		<ul class="sidebarMenu">
			<li>日访问量：437</li>
			<li>总访问量：6743</li>
			<li>原创(231) | 转载(34) | 翻译(9)</li>
		</ul>
		<h4 class="sidebarTitle">相关推荐</h4>
		<ul class="sidebarList">
			<?php if(is_array($recentBlogs)): $i = 0; $__LIST__ = $recentBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="<?php echo U(blog_details);?>/blog/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<!-- end 右侧栏 -->
	<!-- 左侧栏：显示博客内容 -->
	<div class="main baseDiv">
		<div class="blogDetails">
			<div class="title"><?php echo ($curBlog["title"]); ?></div>
			<div class="info">
				阅读(<?php echo ($curBlog["readcount"]); ?>) |
				<a href="#commentTitle">评论(<?php echo ($curBlog["commentcount"]); ?>)</a>
				&nbsp;&nbsp;&nbsp;
					发表于<?php echo ($curBlog["inputtime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
				专栏:<?php echo ($curBlog["topicname"]); ?>
			</div>
			<div class="blogBody"><?php echo ($curBlog["content"]); ?></div>
			<br/>
			<!-- 百度分享控件 -->
			<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"   style="float: right;">
				<a class="bds_qzone"></a>
				<a class="bds_tsina"></a>
				<a class="bds_tqq"></a>
				<a class="bds_renren"></a>
				<a class="bds_t163"></a>
				<span class="bds_more">更多</span>
				<a class="shareCount"></a>
			</div>
		</div>
		<br/>
		<br/>
		<div class="dividerTitle"id="commentTitle">评论</div>
		<div class="commentList">
			<?php if(empty($allComms)): ?><span style="margin:10px;">暂无评论</span>
				<?php else: ?>
				<?php if(is_array($allComms)): $i = 0; $__LIST__ = $allComms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm): $mod = ($i % 2 );++$i;?><div class="commDiv">
						<table>
							<tr>
								<td>
									<div class="commInfo">
										<?php echo ($comm["inputtime"]); ?>
										<br/>
										<a>IP:<?php echo ($comm["ipstr"]); ?></a>
									</div>
								</td>
								<td>
									<p class="comm"><?php echo ($comm["content"]); ?></p>
								</td>
							</tr>
						</table>
					</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
		<div class="dividerTitle" id="addCommDiv">发表评论</div>
		<form class="commForm" action="<?php echo U(addComm);?>" method="post">
			<span>请输入评论内容:</span>
			<br/>
			<textarea name="comm" required></textarea>
			<br/>
			<input type="hidden" name="blog" value="<?php echo ($curBlog["id"]); ?>"/>
			<input style="btn btn-success" type="submit" value="提交"/>
		</form>
	</div>
</div>

<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=870942" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->

<!-- 回到顶部 -->
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
</body>
</html>