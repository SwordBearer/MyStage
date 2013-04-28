<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_admin.min.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>

<script language="Javascript">
	function wasteBlog(id){
		jQuery("#btnDel").attr('href','__URL__/wasteBlog/blogid/'+id);
		jQuery('#deleteDialog').modal('show');
	}
</script>
</head>
<body>
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<a class="brand" href="#">SwordBearer</a>
		<ul class="nav">
			<li class="active">
				<a href="<?php echo U(index);?>">博客管理</a>
			</li>
			<li>
				<a href="<?php echo U(topic_manage);?>">专栏管理</a>
			</li>
			<li>
				<a href="<?php echo U(draftbox);?>">草稿箱</a>
			</li>
			<li>
				<a href="<?php echo U(wastebasket);?>">回收站</a>
			</li>
			<li>
				<a href="<?php echo U(add_blog);?>">添加博客</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<h3><?php echo ($curBlog["title"]); ?></h3>
	<div class="blog_info">
		<label>评论数<?php echo ($curBlog["commentcount"]); ?></label>
		<label>创建日期<?php echo ($curBlog["inputtime"]); ?></label>
		<label>修改日期<?php echo ($curBlog["updatetime"]); ?></label>
	</div>
	<div><?php echo ($curBlog["content"]); ?></div>
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
</body>
</html>