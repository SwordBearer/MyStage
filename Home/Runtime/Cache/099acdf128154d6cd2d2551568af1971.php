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
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">SwordBearer's Lab</a>
				<ul class="nav">
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
	</div>
</div>
<div class="main_content">
	<div class="blogDetails baseDiv">
		<div class="head">
			<a class="title" href="<?php echo U(blog_details);?>/blogid/<?php echo ($curBlog["id"]); ?>" target="_parent"><?php echo ($curBlog["title"]); ?></a>
			<div class="blogInfo">
				<span style="display:inline;">
					发表于<?php echo ($curBlog["inputtime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
				专栏:<?php echo ($curBlog["topicname"]); ?>&nbsp;&nbsp;&nbsp;
			阅读(<?php echo ($curBlog["readcount"]); ?>) | 评论(<?php echo ($curBlog["commentcount"]); ?>)
				</span> 
				<!-- Baidu Button BEGIN -->
					<div id="bdshare" style="float:right;"class="bdshare_t bds_tools get-codes-bdshare">
						<span class="bds_more">分享到：</span>
						<a class="bds_tsina"></a>
						<a class="bds_qzone"></a>
						<a class="bds_tqq"></a>
						<a class="bds_renren"></a>
						<a class="bds_t163"></a>
						<a class="shareCount"></a>
					</div>
					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=870942" ></script>
					<script type="text/javascript" id="bdshell_js"></script>
					<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
					<!-- Baidu Button END -->
			</div>
		</div>
		<div class="blogBody"><?php echo ($curBlog["content"]); ?></div>
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