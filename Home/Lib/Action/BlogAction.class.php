<?php
class BlogAction extends Action {
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
	
	public function about(){
		$this->assign("curCat",4);
		$this->display();
	}

	public function blog_details(){
		$blogid=$_REQUEST['blog'];
		if(is_null($blogid)){
			$this->error("数据错误");
		}
		$Blog=new BlogModel();
		$condtion['id']=$blogid;
		$Blog->where($condtion)->setInc('readcount',1);
		$blog=$Blog->getById($blogid);
		$comms=$this->getBlogComm($blogid);
		$this->assign("curBlog",$blog);
		$this->assign("allComms",$comms);

		$result=$Blog->getRecentBlogs();
		$this->assign("recentBlogs",$result);
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
		$data['ipstr']=$this->GetIP();
		$data['inputtime']=date('Y-m-d H:i:s',time());
		$data['content']=$comm;
		$Comm=M('BlogComm');
		$result=$Comm->add($data);
		if(!$result||is_null($result)){
			$this->error("提交评论失败!!!");
		}else{
			$this->redirect('/Blog/blog_details#addCommDiv',array('blog'=>$blogid),0);
		}
	}
	private function GetIP() {    
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {    
        //如果变量是非空或非零的值，则 empty()返回 FALSE。    
            $IP = explode(',',$_SERVER['HTTP_CLIENT_IP']);    
        }    
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {    
            $IP = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);    
        }    
        elseif (!empty($_SERVER['REMOTE_ADDR'])) {    
            $IP = explode(',',$_SERVER['REMOTE_ADDR']);    
        }    
        else {    
            $IP[0] = 'None';    
        }    
        return $IP[0];    
    }    

	public function getBlogComm($blogid){
		$Comm=M('BlogComm');
		$condtion['blogid']=$blogid;
		return $Comm->where($condtion)->select();
	}
}