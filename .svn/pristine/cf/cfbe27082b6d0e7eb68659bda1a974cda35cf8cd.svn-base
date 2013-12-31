<?php

Class BlogCommModel extends Model{
	public function getCommsByBlog($blogId){
		$sql="SELECT comm.* FROM mystage_blog_comm AS comm
			   WHERE comm.blogid=".$blogId."
			     ORDER BY comm.blogid AND comm.inputtime DESC ";
		$result=$this->query($sql);
		return $result;
	}
}
?>