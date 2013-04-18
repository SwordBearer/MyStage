<?php
class BlogAction extends Action {



/*****************pages*****************/
	public function index(){
		$this->checkUser();
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
		$this->display();
	}

	public function wastebasket(){
		$this->display();
	}

/*******************Blog**************************/
	public function checkUser(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->error("没有登录",__GROUP__."/Public/login");
		}
	}

	public function getAllBlogs(){
		$Blog=new BlogModel();

	}

/*发布博客*/
	public function publishBlog(){
		$data=array();
		$data['id']=$_POST['blogId'];
		$data['catid']=$_POST['blog_cat'];
		$data['topicid']=$_POST['blog_topic'];
		$data['typeid']=$_POST['blog_type'];
		$data['status']=1;
		$data['inputtime']=date('Y-m-d H:i:s',time());
		$data['updatetime']=date('Y-m-d H:i:s',time());
		$data['title']=$_POST['blog_title'];
		$data['title']=$_POST['blog_title'];

		$content=$_POST['blog_content'];
		$data['content']=$content;
		$len=strlen($content);
		//从内容中截取博客的简述
		if($len<30){
			$data['description']='';
		}else if($len>=0&&$len<=120){
			$data['description']=subString_UTF8($content,0,$len/2);
		}else{
			$data['description']=subString_UTF8($content,0,60);
		}
		var_dump($data);
	}
/*保存草稿*/
	public function saveBlog(){

	}

	public function addBlog(){
		$isPublish=isset($_POST['publish']);
		$isSave=isset($_POST['save']);
		if((!$isPublish)&&(!$isSave)){
			return;
		}
		//发布博客
		else if($isPublish){
			publishBlog();
		}
		//保存草稿
		else if($isSave){
			saveBlog();
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
		if($catid==NULL||$topicname==NULL){
			$this->error("输入有误!");
		}else{
			$data['catid']=$catid;
			$data['name']=$topicname;
			var_dump($data);
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
		$Topic=new BlogTopicModel();
		var_dump($_REQUEST['topicid']);
		$result=$Topic->delete($_REQUEST['topicid']);
		var_dump($result);
		if(!$result||$result==0){
			$this->error('删除失败');
		}else{
			$this->redirect(__GROUP__."/Blog/topic_manage");
		}
	}

	public function editTopic(){
		$this->checkUser();
		$Topic=new BlogTopicModel();
		$data['id']=$_REQUEST['topicid'];
		$data['name']=$_REQUEST['topicname'];
		$result=$Topic->save($data);
		if(!$result||$result==0){
			$this->error('编辑失败');
		}else{
			$this->redirect(__GROUP__."/Blog/topic_manage");
		}
	}

/************Public functions*************/
 	function subString_UTF8($str, $start, $lenth){
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
        return $r;
 	} // End subString_UTF8;
}

?>