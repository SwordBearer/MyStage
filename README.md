# MyStage

基于[ThinkPHP](https://github.com/liu21st/thinkphp)框架开发的个人博客系统框架，包括后台管理和前端两部分.

实际案例可参考 [SwordBearer's Lab](http://www.swordbearer.sinaapp.com)(前台，部署在sae中)代码按照前台和后台分别存放:
+ 后台放置于 /Admin 目录中.
+ 前台放置于 /Home 目录中.
  
运行环境：Apache Server + MySQL ,可以直接部署使用;部署介绍请看这里[测试部署](https://github.com/SwordBearer/MyStage/blob/master/%E6%B5%8B%E8%AF%95%E9%83%A8%E7%BD%B2.txt)

## 项目说明

* 数据库设计:在[/db_text](https://github.com/SwordBearer/MyStage/tree/master/db_text)目录下.
* 界面美化: 在[/Public/res](https://github.com/SwordBearer/MyStage/tree/master/Public/res) 文件夹下面,分别是CSS,JavaScript和图片(img)文件.
* 博客后台基于[Bootstrap](https://github.com/twitter/bootstrap)和[JQuery](https://github.com/jquery/jquery)来实现，前台使用自定义的CSS文件.
* 博客中使用的四张图片: 原创(ico_original.gif) , 翻译(ico_translate.gif) , 转载(ico_repost.gif),以及标题栏背景图(tit_bg.jpg)
均取自CSDN网站.
* 使用[uEditor](https://github.com/campaign/ueditor)作为博客编辑器;代码高亮基于[SyntaxHighlighter](https://github.com/alexgorbatchev/SyntaxHighlighter),并更改了代码显示样式.

持续更新中.....


## Copyright and license

#### SwordBearer Tang [ranxiedao@163.com]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

  [http://www.apache.org/licenses/LICENSE-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
