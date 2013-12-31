<?php

Class BlogTopicModel extends Model{
	public function getByCat($catid){
		$sql1=" SELECT topic.* FROM mystage_blog_topic AS topic ";
		$sql3=" ORDER BY topic.catid,topic.listorder ";
		if($catid==0){
			$sql2="";
		}else{
			$sql2=" WHERE topic.catid=".$catid;
		}
		$result=$this->query($sql1.$sql2.$sql3);
		return $result;
	}
}
?>