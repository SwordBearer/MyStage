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
<script language="Javascript">
	function wasteBlog(id){
		jQuery("#btnDel").attr('href','__URL__/wasteBlog/blogid/'+id);
		jQuery('#deleteDialog').modal('show');
	}
</script>
</head>
<body>
<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="#">SwordBearer's Lab</a>
		<ul>
			<li>
				<a  class="active" href="<?php echo U(index);?>">博客管理</a>
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
			<li>
				<a href="__GROUP__/Public/logout">退出</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<form method="post" name="blog_form">
		<?php if(empty($allBlogs)): ?>暂时没有博客
			<?php else: ?>
			<table class="table table-condensed table-hover" >
				<thead class="tbl_head">
					<tr>
						<th>ID</th>
						<th>标题</th>
						<th>专栏</th>
						<th>创建时间</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($allBlogs)): $i = 0; $__LIST__ = $allBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($blog["id"]); ?></td>
							<td style="text-align:left;">
								<a href="<?php echo U(blog_details);?>/blog/<?php echo ($blog["id"]); ?>"><?php echo ($blog["title"]); ?></a>
							</td>
							<td><?php echo ($blog["topicname"]); ?></td>
							<td><?php echo ($blog["inputtime"]); ?></td>
							<td>
								<a href="<?php echo U(edit_blog);?>/blog/<?php echo ($blog["id"]); ?>"class="btn btn-small">编辑</a>
								<a class="btn btn-small" onClick="wasteBlog(<?php echo ($blog["id"]); ?>)" >删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table><?php endif; ?>
	</form>
</div>
<div class="modal hide" id="deleteDialog">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>删除博客</h3>
	</div>
	<div class="modal-body">
		<lable>确定要删除该博客吗(可以从回收站中找回)？</lable>
	</div>
	<div class="modal-footer">
		<a id="btnDel" href="#" class="btn btn-danger">删除</a>
		<a class="btn" data-dismiss="modal" aria-hidden="true">取消</a>
	</div>
</div>
</body>
</html>