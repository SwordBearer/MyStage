<?php
class BlogAction extends Action {



/*****************pages*****************/
	public function index(){
		$this->checkUser();
		$this->getBlogsByStatus(1);
		$this->display();
	}

	public function blog_details(){
		$blogid=$_REQUEST['blogid'];
		if($blogid==NULL){
			$this->error("数据错误!");
		}
		$Blog=new BlogModel();
		$blog=$Blog->find($blogid);
		if(!blog){
			$this->error("获取博客数据错误");
		}else{
			$this->assign("curBlog",$blog);
		}
		$this->display();
	}

	public function add_blog(){
		$this->getAllTopics();
		$this->getAllCats();
		$this->getAllTypes();
		$this->display();
	}

	public function draftbox(){
		$this->display();
	}

	public function topic_manage(){
		$this->checkUser();
		$this->getAllTopics();
		$this->getAllCats();
		$this->display();
	}

	public function wastebasket(){
		$this->checkUser();
		$this->getBlogsByStatus(-1);
		$this->display();
	}

/*******************Blog**************************/
	public function checkUser(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->error("没有登录",__GROUP__."/Public/login");
		}
	}
/*根据博客的状态获取 1:已发布;2:草稿;3:垃圾*/
	public function getBlogsByStatus($status){
		$Blog=new BlogModel();
		$blogs=$Blog->getByStatus($status);
		$this->assign("allBlogs",$blogs);
	}

	public function addBlog(){
		$isPublish=isset($_POST['publish']);
		$isSave=isset($_POST['save']);
		if((!$isPublish)&&(!$isSave)){
			return;
		}
		$data=array();
		//发布博客
		if($isPublish){
			$data['status']=1;//正常博客
		}
		//保存草稿
		if($isSave){
			$data['status']=2;
		}

		$data['catid']=$_POST['blog_cat'];
		$data['typeid']=$_POST['blog_type'];
		$data['inputtime']=date('Y-m-d H:i:s',time());
		$data['updatetime']=date('Y-m-d H:i:s',time());
		$data['title']=$_POST['blog_title'];
		$content=$_POST['blog_content'];
		$data['content']=$content;
		$Blog=new BlogModel();
		$result=$Blog->add($data);
		if(!$result||$result==0){
			$this->error('添加博客失败！！！');
		}else{
			$TopicMap=M('TopicBlogMap');
			$data2['topicid']=$_POST['blog_topic'];
			$data2['blogid']=$result;
			$result2=$TopicMap->add($data2);
			$this->redirect(__GROUP__."/Blog/index");
		}
	}

	public function wasteBlog(){
		$blogid=$_REQUEST['blogid'];
		if($blogid==NULL){
			$this->error("数据错误!");
		}
		$this->checkUser();
		$Blog=new BlogModel();
		$data['id']=$blogid;
		$data['status']=-1;
		$result=$Blog->save($data);
		if(!$result||$result==0){
			$this->error('删除博客失败');
		}else{
			$this->redirect(__GROUP__."/Blog/index");
		}
	}

	public function recoveryBlog(){
		$blogid=$_REQUEST['blogid'];
		if($blogid==NULL){
			$this->error("数据错误!");
		}
		$this->checkUser();
		$Blog=new BlogModel();
		$data['id']=$blogid;
		$data['status']=1;
		$result=$Blog->save($data);
		if(!$result||$result==0){
			$this->error('恢复博客失败');
		}else{
			$this->redirect(__GROUP__."/Blog/wastebasket");
		}
	}
	public function deleteBlog(){
		$blogid=$_REQUEST['blogid'];
		if($blogid==NULL){
			$this->error("数据错误!");
		}
		$this->checkUser();
		$Blog=new BlogModel();
		$data['id']=$blogid;
		$result=$Blog->where($data)->delete();
		if(!$result||$result==0){
			$this->error('删除博客失败！！！');
		}else{
			$this->redirect(__GROUP__."/Blog/wastebasket");
		}
	}

/******************Category&Type************************/
	public function getAllCats(){
		$Cat=M("BlogCat");
		$result=$Cat->
		select();
		$this->assign("allCats",$result);
	}

	public function getAllTypes(){
		$Type=M("BlogType");
		$result=$Type->select();
		$this->assign("allTypes",$result);
	}

/*****************Topic****************************/

	public function getAllTopics(){
		$Topic=new BlogTopicModel();
		$result=$Topic->getTopics();
		$this->assign("allTopics",$result);
	}

	public function addTopic(){
		$this->checkUser();
		$catid=$_POST['new_topic_catid'];
		$topicname=$_POST['new_topic_name'];
		$topicorder=$_POST['new_topic_order'];
		if($catid==NULL||$topicname==NULL){
			$this->error("输入有误!");
		}else{
			$data['catid']=$catid;
			$data['name']=$topicname;
			$data['listorder']=$topicorder;
			$Topic=new BlogTopicModel();
			$result=$Topic->add($data);
			if(!$result||$result==0){
				$this->error('添加专栏失败！！！');
			}else{
				$this->redirect(__GROUP__."/Blog/topic_manage");
			}
		}
	}

	public function deleteTopic(){
		$this->checkUser();
		$topicid=$_REQUEST['topicid'];

		/*先将该专栏下的博客修改到默认专栏下面*/
		$TopicBlogMap=M('TopicBlogMap');
		$condition['topicid']=$topicid;
		$data['topicid']=0;
		$result=$TopicBlogMap->where($condition)->save($data);
		var_dump("修改的文章专栏数:"+($result));
		if($result==0||$result>0){
			$Topic=new BlogTopicModel();
			$result=$Topic->delete($_REQUEST['topicid']);
			if(!$result||$result==0){
				$this->error('删除失败');
			}else{
				$this->redirect(__GROUP__."/Blog/topic_manage");
			}
		}else{
			$this->error('删除失败');
		}
	}

	public function editTopic(){
		$this->checkUser();
		$Topic=new BlogTopicModel();
		$data['id']=$_REQUEST['topicid'];
		$data['name']=$_REQUEST['topicname'];
		$data['listorder']=$_REQUEST['listorder'];
		$result=$Topic->save($data);
		if(!$result||$result==0){
			$this->error('编辑失败');
		}else{
			$this->redirect(__GROUP__."/Blog/topic_manage");
		}
	}

/************Public functions*************/
/*截取字符串**/
 	function abd_subString_UTF8($str, $start, $lenth){
        $len = strlen($str);
        $r = array();
        $n = 0;
        $m = 0;
        for($i = 0; $i< $len; $i++) {
            $x = substr($str, $i, 1);
            $a  = base_convert(ord($x), 10, 2);
            $a = substr('00000000'.$a, -8);
            if ($n < $start){
                if (substr($a, 0, 1) == 0) {
                }elseif (substr($a, 0, 3) == 110) {
                    $i += 1;
                }elseif (substr($a, 0, 4) == 1110) {
                    $i += 2;
                }
                $n++;
            }else{
                if (substr($a, 0, 1) == 0) {
                    $r[ ] = substr($str, $i, 1);
                }elseif (substr($a, 0, 3) == 110) {
                    $r[ ] = substr($str, $i, 2);
                    $i += 1;
                }elseif (substr($a, 0, 4) == 1110) {
                    $r[ ] = substr($str, $i, 3);
                    $i += 2;
                }else{
                    $r[ ] = '';
                }
                if (++$m >= $lenth){
                    break;
                }
            }
        }
        return join('',$r);
 	}
}

?>