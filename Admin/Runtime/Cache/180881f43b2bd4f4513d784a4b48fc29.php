<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer">
	<link href="__PUBLIC__/admin/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/admin/css/mystage_admin.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/admin/js/jquery-1.9.1.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/admin/js/bootstrap.min.js" type="text/javascript"></script>
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
</body>
</html>