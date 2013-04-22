<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer[ranxiedao@163.com]">
	<link href="__PUBLIC__/res/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/res/css/mystage_admin.min.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/res/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/res/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<script language="Javascript">

	function editTopic(id,name,listorder){
		jQuery('#newTopicName').val(name);
		jQuery('#newTopicOrder').val(listorder);
		jQuery('#editDialog').modal('show').on('shown',function(){
		jQuery("#btnSave").click(function(){
			var newName=jQuery('#newTopicName').val();
			var newOrder=jQuery('#newTopicOrder').val();
			newName=newName.replace(/(^\s*)|(\s*$)/g, "");
			if(newName==name&&newOrder==listorder){
				return;
			}else{
			jQuery(this).attr('href','__URL__/editTopic/topicid/'+id+'/topicname/'+newName+'/listorder/'+newOrder);
		}
		});
		});
	}
	function deleteTopic(id){
		jQuery("#btnDel").attr('href','__URL__/deleteTopic/topicid/'+id);
		jQuery('#deleteDialog').modal('show');
	}
</script>
</head>
<body>

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<a class="brand" href="#">SwordBearer</a>
		<ul class="nav">
			<li>
				<a href="<?php echo U(index);?>">博客管理</a>
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
			<li>
				<a href="<?php echo U(add_blog);?>">添加博客</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<form class="input-prepend input-append" method="post" action="<?php echo U('addTopic');?>">
		<select required name="new_topic_catid">
			<?php if(is_array($allCats)): $i = 0; $__LIST__ = $allCats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<input type="text" name="new_topic_order"class="input input-small" placeholder="专栏序号" required />
		<input type="text" name="new_topic_name"class="input" placeholder="专栏名称" required />
		<input type="submit" class="btn btn-success" value="添加"/>
	</form>
	<form method="post" name="topic_form">
		<table class="table table-hover table-condensed table-hover">
			<thead>
				<tr class="tbl_head">
					<th>类别</th>
					<th>名称</th>
					<th>序号</th>
					<th>博客</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($allTopics)): $i = 0; $__LIST__ = $allTopics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topic): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($topic["catname"]); ?></td>
						<td><?php echo ($topic["name"]); ?></td>
						<td><?php echo ($topic["listorder"]); ?></td>
						<td><?php echo ($topic["blogcount"]); ?></td>
						<td>
							<a class="btn btn-small" onClick="editTopic(<?php echo ($topic["id"]); ?>,'<?php echo ($topic["name"]); ?>',<?php echo ($topic["listorder"]); ?>)">编辑</a>
							<a class="btn btn-small" onClick="deleteTopic(<?php echo ($topic["id"]); ?>)" >删除</a>
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
		<div class="modal-body">
			<div class="input-prepend">
				<label class="add-on">专栏序号</label>
				<input id="newTopicOrder"  type="text" autofocus/>
			</div>
			<div class="input-prepend">
				<label class="add-on">专栏名称</label>
				<input id="newTopicName" type="text"/>
			</div>
		</div>
		<div class="modal-footer">
			<a id="btnSave" href="#" class="btn btn-primary">保存</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
		</div>
	</div>
	<div class="modal hide" id="deleteDialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>删除专栏</h3>
		</div>
		<div class="modal-body">
			<lable>确定要删除该专栏吗？</lable>
		</div>
		<div class="modal-footer">
			<a id="btnDel" href="#" class="btn btn-danger">删除</a>
			<a class="btn" data-dismiss="modal" aria-hidden="true">取消</a>
		</div>
	</div>
</div>
</body>
</html>