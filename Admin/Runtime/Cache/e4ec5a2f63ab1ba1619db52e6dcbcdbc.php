<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="xmu.SwordBearer">
	<link href="__PUBLIC__/admin/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/admin/css/mystage_admin.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/admin/js/jquery-1.9.1.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/admin/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<!-- Navbar ================================= -->
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="" style="padding:20px;">SwordBearer</a>
    <ul class="nav" >
      <li   class="active">
        <a href="__GROUP__/Blog/index" style="padding:20px;">个人博客</a>
      </li>
      <li>
        <a href="__GROUP__/Enshrine/index"  style="padding:20px;">美文网摘</a>
      </li>
      <li>
        <a href="__GROUP__/Public/about"  style="padding:20px;">关于</a>
      </li>
    </ul>
  </div>
</div>
</head>
<body>
	<div class="main_contant">
		<ul class="nav nav-pills">
		<li>
			<a href="<?php echo U(index);?>">博客管理</a>
		</li>
		<li>
			<a href="<?php echo U(add_blog);?>">添加博客</a>
		</li>
		<li>
			<a href="<?php echo U(topic_manage);?>">专栏管理</a>
		</li>
		<li>
			<a href="<?php echo U(draftbox);?>">草稿箱</a>
		</li>
		<li class="active">
			<a href="<?php echo U(wastebasket);?>">回收站</a>
		</li>
	</ul>
	</div>
</body>
</html>