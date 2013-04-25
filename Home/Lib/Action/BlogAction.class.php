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
		$this->display();
	}

	public function blog_details(){
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
}