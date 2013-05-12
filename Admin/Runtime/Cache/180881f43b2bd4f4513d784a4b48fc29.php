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

	function deleteComm(id){
		jQuery("#btnDel").attr('href','__URL__/deleteComm/commid/'+id);
		jQuery('#deleteDialog').modal('show');
	}
</script>
<style type="text/css">
.comm_content{
	text-align:left !important;
	margin-left: 6px;
	white-space:pre-wrap;
	word-wrap: break-word;
}</style>
</head>
<body>
<div class="nav">
	<div class="nav-inner">
		<a class="brand" href="#">SwordBearer's Lab</a>
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
				<a href="<?php echo U(add_blog);?>">添加博客</a>
			</li>
		</ul>
	</div>
</div>
<div class="main_content">
	<div class="blogDetails baseDiv">
		<div class="title"><?php echo ($curBlog["title"]); ?></div>
		<div class="info">
			发表于<?php echo ($curBlog["inputtime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
				专栏:<?php echo ($curBlog["topicname"]); ?>&nbsp;&nbsp;&nbsp;
			阅读(<?php echo ($curBlog["readcount"]); ?>) |
			<a href="#commentTitle">评论(<?php echo ($curBlog["commentcount"]); ?>)</a>
		</div>
		<div class="blogBody"><?php echo ($curBlog["content"]); ?></div>
	</div>
	<br/>
	<div class="dividerTitle" id="addCommDiv">评论</div>
	<?php if(empty($allComms)): ?><span style="margin:10px;">暂无评论</span>
		<?php else: ?>
		<form method="post" name="topic_form">
			<table class="table table-hover table-condensed table-hover">
				<thead>
					<tr class="tbl_head">
						<th>时间</th>
						<th>IP</th>
						<th>评论内容</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($allComms)): $i = 0; $__LIST__ = $allComms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($comm["inputtime"]); ?></td>
							<td><?php echo ($comm["ipstr"]); ?></td>
							<td class="comm_content"><?php echo ($comm["content"]); ?></td>
							<td>
								<a class="btn btn-small" onClick="deleteComm(<?php echo ($comm["id"]); ?>)" >删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</form><?php endif; ?>
</div>
<div class="modal hide" id="deleteDialog">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>删除评论</h3>
	</div>
	<div class="modal-body">
		<lable>确定要删除该条评论吗？</lable>
	</div>
	<div class="modal-footer">
		<a id="btnDel" href="#" class="btn btn-danger">删除</a>
		<a class="btn" data-dismiss="modal" aria-hidden="true">取消</a>
	</div>
</div>
<div id="gototop" style="display:none;">
	<a id="gototop_hint" href="#" title="回到顶部">
		<img src="__PUBLIC__/res/img/gototop.png" alt="TOP" />
	</a>
</div>
<script type="text/javascript">
    $(function(){
        var d_top=$('#gototop');
        document.onscroll=function(){
            var scrTop=(document.body.scrollTop||document.documentElement.scrollTop);
            if(scrTop>500){
                d_top.show();
            }else{
                d_top.hide();
            }
        }
        $('#gototop_hint').click(function(){
            scrollTo(0,0);
            this.blur();
            return false;
        });
    });
	</script>
</body>
</html>