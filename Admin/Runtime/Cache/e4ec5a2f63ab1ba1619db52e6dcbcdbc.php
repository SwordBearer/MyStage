<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_admin.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<script language="Javascript">
	function deleteBlog(id){
		jQuery("#btnDel").attr('href','__URL__/deleteBlog/blogid/'+id);
		jQuery('#deleteDialog').modal('show');
	}
</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">SwordBearer</a>
			<ul class="nav">
				<li>
					<a href="<?php echo U(index);?>">博客管理</a>
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
				<li>
					<a href="<?php echo U(add_blog);?>">添加博客</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="main_content">
	<form method="post" name="blog_form">
		<?php if(empty($allBlogs)): ?>暂时没有回收的博客
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
							<td>
								<a href="<?php echo U(blog_details);?>/blogid/<?php echo ($blog["id"]); ?>"><?php echo ($blog["title"]); ?></a>
							</td>
							<td><?php echo ($blog["topicname"]); ?></td>
							<td><?php echo ($blog["inputtime"]); ?></td>
							<td>
								<a href="<?php echo U(recoveryBlog);?>/blogid/<?php echo ($blog["id"]); ?>"class="btn btn-small btn-success">恢复</a>
								<a class="btn btn-small" onClick="deleteBlog(<?php echo ($blog["id"]); ?>)" >删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table><?php endif; ?>
	</form>
	<div class="modal hide" id="deleteDialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>删除博客</h3>
		</div>
		<div class="modal-body">
			<lable>确定要删除该博客吗(此操作将彻底删除博客！！！)？</lable>
		</div>
		<div class="modal-footer">
			<a id="btnDel" href="#" class="btn btn-danger">删除</a>
			<a class="btn" data-dismiss="modal" aria-hidden="true">取消</a>
		</div>
	</div>
</div>
</body>
</html>