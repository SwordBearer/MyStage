<?php
class BlogModel extends Model{

	public function getAll(){
		$sql="SELECT blog.id,blog.title,blog.inputtime,blog.catid,blog.readcount,topic.name AS topicname ,(SELECT count(comm.id) FROM mystage_blog_comm AS comm WHERE blog.id=comm.blogid ) AS commentcount 
		FROM mystage_blog AS blog ,mystage_blog_topic AS topic 
		WHERE blog.status=1 AND blog.topicid=topic.id 
		ORDER BY updatetime DESC";
		return $this->query($sql);
	}
	
	public function getByTopic($catid,$topicid){
		$sql1="SELECT blog.id,blog.title,blog.inputtime,blog.typeid,blog.readcount,topic.name AS topicname ,(SELECT count(comm.id) FROM mystage_blog_comm AS comm WHERE blog.id=comm.blogid ) AS commentcount
		 FROM mystage_blog AS blog,mystage_blog_topic AS topic 
		 WHERE blog.status=1  AND blog.topicid=topic.id AND blog.catid=".$catid;
		$sql2="";
		$sql3=" ORDER BY inputtime DESC ";
		if($topicid!=-1){
			$sql2=" AND blog.topicid=".$topicid;
		}
		$sql=$sql1.$sql2.$sql3;
		$result=$this->query($sql);
		return $result;
	}

	public function getById($blogid){
		$sql="SELECT blog.*,topic.name AS topicname,(SELECT count(comm.id) FROM mystage_blog_comm AS comm WHERE blog.id=comm.blogid ) AS commentcount FROM mystage_blog AS blog,mystage_blog_topic AS topic WHERE blog.id=".$blogid." AND blog.topicid=topic.id";
		$result=$this->query($sql);
		return $result[0];
	}

	public function getRecentBlogs(){
		$sql="SELECT blog.id,blog.title,blog.inputtime FROM mystage_blog AS blog WHERE blog.status=1 ORDER BY inputtime DESC limit 5 ";
		$result=$this->query($sql);
		return $result;
	}
}
?>