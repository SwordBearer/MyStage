<?php
class BlogModel extends Model{

	public function getAll(){
		$sql="SELECT blog.*,cat.name AS catname,topic.name AS topicname,(SELECT count(comm.id) FROM mystage_blog_comment AS comm
		 WHERE blog.id=comm.blogid ) AS commentcount  FROM mystage_blog AS blog,mystage_blog_cat AS cat,mystage_blog_topic AS topic
		  WHERE blog.status=1  AND blog.catid=cat.id AND blog.topicid=topic.id  ORDER BY updatetime DESC ";
		return $this->query($sql);
	}
	
	public function getByTopic($catid,$topicid){
		$sql1="SELECT blog.*,(SELECT count(comm.id) FROM mystage_blog_comment AS comm WHERE blog.id=comm.blogid ) AS commentcount
		 FROM mystage_blog AS blog
		 WHERE blog.status=1 AND blog.catid=".$catid;
		$sql2="";
		$sql3=" ORDER BY updatetime DESC ";
		if($topicid!=-1){
			$sql2=" AND blog.topicid=".$topicid;
		}
		$sql=$sql1.$sql2.$sql3;
		$result=$this->query($sql);
		return $result;
	}

	public function getById($blogid){
		$sql="SELECT blog.*,topicmap.topicid FROM mystage_blog AS blog,mystage_topic_blog_map AS topicmap WHERE blog.id=".$blogid." AND blog.id=topicmap.blogid limit 1";
		$result=$this->query($sql);
		return $result[0];
	}
}
?>