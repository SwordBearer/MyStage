<?php
class BlogModel extends Model{
	public function getByStatus($status){
		$sql="SELECT * FROM mystage_blog AS blog WHERE blog.status=".$status." ORDER BY updatetime DESC ";
		$result=$this->query($sql);
		return $result;
	}

	public function getByCat($catid){
		$sql="SELECT * FROM mystage_blog AS blog WHERE blog.status=1 AND blog.catid=".$catid." ORDER BY updatetime DESC ";
		$result=$this->query($sql);
		return $result;
	}

	public function getByTopic($topic){
		$sql="SELECT * FROM mystage_blog AS blog , mystage_topic_blog_map AS map WHERE blog.status=1 AND blog.id=map.blogid AND map.topicid=".$topicid;
		$result=$this->query($sql);
		return $result;
	}
}
?>