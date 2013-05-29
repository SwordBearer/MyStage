# MyStage

基于<a href="https://github.com/liu21st/thinkphp" target="_blank">ThinkPHP</a>框架开发的个人博客系统框架，包括后台管理和前端两部分.实际案例可参考<a href="http://www.swordbearer.sinaapp.com" target="_blank">SwordBearer's Lab</a>(前台,部署在sae中).

代码按照前台和后台分别存放:
+ 后台放置于 /Admin 目录中.
+ 前台放置于 /Home 目录中.
  
运行环境：Apache Server + MySQL ,可以直接部署使用;部署介绍请看这里[测试部署](https://github.com/SwordBearer/MyStage/blob/master/测试部署.md)

## 项目说明

* 数据库设计:在[/db_text](https://github.com/SwordBearer/MyStage/tree/master/db_text)目录下,由于是个人博客,对性能要求不是很高，所以设计有些不合理，后续将进行修改..
* 界面美化: 在[/Public/res](https://github.com/SwordBearer/MyStage/tree/master/Public/res) 文件夹下面,分别是CSS,JavaScript和图片(img)文件.
* 博客后台基于<a href="https://github.com/twitter/bootstrap" target="_blank">Bootstrap</a>和<a href="https://github.com/jquery/jquery" target="_blank">JQuery</a>来实现，前台使用自定义的CSS文件.
* 博客中使用的四张图片: 原创(ico_original.gif) , 翻译(ico_translate.gif) , 转载(ico_repost.gif),以及标题栏背景图(tit_bg.jpg)
均取自CSDN网站.
* 使用<a href="https://github.com/campaign/ueditor" target="_blank">uEditor</a>作为博客编辑器;代码高亮基于<a href="https://github.com/alexgorbatchev/SyntaxHighlighter" target="_blank">SyntaxHighlighter</a>,并更改了代码显示样式.

## 后台界面预览

* 后台登录界面
![](https://github.com/SwordBearer/MyStage/raw/master/screenshots/admin_login.png)
* 后台主页
![](https://github.com/SwordBearer/MyStage/raw/master/screenshots/admin_index.png)

![](https://github.com/SwordBearer/MyStage/raw/master/screenshots/admin_category_manage.PNG)
* 添加博客
![](https://github.com/SwordBearer/MyStage/raw/master/screenshots/admin_add_blog.PNG)


## Copyright and license

#### SwordBearer Tang [ranxiedao@163.com]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

  <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License-2.0</a>

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
