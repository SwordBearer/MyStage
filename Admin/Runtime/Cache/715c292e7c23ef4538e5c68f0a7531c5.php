<?php if (!defined('THINK_PATH')) exit();?>
<script type="text/javascript">window.UEDITOR_HOME_URL="__PUBLIC__/ueditor/";</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/editor_all.js"></script>
</head>
<body>
<div class="main_contant" id="main_vid">
	<ul class="nav nav-pills">
		<li>
			<a href="<?php echo U(index);?>">博客管理</a>
		</li>
		<li class="active">
			<a href="<?php echo U(add_blog);?>">添加博客</a>
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
	</ul>
	<form method="post" action="<?php echo U(addBlog);?>">
		<span class="input-prepend input-append" style="width:100%;">
			<select required name="blog_cat">
				<?php if(is_array($allCats)): $i = 0; $__LIST__ = $allCats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<select required name="blog_topic">
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><option value="<?php echo ($topic["id"]); ?>"><?php echo ($topic["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<select required name="blog_type">
				<?php if(is_array($allTypes)): $i = 0; $__LIST__ = $allTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>
		<!---*********编辑框***********-->
		<div>
			<script type="text/plain" id="blogEditor" name="blog_content" ><?php echo ($currentBlog["content"]); ?></script>
			<script type="text/javascript">
			var editorWidth=document.getElementById("main_vid").clientWidth-16;
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
		<input type="text" required name="blog_title" style="min-width:80%;" placeholder="博客标题"/>

	</form>
</div>
</body>
</html>