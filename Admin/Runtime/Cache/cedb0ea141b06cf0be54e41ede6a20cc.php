<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_admin.css" rel="stylesheet"/>
 	<link href="__PUBLIC__/res/css/mystage_common.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<script type="text/javascript">window.UEDITOR_HOME_URL="__PUBLIC__/ueditor/";</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_all.js"></script>
</head>
<body>
<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="#">SwordBearer</a>
		<ul>
			<li>
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
				<a class="active" href="<?php echo U(add_blog);?>">添加博客</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content" id="main_content">
	<form method="post" action="<?php echo U(addBlog);?>" onkeydown="if(event.keyCode==13){return false;}">
		<div class="input-prepend">
			<label class="add-on">标题</label>
			<input type="text" required name="blog_title" class="input-xxlarge"/>
		</div>
		<br/>
		<div class="input-prepend">
			<label class="add-on">分类</label>
			<select required name="blog_cat">
				<?php if(is_array($allCats)): $i = 0; $__LIST__ = $allCats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<span class="input-prepend">
			<label class="add-on">专栏</label>
			<select required name="blog_topic">
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><option value="<?php echo ($topic["id"]); ?>"><?php echo ($topic["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>
		<span class="input-prepend">
			<label class="add-on">类型</label>
			<select required name="blog_type">
				<?php if(is_array($allTypes)): $i = 0; $__LIST__ = $allTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>
		<!---*********编辑框***********-->
		<div>
			<script type="text/plain" id="blogEditor" name="blog_content" ></script>
			<script type="text/javascript">
			var editorWidth=document.getElementById("main_content").clientWidth-12;
				UE.getEditor("blogEditor", {
					lang:"zh-cn", //语言
					initialFrameWidth:editorWidth
				});
			</script>
		</div>
		<center style="margin:10px;">
			<input type="submit" class="btn btn-success btn-large" value="发布文章" name="publish"/>
			<input type="submit" class="btn btn-primary btn-large" value="保存草稿" name="save"/>
		</center>
	</form>
</div>
</body>
</html>