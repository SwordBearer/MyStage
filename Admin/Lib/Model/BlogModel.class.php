<?php
class BlogModel extends Model{
	public function getByStatus($status){
		$sql="SELECT blog.id,blog.title,blog.inputtime,topic.name AS topicname FROM mystage_blog AS blog,mystage_blog_topic AS topic WHERE blog.status=".$status." AND blog.topicid=topic.id  ORDER BY updatetime DESC ";
		$result=$this->query($sql);
		return $result;
	}

	public function getByCat($catid){
		$sql="SELECT * FROM mystage_blog AS blog WHERE blog.status=1 AND blog.catid=".$catid." ORDER BY updatetime DESC ";
		$result=$this->query($sql);
		return $result;
	}

	public function getByTopic($topic){
		$sql="SELECT * FROM mystage_blog AS blog WHERE blog.status=1 AND blog.topicid=".$topicid;
		$result=$this->query($sql);
		return $result;
	}

	public function getById($blogid){
		$sql="SELECT blog.*,topic.name FROM mystage_blog AS blog,mystage_blog_topic AS topic WHERE blog.id=".$blogid." AND blog.topicid=topic.id";
		var_dump($sql);
		$result=$this->query($sql);
		return $result[0];
	}
}
?>