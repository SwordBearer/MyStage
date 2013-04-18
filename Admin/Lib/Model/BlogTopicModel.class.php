<?php

Class BlogTopicModel extends Model{

	public function getTopics(){
		$sql="SELECT cat.name AS catname,topic.*
			FROM mystage_blog_topic AS topic,mystage_blog_cat AS cat
			WHERE topic.catid=cat.id ORDER BY cat.id";
		$result=$this->query($sql);
		return $result;
	}
}

?>