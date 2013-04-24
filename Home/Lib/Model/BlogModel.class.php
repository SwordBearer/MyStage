<?php
class BlogModel extends Model{
	public function getByStatus($status){
		$sql="SELECT blog.id,blog.title,blog.inputtime,topic.name AS topicname FROM mystage_blog AS blog,mystage_blog_topic AS topic,mystage_topic_blog_map AS topicmap WHERE blog.status=".$status." AND topicmap.topicid=topic.id AND topicmap.blogid=blog.id ORDER BY updatetime DESC ";
		$result=$this->query($sql);
		return $result;
	}

	public function getByCat($catid){
		$sql1="SELECT blog.id,blog.title,blog.inputtime,blog.readcount,blog.type,(SELECT count(comm.id) FROM mystage_blog_comment AS comm WHERE blog.id=comm.blogid ) AS commentcount FROM mystage_blog AS blog WHERE blog.status=1 ";
		$sql2="";
		$sql3=" ORDER BY updatetime DESC ";
		if($catid!=-1){
			$sql2=" AND blog.catid=".$catid;
		}
		$sql=$sql1.$sql2.$sql3;
		$result=$this->query($sql);
		return $result;
	}

	public function getByTopic($topic){
		$sql="SELECT * FROM mystage_blog AS blog , mystage_topic_blog_map AS map WHERE blog.status=1 AND blog.id=map.blogid AND map.topicid=".$topicid;
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