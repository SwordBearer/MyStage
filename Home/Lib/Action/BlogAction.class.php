<?php
// 本类由系统自动生成，仅供测试用途
class BlogAction extends Action {
    public function index(){
    	$this->getAllTopics();
    	$this->display();
	}


/************************************/
public function getAllTopics(){
		$Topic=new BlogTopicModel();
		$result=$Topic->getTopics();
		$this->assign("allTopics",$result);
	}
}