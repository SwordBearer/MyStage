MyStage

/*** 基本信息 ***/
基于ThinkPHP框架所写的一个个人博客系统，包括后台管理和前端两部分；
实际案例可参考这里 http://www.swordbearer.sinaapp.com (前台，部署在sae中)
代码按照前台和后台分别存放：
  后台在 /Admin 目录中；
  前台在 /Home 目录中；
运行环境：Apache Server + MySQL ，可以直接部署使用；

/*** 部署测试 ***/
测试时，建议安装XAMPP，该软件集成了Apache Server 和MySQL，将工程拷贝，直接放在Xampp中的 /htdocs 目录中；
打开XAMPP后，启动 Apache Server和 MySQL ，同时配置好数据库；
具体数据库账号密码配置在 /Home/Config/config.php 中；
准备好以上运行环境后，打开浏览器，地址栏输入 http://127.0.0.1/MyStage (或者 http://127.0.0.1/MyStage/index.php) 
可进入前台;   输入 http://localhost/MyStage/admin.php 可进入后台

/*** 项目信息***/
后台的UI暂时使用了 Bootstrap +JQuery 来完成，后期将逐渐替换成自己的代码；
前台美化使用自定义的css 文件来处理；

此项目为个人学习项目，主要用于本人搭建自己的博客，任何人可以拿去使用；

持续更新中.....
