<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="xmu.SwordBearer">
	<link href="__PUBLIC__/admin/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="__PUBLIC__/admin/css/mystage_admin.css" rel="stylesheet"/>
  	<script src="__PUBLIC__/admin/js/jquery-1.9.1.js" type="text/javascript" ></script>
  	<script src="__PUBLIC__/admin/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<style type="text/css">
form {
  width: 35em;
  margin: 80px auto;
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
  margin: 10px auto;
}

form ul li {
  margin: .9em 0 0 0;
  padding: 0;
}

label {
  display: block;
  float: left;
  clear: left;
  text-align: right;
  width: 40%;
  padding: .4em 0 0 0;
  margin: .15em .5em 0 0;
}
form *:focus {
  border: 2px solid #593131;
  outline: none;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}
</style>
<body>
	<form method="post" action="__URL__/checkLogin" >
			<ul>
				<li>
					<label for="name">用户名</label>
					<input type="text" name="username" placeholder="用户名" required autofocus maxlength="50" />
				</li>
				 <li>
				 	<label for="website">密码</label>
				 	<input type="password" name="password" placeholder="密码" required maxlength="100" />
				 </li>
			</ul>
		<center><input type="submit" name="dosubmit" class="btn btn-success btn-large" id="btn_submit" value="登    录"/></center>
	</form>
</body>
</html>