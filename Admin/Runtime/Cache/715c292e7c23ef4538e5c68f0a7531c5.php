<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<!-- link google font -->
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700|Nunito' rel='stylesheet' type='text/css'>
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_admin.css" rel="stylesheet"/>
 	<link href="__PUBLIC__/res/css/mystage_common.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<script type="text/javascript">window.UEDITOR_HOME_URL="__PUBLIC__/ueditor/";</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_all.js"></script>
<style type="text/css">
.blogInfo{
	width:160px;
	margin-right:20px;
}
.blogTitle{
	width:860px;
}
</style>
</head>
<body>

<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="#">SwordBearer's Lab</a>
		<ul>
			<li>
				<a class="active" href="<?php echo U(index);?>">博客管理</a>
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
<div class="main_content" id="main_content">
	<form method="post" action="<?php echo U(saveBlog);?>" onkeydown="if(event.keyCode==13){return false;}">
		<div class="input-prepend">
			<label class="add-on">标题</label>
			<input type="text" required name="blog_title" class="blogTitle" value="<?php echo ($curBlog["title"]); ?>"/>
		</div>
		<br/>
		<div class="input-prepend">
			<label class="add-on">分类</label>
			<select required name="blog_cat" class="blogInfo">
				<?php if(is_array($allCats)): $i = 0; $__LIST__ = $allCats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i; if($cat["id"] == $curBlog["catid"] ): ?><option value="<?php echo ($cat["id"]); ?>" selected><?php echo ($cat["name"]); ?></option>
						<?php else: ?>
						<option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<div class="input-prepend">
			<label class="add-on">专栏</label>
			<select required name="blog_topic" class="blogInfo">
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i; if($topic["id"] == $curBlog["topicid"] ): ?><option value="<?php echo ($topic["id"]); ?>" selected ><?php echo ($topic["name"]); ?></option>
						<?php else: ?>
						<option value="<?php echo ($topic["id"]); ?>"><?php echo ($topic["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<div class="input-prepend">
			<label class="add-on">类型</label>
			<select required name="blog_type" class="blogInfo">
				<?php if(is_array($allTypes)): $i = 0; $__LIST__ = $allTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i; if($type["id"] == $curBlog["typeid"] ): ?><option value="<?php echo ($type["id"]); ?>" selected><?php echo ($type["name"]); ?></option>
						<?php else: ?>
						<option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<span class="input-prepend">
			<label class="add-on">创建日期</label>
			<input class="blogInfo" type="text" name="blog_time" value="<?php echo ($curBlog["inputtime"]); ?>"/>
		</span>
		<input type="hidden" value="<?php echo ($curBlog["id"]); ?>" name="blog_id"/>
		<!---*********编辑框***********-->
		<div>
			<script type="text/plain" id="blogEditor" name="blog_content" ><?php echo ($curBlog["content"]); ?></script>
			<script type="text/javascript">
			var editorWidth=document.getElementById("main_content").clientWidth-12;
				UE.getEditor("blogEditor", {
					lang:"zh-cn", //语言
					initialFrameWidth:editorWidth
				});
			</script>
		</div>
		<center style="margin:10px;">
			<input type="submit" class="btn btn-success btn-large" value="发布博客" name="publish"/>
			<input type="submit" class="btn btn-primary btn-large" value="保存为草稿" name="save"/>
		</center>
	</form>
</div>
</body>
</html>