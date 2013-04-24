<?php
class BlogAction extends Action {
    public function index(){
    	$this->getAllTopics();
    	$this->getBlogsByCatId(-1);
    	$this->display();
	}


/************************************/
	public function getAllTopics(){
		$Topic=new BlogTopicModel();
		$result=$Topic->getTopics();
		$this->assign("allTopics",$result);
	}
	public function getBlogsByCatId($catid){
		$Blog=new BlogModel();
		$result=$Blog->getByCat($catid);
		$this->assign("allBlogs",$result);
	}
}