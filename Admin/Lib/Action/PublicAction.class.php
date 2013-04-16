<?php

class PublicAction extends Action{
	public function admin_login(){
		if(isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect(__GROUP__."/Index/index");
		}else{
			$this->display();
		}
	}
	public function checkUser(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->error("没有登录",__GROUP__."/Public/login");
		}else{
		}
	}
	public function addAdmin(){
		$data=array();
		$data['username']=trim($_POST['username']);
		$data['password']=md5(trim($_POST['password']));
		$Admin=new AdminModel();
		$Admin->add($data);
	}


	public function checkLogin(){
		//生成认证条件
		$data=array();
		$data['username']=trim($_POST['username']);
		$data['password']=md5(trim($_POST['password']));
		$Admin=new AdminModel();
		var_dump($data);
		var_dump(md5('kangri&daodi0'));
		$result=$Admin->where($data)->find();
		var_dump($result);
		if($result&&$result!=null){//登录成功
			$_SESSION[C('USER_AUTH_KEY')]=$result;
			$_SESSION[C('username')]=$result['username'];//trim($_POST['username']);
			$this->redirect(__GROUP__."/Index/index");
		}else{//登录失败
			//$this->error("登录失败!");
		}
	}

	public function logout(){
        if(isset($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			unset($_SESSION);
			session_destroy();
			$this->redirect(__GROUP__."/Public/login");
        }else {
        	$this->redirect(__GROUP__."/Index/index");
        }
    }

}

?>