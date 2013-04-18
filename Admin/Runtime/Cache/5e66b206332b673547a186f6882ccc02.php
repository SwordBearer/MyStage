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
<style type="text/css">
form {
  width: 35em;
  margin: 80px auto;
  padding: 50px 60px;
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
  margin: 0;
  padding: 0;
}

form ul li {
  margin: .9em 0 0 0;
  padding: 0;
}

form * {
  line-height: 1em;
}

/* Form heading */

form h1 {
  margin: 0 0 1.5em 0;
  padding: 0;
  text-align: center;
}

fieldset {
  padding: 0 10px 10px;
  margin: 0 0 20px;
  border: 2px solid #218868;
  background: #eae1c0;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}

/* Give each fieldset legend a nice curvy green box with white text */

legend {
  color: #fff;
  background: #8fb98b;
  font-size: 1.4em;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  margin: 0;
  width: 9em;
  border: 2px solid #218868;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
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
		<fieldset>
			<legend>管理员登录</legend>
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
		</fieldset>
		<center><input type="submit" name="dosubmit" class="btn btn-success btn-large" id="btn_submit" value="登    录"/></center>
	</form>
</body>
</html>