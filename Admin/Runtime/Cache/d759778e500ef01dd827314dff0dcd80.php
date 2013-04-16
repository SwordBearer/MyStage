<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>SwordBearer</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="author" content="xmu.SwordBearer[email:ranxiedao@163.com]">
	<link href="__PUBLIC__/admin/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/admin/css/mystage_admin.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/admin/js/jquery-1.9.1.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/admin/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<!-- Navbar ================================= -->
<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="">SwordBearer</a>
      <ul class="nav">
        <li class="active">
          <a href="__GROUP__/Blog/index">个人博客</a>
        </li>
        <li>
          <a href="__GROUP__/Enshrine/index">美文网摘</a>
        </li>
        <li>
          <a href="__GROUP__/Ads/index">广告管理</a>
        </li>
        <li>
          <a href="__GROUP__/Public/about">关于</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<body>
<div class="inner_nav container">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="">博客管理</a>
		</li>
		<li>
			<a href="#">类别管理</a>
		</li>
		<li>
			<a href="#">博客栏目</a>
		</li>
		<li>
			<a href="#">草稿箱</a>
		</li>
		<li>
			<a href="#">回收站</a>
		</li>
		<a class="btn btn-primary" href="__GROUP__/Blog/add_blog" style="margin-left:60px;"> <i class="icon-plus icon-white"></i>
			添加博客
		</a>
	</ul>
	<div class="main">
		<input type="text"   placeholder="Email"/>
		<input type="password"   placeholder="Password"/>
	</div>
</div>
</body>
</html>