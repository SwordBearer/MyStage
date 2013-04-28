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
		<div class="title">
			<a href="<?php echo U(blog_details);?>/blogid/<?php echo ($blog["id"]); ?>" target="_parent"><?php echo ($curBlog["title"]); ?></a>
		</div>
		<div class="blogInfo"></div>
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