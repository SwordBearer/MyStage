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
<script language="Javascript">

	function editTopic(id,name){
		jQuery('#editDialog').modal('show').on('shown',function(){
		jQuery('#newTopicName').val(name);
		jQuery("#btnSave").click(function(){
			var newName=jQuery('#newTopicName').val();
			newName=newName.replace(/(^\s*)|(\s*$)/g, "");
			if(newName==name){
				return;
			}else{
			jQuery(this).attr('href','__URL__/editTopic/topicid/'+id+'/topicname/'+newName);
		}
		});
		});
	}
	function deleteTopic(id){
		jQuery('#deleteDialog').modal('show').on('shown',function(){
		jQuery("#btnDel").attr('href','__URL__/deleteTopic/topicid/'+id);
		});
	}
</script>
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
		<li class="active">
			<a href="<?php echo U(topic_manage);?>">专栏管理</a>
		</li>
		<li>
			<a href="<?php echo U(draftbox);?>">草稿箱</a>
		</li>
		<li>
			<a href="<?php echo U(wastebasket);?>">回收站</a>
		</li>
	</ul>
	<form class="input-prepend input-append" method="post" action="<?php echo U('addTopic');?>">
		<select required name="new_topic_catid">
			<option value="1" selected>伤不起的程序猿</option>
			<option value="2">个人随笔</option>
			<option value="3">美文网摘</option>
		</select>
		<input type="text" name="new_topic_name"class="input" placeholder="专栏名称" required />
		<input type="submit" class="btn btn-success" value="添加"/>
	</form>
	<form method="post" name="topic_form">
		<table class="table table-hover table-condensed table-hover">
			<thead>
				<tr class="tbl_head">
					<th>类别</th>
					<th>名称</th>
					<th>博客</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($topic["catname"]); ?></td>
						<td><?php echo ($topic["name"]); ?></td>
						<td><?php echo ($topic["blogcount"]); ?></td>
						<td>
							<input type="button" class="btn btn-small btn-warning" onClick="editTopic(<?php echo ($topic["id"]); ?>,'<?php echo ($topic["name"]); ?>')" value="编辑">
							<input type="button" class="btn btn-small btn-danger"onClick="deleteTopic(<?php echo ($topic["id"]); ?>)" value="删除">
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</form>
	<div class="modal hide fade" id="editDialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>修改专栏</h3>
		</div>
		<div class="modal-body form-inline">
			<label>请输入新的专栏名称</label><input id="newTopicName" class="input-xlarge" type="text" autofocus/>
		</div>
		<div class="modal-footer">
			<a id="btnSave" href="#" class="btn btn-primary">保存</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
		</div>
	</div>
	<div class="modal hide" id="deleteDialog">
		<div class="modal-header warning">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>删除专栏</h3>
		</div>
		<div class="modal-body">
			<lable>确定要删除该专栏吗？</lable>
		</div>
		<div class="modal-footer">
			<a id="btnDel" href="#" class="btn btn-danger">删除</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
		</div>
	</div>
</div>
</body>
</html>