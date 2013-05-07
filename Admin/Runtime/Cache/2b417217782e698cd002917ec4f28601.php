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
<style type="text/css">
form {
  width: 24em;
  margin: 120px auto;
  padding: 60px 60px;
  overflow: auto;
  font-family: "微软雅黑","宋体";
  color: #3e4a49;
  background-color: #3CB371;
  background: -webkit-gradient( linear, left bottom, left top, color-stop(0,#f5eedb), color-stop(1, #faf8f1) );
  background: -moz-linear-gradient( center bottom, #f5eedb 0%, #faf8f1 100% );  
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}

form ul {
  list-style: none;
}
</style>
<body>
	<form method="post" action="__URL__/checkLogin" >
			<ul>
				<li class="input-prepend">
					<label class="add-on">用户名</label>
					<input type="text" name="username" placeholder="用户名" required autofocus maxlength="50" />
				</li>
				 <li class="input-prepend">
          <label class="add-on">密&nbsp;&nbsp;&nbsp;码</label>
				 	<input type="password" name="password" placeholder="密码" required maxlength="100" />
				 </li>
			</ul>
      <center><input type="submit" name="dosubmit" class="btn btn-success btn-large" id="btn_submit" value="登    录"/></center>
	</form>
</body>
</html>