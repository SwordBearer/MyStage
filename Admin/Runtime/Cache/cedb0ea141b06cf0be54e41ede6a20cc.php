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
<script type="text/javascript" charset="utf-8">
window.UEDITOR_HOME_URL = "__PUBLIC__/ueditor/";</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_all.js"></script>

</head>
<body>
<div class="container">
	<div class="inner_nav ">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="">添加博客</a>
			</li>
			<li>
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
		</ul>
	</div>
	<div class="main_contant">
		<span class="form-inline" style="width:100%;">
			<select required id="blog_type">
				<option value="-1">请选择类别</option>
				<option value="1">原创</option>
				<option value="2">翻译</option>
				<option value="3">转载</option>

			</select>
			<input type="text"style="width:600px;" placeholder="博客标题"/>
		</span>
		<div>
			<script type="text/plain" id="blogEditor" name="article_content" >请输入博文</script>
			<script type="text/javascript">
				UE.getEditor("blogEditor", {
					theme:"default", //皮肤
					lang:"zh-cn" //语言
				});
			</script>
		</div>
	</div>
</div>
</body>
</html>