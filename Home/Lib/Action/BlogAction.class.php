<?php
class BlogAction extends Action {
    public function index(){
    	$this->getAllBlogs();
    	$this->display();
	}
	public function monkey(){
		$topicid=$_REQUEST['topicid'];
		if(is_null($topicid)){
			$topicid=-1;
		}
		$this->assign("curCat",1);
		$this->getTopicsByCat(1);
		$this->getBlogsByTopic(1,$topicid);
		$this->display();
	}

	public function essay(){
		$topicid=$_REQUEST['topicid'];
		if(is_null($topicid)){
			$topicid=-1;
		}
		$this->assign("curCat",2);
		$this->getTopicsByCat(2);
		$this->getBlogsByTopic(2,$topicid);
		$this->display();
	}

	public function enshrine(){
		$topicid=$_REQUEST['topicid'];
		if(is_null($topicid)){
			$topicid=-1;
		}
		$this->assign("curCat",3);
		$this->getTopicsByCat(3);
		$this->getBlogsByTopic(3,$topicid);
		$this->display();
	}

	public function blog_details(){
		$blogid=$_REQUEST['blog'];
		if(is_null($blogid)){
			$this->error("数据错误");
		}
		$Blog=new BlogModel();
		$blog=$Blog->getById($blogid);
		$comms=$this->getBlogComm($blogid);
		$this->assign("curBlog",$blog);
		$this->assign("allComms",$comms);
		$this->display();
	}


/************************************/
	public function getTopicsByCat($catid){
		$Topic=new BlogTopicModel();
		$result=$Topic->getByCat($catid);
		$this->assign("allTopics",$result);
	}
	public function getBlogsByTopic($catid,$topicid){
		$Blog=new BlogModel();
		$result=$Blog->getByTopic($catid,$topicid);
		$this->assign("allBlogs",$result);
	}

	public function getAllBlogs(){
		$Blog=new BlogModel();
		$result=$Blog->getAll();
		$this->assign("allBlogs",$result);
	}

	public function addComm(){
		$blogid=$_POST['blog'];
		if(is_null($blogid)){
			$this->error("数据错误 ".$blogid);
		}
		$comm=$_POST['comm'];
		$data['blogid']=$blogid;
		$data['ipstr']=$_SERVER["REMOTE_ADDR"];
		$data['inputtime']=date('Y-m-d H:i:s',time());
		$data['content']=$comm;
		$Comm=M('BlogComm');
		$result=$Comm->add($data);
		if(!$result||is_null($result)){
			$this->error("提交评论失败!!!");
		}else{
			$this->redirect('/Blog/blog_details#commentTitle',array('blog'=>$blogid),0);
		}
	}

	public function getBlogComm($blogid){
		$Comm=M('BlogComm');
		$condtion['blogid']=$blogid;
		return $Comm->where($condtion)->select();
	}
}